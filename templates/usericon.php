<!-- Dropdown Menü -->
<form class="d-flex" id="onetwo">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= getCurrentUserName() ?></span>
                    <img class="img-profile rounded-circle" src="img/undraw_profile.svg" style="height: 30px;">
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow animated--grow-in" aria-labelledby="navbarDropdown">

                    <li><a href="index.php/settings" class="dropdown-item">
                    <i class="fi fi-rr-settings mr-2 text-gray-400"></i>
                            Settings</a>
                        <a href="#" class="dropdown-item">
                        <i class="fi fi-rr-flag mr-2 text-gray-400"></i>
                            Report a problem</a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item" href="index.php/signout">
                            <i class="fi fi-rr-sign-out-alt mr-2 text-gray-400"></i>
                            Sign out</a>
                    </li>



                    <!-- Nur wenn man Admin ist, abfrage mit PHP -->
                    <?php if ('ADMIN' == getCurrentUserStatus(getCurrentUserId())) {
                        echo '
                        <hr class="dropdown-divider">
                    
                    <a class="dropdown-item" href="index.php/admin"><i class="fi fi-rr-lock mr-2 text-gray-400"></i> Adminpanel</a>';
                    }

                    ?>

                    <!-- Bis hierhin die Admin Abfrage -->
            </li>
        </ul>
        </li>
</form>
<!-- Dropdown Menü Ende -->