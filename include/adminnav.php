<nav id="mainNav" class="navbar fixed-top navbar-default navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" >DONATE_PLASMA</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

    </ul>

    <ul class="navbar-nav form-inline my-2 my-lg-0">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

          <!-- Donor Name -->

          <?php  if(isset($_SESSION['name'])) echo $_SESSION['name'];  ?>

        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="user/logout.php">
          <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Logout</a>
          </div>
      </li>

    </ul>
  </div>
</nav>
