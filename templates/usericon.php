<!-- Dropdown Menü -->
<form class="d-flex" id="onetwo">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small goingdark"><?= getCurrentUserName() ?></span>
                    <i class="fi fi-rr-user goingdark"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow animated--grow-in darkcard" aria-labelledby="navbarDropdown">

                    <li>
                        

                        
                        

                        
                        
                        
                        <a href="index.php/settings" class="dropdown-item mr-2 text-gray-600 goingdark">
                            <i class="fi fi-rr-settings mr-2 text-gray-400"></i>
                            Settings</a>
                        <a href="#" class="dropdown-item mr-2 text-gray-600 goingdark">
                            <i class="fi fi-rr-flag mr-2 text-gray-400"></i>
                            Report a problem</a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item mr-2 text-gray-600 goingdark" href="index.php/signout">
                            <i class="fi fi-rr-sign-out-alt mr-2 text-gray-400"></i>
                            Sign out</a>
                    </li>



                    <!-- Nur wenn man Admin ist, abfrage mit PHP -->
                    <?php if ('ADMIN' == getCurrentUserStatus(getCurrentUserId())) {
                        echo '
                        <hr class="dropdown-divider">
                    
                    <a class="dropdown-item mr-2 text-gray-600 goingdark" href="index.php/admin"><i class="fi fi-rr-lock mr-2 text-gray-400"></i> Adminpanel</a>';
                    }

                    ?>

                    <!-- Bis hierhin die Admin Abfrage -->
            </li>
        </ul>
        </li>
        <script>
            var checkbox = document.getElementById("ChangeTheme"); //get the checkbox to a variable

            //check storage if dark mode was on or off
            if (sessionStorage.getItem("mode") == "dark") {
                darkmode(); //if dark mode was on, run this funtion
            } else {
                nodark(); //else run this funtion
            }

            //if the checkbox state is changed, run a funtion
            checkbox.addEventListener("change", function() {
                //check if the checkbox is checked or not
                if (checkbox.checked) {
                    darkmode(); //if the checkbox is checked, run this funtion
                } else {
                    nodark(); //else run this funtion
                }
            });

            //function for checkbox when checkbox is checked
            function darkmode() {
                document.body.classList.add("dark-mode"); //add a class to the body tag
                checkbox.checked = true; //set checkbox to be checked state
                sessionStorage.setItem("mode", "dark"); //store a name & value to know that dark mode is on
            }

            //function for checkbox when checkbox is not checked
            function nodark() {
                document.body.classList.remove("dark-mode"); //remove added class from body tag
                checkbox.checked = false; //set checkbox to be unchecked state
                sessionStorage.setItem("mode", "light"); //store a name & value to know that dark mode is off or light mode is on
            }
        </script>
</form>
<!-- Dropdown Menü Ende -->