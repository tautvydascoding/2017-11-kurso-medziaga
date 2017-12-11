<?php
require_once("user-info.php");

if(!isset($_SESSION['login_user'])):
  header("location: login.php");
endif;

require_once("market-bot.php");
$currencies = GetAllCurrencies($connection);?>

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

        <!-- Market carousel  -->
        <div class="row pt-3">
          <div class="col-md-12 owl-carousel">

            <?php
            foreach ($currencies as $currency):?>

            <div class="dashboard-carousel-item bg-dashboard-user-wallet">
              <div class="row pt-1 pb-1">
                <div class="col-5">
                  <img src="./images/crypto-svg/<?php echo $currency['img'] ?>" width="100" height="100" alt="">
                </div>
                <div class="col-7 dashboard-carousel-item-text">
                  <p class="h6"><?php echo $currency['name'] ?></p>
                  <?php $change = ($currency['lastPrice'] - $currency['priceBefore']) / $currency['lastPrice'] * 100; ?>
                  <p class="h6"><?php printf("%.2f %%", $change); ?></p>
                </div>
              </div>
            </div>
            <?php
            endforeach;
            ?>
          </div>
        </div>
        <!-- Market carousel END  -->

        <div class="row pt-3">
          <div class="col-md-12">

            <table class="table table-hover dashboard-market-table table-fix-for-md">
              <thead class="thead-inverse text-uppercase">
                <tr>
                  <th>Currency</th>
                  <th>Last Change %</th>
                  <th>Last price</th>
                  <th class="hide-for-phones">24HR high</th>
                  <th class="hide-for-phones">24HR low</th>
                  <th class="hide-for-phones">Volume</th>
                </tr>
              </thead>
              <tbody id="dashboard-auto-insert">
                <?php
                $i = 0;
                foreach ($currencies as $currency): ?>
                <tr>
                  <td class="td-fix-md" scope="row">
                    <a class="hvr-forward" href="dashboard-currency-info.php?id=<?php echo $currency['id'] ?>">
                      <?php echo $currency['name']; ?>
                    </a>
                  </td>
                  <td class="td-fix-md"><?php
                  $change = ($currency['lastPrice'] - $currency['priceBefore']) / $currency['lastPrice'] * 100;
                  printf("%.2f %%", $change);
                  ?></td><!-- CHANGE -->
                  <td class="td-fix-md">$<?php echo $currency['lastPrice']; ?></td><!-- LAST PRICE -->
                  <td class="td-fix-md hide-for-phones">$<?php echo $currency['high']; ?></td><!-- HIGH -->
                  <td class="td-fix-md hide-for-phones">$<?php echo $currency['low']; ?></td><!-- LOW -->
                  <td class="td-fix-md hide-for-phones"><?php echo $currency['volume']; ?></td><!-- VOLUME -->
                </tr>
                <?php
                $i++;
                endforeach;
                ?>
              </tbody>
            </table>


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
