<?php require_once("user-info.php"); ?>
<!-- user control row  -->
<div class="row">
  <div class="col-md-12 col-12 dashboard-user-control">

    <div class="dashboard-notification pr-3">
      <a href="#" id="user-notifications">
        <i class="material-icons mdl-badge mdl-badge--overlap" data-badge="0">more</i>
      </a>

      <div class="mdl-list__item mdl-menu mdl-menu--bottom-right mdl-js-menu demo-list-three p-2" for="user-notifications">
        <span class="mdl-list__item-primary-content">
          <i class="material-icons mdl-list__item-avatar">star</i>
          <span>No new updates</span>
        </span>
        <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
      </div>

    </div>

    <div class="dashboard-profile-pic pr-3">
      <img class="rounded-circle" src="./images/profile-svg/<?php echo $profile_pic; ?>" alt="Icon made by FLATICON">
    </div>

    <div class="dashboard-username">

        <span><?php echo $username; ?></span>

        <button id="user-menu-lower" class="mdl-button mdl-js-button mdl-button--icon">
          <i class="material-icons">arrow_drop_down</i>
        </button>

        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="user-menu-lower">
          <li class="mdl-menu__item">Action 1</li>
          <li class="mdl-menu__item">Action 2</li>
          <a href="logout.php"><li class="mdl-menu__item">Logout</li></a>
        </ul>

    </div>

  </div>
</div>
<!-- user control row END  -->
