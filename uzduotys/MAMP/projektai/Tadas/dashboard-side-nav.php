<?php
//Tikrinam kokiam puslapyje yra vartotojas. Pagal tai nustatom
//navigacijai klase 'dashboard-item-active' - suaktyvina navigacijos punkta
$currentPage = basename($_SERVER['PHP_SELF']);

$activeHome = "";
$activeMarket = "";
if ($currentPage == "dashboard-home.php"):
  $activeHome = "dashboard-item-active";
elseif ($currentPage == "dashboard-market.php" || $currentPage == "dashboard-currency-info.php"):
  $activeMarket = "dashboard-item-active";
endif;?>

<!-- HEADER  -->
<header class="col-lg-2 col-md-2 col-1 fixed-top dashboard-nav p-0 bg-dashboard-nav">
  <!-- logo  -->
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 dashboard-nav-logo">
      <img src="./images/logo2-white.png" alt="Logo">
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12 dashboard-nav-items">
      <a href="dashboard-home.php">
        <div class="dashboard-item <?php echo $activeHome ?>">
          <i class="fa fa-home" aria-hidden="true"></i><span>Home</span>
        </div>
      </a>
      <a href="dashboard-market.php">
        <div class="dashboard-item <?php echo $activeMarket ?>">
          <i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Market</span>
        </div>
      </a>
      <a href="#">
        <div class="dashboard-item">
          <i class="fa fa-cog" aria-hidden="true"></i><span>Settings</span>
        </div>
      </a>
      <a href="#">
        <div class="dashboard-item">
          <i class="fa fa-cog" aria-hidden="true"></i><span>Guides</span>
        </div>
      </a>
      <a href="#">
        <div class="dashboard-item">
          <i class="fa fa-cog" aria-hidden="true"></i><span>Support</span>
        </div>
      </a>

    </div>
  </div>
</header>
<!-- header END  -->
