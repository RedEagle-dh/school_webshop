<!-- Dropdown Menü -->
<form class="d-flex" id="onetwo">



    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="usericon.png" alt="...">
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow animated--grow-in" aria-labelledby="navbarDropdown">

                    <li><a href="index.php/settings" class="dropdown-item">
                            Settings
                        </a></li>
                    <li><a href="#" class="dropdown-item">
                            Report a problem
                        </a></li>


                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="index.php/signout">Sign out</a></li>

                    <!-- Nur wenn man Admin ist, abfrage mit PHP -->
                    <?php if('ADMIN' == getCurrentUserStatus(getCurrentUserId())) {
                        echo '<li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="index.php/admin">Adminpanel</a></li>';
                    }
                    
                    ?>
                    
                    <!-- Bis hierhin die Admin Abfrage -->

                </ul>
            </li>
</form>
<!-- Dropdown Menü Ende -->