<?php
require_once("user-info.php");
require_once("market-bot.php");

if(!isset($_SESSION['login_user'])):
  header("location: login.php");
endif;

//Kintamieji reikalingi nustatyti kiek eiluciu tures kiekviena lentele.
//in case eiluciu skaicius butu nelyginis - viena lentele tures viena eilute maziau
//$COUNT_CURR kintamasis nustatomas user-info.php faile
$userCurrTable1rows = floor($COUNT_CURR/2);
$userCurrTable2rows = ceil($COUNT_CURR/2);

?>

<!DOCTYPE html>
<html>

<?php require_once("head.php"); ?>

<body>
  <div class="container-fluid">
    <div class="row dashboard-content-align-end">

      <!-- Dashboard nav bar  -->
      <?php require_once("dashboard-side-nav.php"); ?>

      <content class="col-md-10 col-sm-10 col-11 bg-dashboard pr-5 pl-5">

        <!-- Dashboard user controls  -->
        <?php require_once("dashboard-user-control.php"); ?>

        <!-- User wallet information  -->
        <div class="row dashboard-user-wallet pt-3">
          <div class="col-lg-3 col-md-4 bg-dashboard-user-wallet">
            <div class="row">

              <div class="col-lg-4 col-md-4 p-2 dashboard-user-wallet-icon">
                <i class="fa fa-money" aria-hidden="true"></i>
              </div>

              <div class="col-lg-8 col-md-8 p-2 dashboard-user-wallet-text">
                <span class="h4">$<?php echo $wallet; ?></span>
                <span class="op-6">Total available</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 bg-dashboard-user-wallet">
            <div class="row">

              <div class="col-lg-4 col-md-4 p-2 dashboard-user-wallet-icon">
                <i class="fa fa-stack-overflow" aria-hidden="true"></i>
              </div>

              <div class="col-lg-8 col-md-8 p-2 dashboard-user-wallet-text">
                <span class="h4">$<?php echo $invested; ?></span>
                <span class="op-6">Total invested</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 bg-dashboard-user-wallet">
            <div class="row">

              <div class="col-lg-4 col-md-4 p-2 dashboard-user-wallet-icon">
                <i class="fa fa-certificate" aria-hidden="true"></i>
              </div>

              <div class="col-lg-8 col-md-8 p-2 dashboard-user-wallet-text">
                <span class="h4"><?php echo $xp; ?></span>
                <span class="op-6">Experience points</span>
              </div>
            </div>
          </div>
        </div>
        <!-- User wallet information END  -->

        <!-- User CryptoCurrencies  -->
          <div class="row pt-3 d-flex justify-content-around">
            <div class="col-lg-5 col-md-6 bg-dashboard-user-wallet pt-3">

              <table class="table dashboard-market-table table-fix-for-md table-responsive">
                <thead class="thead-inverse text-uppercase">
                  <tr>
                    <th class="text-center">Currency</th>
                    <th class="text-center">Amount</th>
                    <th class="text-center">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $currNames = GetAllCurrenciesNames($connection); // $currNames[0, 1, 2...]
                  $currAmounts = GetUserAllCryptoCurrencies($connection, $idx); //$currAmounts[0,1,2...]

                  for ($i = 0; $i < $userCurrTable1rows; $i++): ?>
                    <tr>
                      <td class="text-center">
                        <?php echo $currNames[$i]; ?>
                      </td>
                      <td class="text-center"><?php echo $currAmounts[$i]; ?></td>
                      <td class="text-center">
                        <a href="dashboard-currency-info.php?id=<?php echo $i+1; ?>" data-toggle="tooltip" data-placement="top" title="Go to currency market page">
                        <span class="btn btn-primary btn-sm pr-lg-3 pl-lg-3 pt-0 pb-0 pr-md-1 pl-md-1">
                          <i class="fa fa-plus" aria-hidden="true"></i>
                        </span>
                        </a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Buy/Sell history">
                          <span class="btn btn-success btn-sm pr-lg-3 pl-lg-3 pt-0 pb-0 pr-md-1 pl-md-1" data-toggle="modal" data-target="#historyModal<?php echo $i+1; ?>">H</span>
                        </a>
                      </td>
                    </tr>
                    <!-- table end -->
                    <!-- history modal  -->
                    <div id="historyModal<?php echo $i+1; ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-md">
                        <div class="modal-content">
                          <div class="modal-header">
                            <p class="modal-title h6 text-uppercase">history</p>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <?php
                            if(GetUserBuySellHistory($connection, $idx, $i+1)):
                              $history = GetUserBuySellHistory($connection, $idx, $i+1);
                              for ($k=0; $k < sizeof($history); $k++): ?>
                                <div class="row pb-3">
                                  <div class="col-2 text-center">
                                    <?php echo $history[$k]['action']; ?>
                                  </div>
                                  <div class="col text-center">
                                    <?php echo $history[$k]['value'] . " unit(s) " . $currNames[$i] . " for $" . $history[$k]['total_price'] .
                                    "\n ($" . $history[$k]['each_price'] . " each, $" . $history[$k]['tax'] . " market fee)"; ?>
                                  </div>
                                </div>
                    <?php     endfor;
                              ?>
                      <?php else:
                              echo "No history available.";
                       endif; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- modal end  -->

            <?php endfor; ?>
                </tbody>
              </table>
            </div>
            <!-- first table end  -->

            <!-- second user table  -->
            <div class="col-lg-5 col-md-6 bg-dashboard-user-wallet pt-3">

              <table class="table dashboard-market-table table-fix-for-md table-responsive">
                <thead class="thead-inverse text-uppercase">
                  <tr>
                    <th class="text-center">Currency</th>
                    <th class="text-center">Amount</th>
                    <th class="text-center">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $currNames = GetAllCurrenciesNames($connection); // $currNames[0, 1, 2...]
                  $currAmounts = GetUserAllCryptoCurrencies($connection, $idx); //$currAmounts[0,1,2...]

                  for ($i = $userCurrTable1rows; $i < $COUNT_CURR; $i++): ?>
                    <tr>
                      <td scope="row" class="text-center">
                        <?php echo $currNames[$i]; ?>
                      </td>
                      <td class="text-center"><?php echo $currAmounts[$i]; ?></td>
                      <td class="text-center">
                        <a href="dashboard-currency-info.php?id=<?php echo $i+1; ?>">
                        <span class="btn btn-primary btn-sm pr-lg-3 pl-lg-3 pt-0 pb-0 pr-md-1 pl-md-1">
                          <i class="fa fa-plus" aria-hidden="true"></i>
                        </span>
                        </a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Buy/Sell history">
                          <span class="btn btn-success btn-sm pr-lg-3 pl-lg-3 pt-0 pb-0 pr-md-1 pl-md-1" data-toggle="modal" data-target="#historyModal<?php echo $i+1; ?>">H</span>
                        </a>
                      </td>
                    </tr>

                    <!-- history modal  -->
                    <div id="historyModal<?php echo $i+1; ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-md">
                        <div class="modal-content">
                          <div class="modal-header">
                            <p class="modal-title h6 text-uppercase">history</p>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <?php
                            if(GetUserBuySellHistory($connection, $idx, $i+1)):
                              $history = GetUserBuySellHistory($connection, $idx, $i+1);
                              for ($k=0; $k < sizeof($history); $k++): ?>
                                <div class="row pb-3">
                                  <div class="col-2 text-center">
                                    <?php echo $history[$k]['action']; ?>
                                  </div>
                                  <div class="col text-center">
                                    <?php echo $history[$k]['value'] . " unit(s) " . $currNames[$i] . " for $" . $history[$k]['total_price'] .
                                    "\n ($" . $history[$k]['each_price'] . " each, $" . $history[$k]['tax'] . " market fee)"; ?>
                                  </div>
                                </div>
                    <?php     endfor;
                              ?>
                      <?php else:
                              echo "No history available.";
                       endif; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- modal end  -->

            <?php endfor; ?>
                </tbody>
              </table>
            </div>
            <!-- second table end  -->
          </div>
          <!-- 2 tables row end  -->

        <!-- User CryptoCurrencies END  -->

        <!-- User recent activity -->
        <div class="row pt-3 mb-3 dashboard-user-activity">
          <div class="col-md-12 pt-3 bg-dashboard-user-wallet">
            <span class="h3">Recent activity</span>

      <?php for ($i=1; $i < 4; $i++) { ?>
              <hr class="hr-color-white"/>
              <div class="row dashboard-user-activity-item">
                <div class="col-md-1 dashboard-user-activity-item-icon">
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <div class="col-md-11 dashboard-user-activity-item-text">
                  <span class="h6"><?php echo ${"activity$i"} ?></span>
                  <span class="h6 op-6"><?php echo TimeElapsed(${"activity" . $i . "_time"}); ?></span>
                </div>
              </div>
      <?php } ?>
            <hr class="hr-color-white"/>

          </div>
        </div>
      </content>
    </div>
  </div>
  <!-- container-fluid END  -->

  <!-- JS scripts  -->
  <?php require_once("scripts.php"); ?>

</body>

</html>
