<?php
require_once("user-info.php");
require_once("market-bot.php");
require_once("user-buy-sell-currency.php");

if(!isset($_SESSION['login_user'])):
  header("location: login.php");
endif;

// require_once("market-bot.php");
$id = $_GET['id'];//user ID

$currency = GetCurrencyByID($connection, $id);
$currHistory = GetCurrencyHistory($connection, $id);

//kintamieji skirti JS focusout/focusin funkcijai
?><script>
var last_price = <?php echo $currency['lastPrice'];?> ;
var taxes = <?php echo $CryptoTaxes;?>;
</script>
<?php
$change = ($currency['lastPrice'] - $currency['priceBefore']) / $currency['lastPrice'] * 100;

for ($i=0; $i < 24; $i++) {
  if($i < 10):
    $x = "hour0" . $i;
    $graphTime[$i] = "0" . $i . ":00";
  else:
    $x = "hour" . $i;
    $graphTime[$i] = $i . ":00";
  endif;

  $graphValues[$i] = $currHistory[$x];
}

?>


<!DOCTYPE html>
<html>

<?php require_once("head.php"); ?>

<body>
  <div class="container-fluid">
    <div class="row dashboard-content-align-end">

      <!-- Dashboard nav bar  -->
      <?php require_once("dashboard-side-nav.php"); ?>

      <content class="col-lg-10 col-md-10 col-sm-10 col-11 bg-dashboard pr-5 pl-5">

        <!-- Dashboard user controls  -->
        <?php require_once("dashboard-user-control.php"); ?>

        <!-- Curency info 3 columns  -->
        <div class="row pt-3 pb-3 dashboard-currency-info">
          <div class="col-lg-3 col-md-4 pt-2 bg-dashboard-user-wallet">
            <div class="row p-2">
              <div class="col-md-12">
                <span class="h4"><?php echo $currency['name']; ?></span>
              </div>
            </div>
            <div class="row p-2">
              <div class="col-md-12 dashboard-currency-info-prices">
                <span class="h6">Last price:</span>
                <span>$<?php echo $currency['lastPrice']; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 pt-2 bg-dashboard-user-wallet">
            <div class="row p-2">
              <div class="col-md-12 dashboard-currency-info-prices">
                <span class="h6">24h low:</span>
                <span>$<?php echo $currency['low']; ?></span>
              </div>
            </div>
            <div class="row p-2">
              <div class="col-md-12 dashboard-currency-info-prices">
                <span class="h6">24h high:</span>
                <span>$<?php echo $currency['high']; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 pt-2 bg-dashboard-user-wallet">
            <div class="row p-2">
              <div class="col-md-12 dashboard-currency-info-prices">
                <span class="h6">24h change:</span>
                <span><?php printf("%.2f", $change); ?>%</span>
              </div>
            </div>
            <div class="row p-2">
              <div class="col-md-12 dashboard-currency-info-prices">
                <span class="h6">Volume:</span>
                <span><?php echo $currency['volume']; ?></span>
              </div>
            </div>
          </div>

        </div>
        <!-- Curency info row END  -->

        <script>
          var graphData = [ <?php foreach ($graphValues as $graphValue):?> <?php echo $graphValue; ?>, <?php endforeach; ?> ];
          var graphTime = [ <?php foreach ($graphTime as $oneTime):?> <?php echo "'" . $oneTime ."'"; ?>, <?php endforeach; ?> ];
        </script>

        <!-- Currency info chart  -->
        <div class="row bg-dashboard-user-wallet">
          <div class="col-lg-12 col-md-12">
            <canvas id="currency-graph" width="" height="100vh"></canvas>
          </div>
        </div>
        <!-- Currency info chart END  -->

        <!-- Currency buy and sell blocks  -->
        <div class="row pt-3 dashboard-currency-info-buy-sell">
          <!-- BUY block  -->
          <div class="col-lg-5 col-md-6 bg-dashboard-user-wallet">
            <div class="row pt-2">
              <div class="col-md-12 dashboard-currency-info-buy-title">
                <span class="h5">Buy</span>
                <span class="h6">Balance available: $<?php echo GetUserWalletInfo($connection, $idx); ?></span>
              </div>
            </div>

            <form class="form-group" method="post">

              <input type="hidden" name="hidden-curr-id" value="<?php echo $id; ?>" />

              <div class="row pt-2">
                <label for="units" class="col-2 col-form-label">Units:</label>
                <div class="col-10">
                  <input class="form-control" type="number" step=0.01 min=0.01 onfocusout="UnitsFocusOut()" id="units" name="curr-units" placeholder="0.00">
                </div>
              </div>

              <div class="row pt-2">
                <label for="price" class="col-2 col-form-label">Price:</label>
                <div class="col-10">
                  <input class="form-control" type="number" step=0.01 min=0.01 onfocusout="PriceFocusOut()" id="price" name="curr-price" placeholder="$0.00">
                </div>
              </div>

              <div class="row pt-2">
                <label for="tax" class="col-2 col-form-label">Taxes:</label>
                <div class="col-10">
                  <input class="form-control" type="number" step=0.01 min=0.01 id="tax" name="curr-taxes" placeholder="$0.00" disabled>
                </div>
              </div>

              <div class="row pt-2">
                <div class="col-10 text-error text-center mx-auto">
                  <?php echo $buyError; ?>
                </div>
              </div>

              <div class="row pt-2 dashboard-currency-info-buy-btn">
                <button class="btn btn-success" type="submit" name="curr-buy-submit">Buy</button>
              </div>
            </form>
          </div>
          <!-- BUY block END  -->

          <!-- SELL  -->
          <div class="col-lg-5 col-md-6 bg-dashboard-user-wallet">
            <div class="row pt-2">
              <div class="col-md-12 dashboard-currency-info-buy-title">
                <span class="h5">Sell</span>
                <span class="h6">Available: <?php echo GetUserCryptoCurrency($connection, $idx, $currency['id']);; ?></span>
              </div>
            </div>

            <form class="form-group" method="post">
              <div class="row pt-2">
                <label for="units-sell" class="col-2 col-form-label">Units:</label>
                <div class="col-10">
                  <input class="form-control" type="number" step=0.01 min=0.01 id="units-sell" name="curr-units-sell" onfocusout="UnitsSellFocusOut()" placeholder="0.00">
                </div>
              </div>

              <input type="hidden" name="hidden-curr-id" value="<?php echo $id; ?>" />

              <div class="row pt-2">
                <label for="price-sell" class="col-2 col-form-label">Price:</label>
                <div class="col-10">
                  <input class="form-control" type="number" step=0.01 min=0.01 id="price-sell" name="curr-price-sell" placeholder="$0.00" disabled>
                </div>
              </div>

              <div class="row pt-2">
                <label for="tax-sell" class="col-2 col-form-label">Taxes:</label>
                <div class="col-10">
                  <input class="form-control" type="number" step=0.01 min=0.01 id="tax-sell" name="curr-tax-sell" placeholder="$0.00" disabled>
                </div>
              </div>

              <div class="row pt-2">
                <div class="col-10 text-error text-center mx-auto">
                  <?php echo $sellError; ?>
                </div>
              </div>

              <div class="row pt-2 dashboard-currency-info-buy-btn">
                <button class="btn btn-danger" type="submit" name="curr-sell-submit">Sell</button>
              </div>
            </form>
          </div>
          <!-- SELL block END  -->

        </div>
        <!-- Currency buy and sell blocks row END  -->

        <!-- Currency random events  -->
        <!-- Reikia tvarkyti sita skilti  -->
        <div class="row pt-3 mb-3 dashboard-currency-info-events">
          <div class="col-md-12 pt-3 bg-dashboard-user-wallet">
            <span class="h3">Events related to this currency</span>
            <hr class="hr-color-white"/>

            <div class="row dashboard-user-activity-item">
              <div class="col-md-1 dashboard-user-activity-item-icon">
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </div>
              <div class="col-md-11 dashboard-user-activity-item-text">
                <span class="h6">7 new shops added this currency to payment methods</span>
                <span class="h6 op-6">49 minutes ago</span>
              </div>
            </div>

            <hr class="hr-color-white" />
            <div class="row dashboard-user-activity-item">
              <div class="col-md-1 dashboard-user-activity-item-icon">
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </div>
              <div class="col-md-11 dashboard-user-activity-item-text">
                <span class="h6">Crypto-hoot market started to trade this currency</span>
                <span class="h6 op-6">7 day ago</span>
              </div>
            </div>

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
