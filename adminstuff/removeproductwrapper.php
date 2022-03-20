<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav darkcard sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">

                <div class="sidebar-brand-text mx-3 goingdark">Dave's Webshop</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php/admin">
                    <i class="fi fi-rr-dashboard goingdark"></i>
                    <span class="goingdark">Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading goingdark">
                Produkte
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fi fi-rr-box goingdark"></i>
                    <span class="goingdark">Produkte</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded searchbar">
                        <h6 class="collapse-header goingdark">Produkte bearbeiten</h6>
                        <a class="collapse-item goingdark" href="index.php/addproduct">Hinzufügen</a>
                        <a class="collapse-item active goingdark" href="index.php/removeproduct">Entfernen</a>
                    </div>
                </div>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading goingdark">
                Kategorien
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwoo" aria-expanded="true" aria-controls="collapseTwoo">
                    <i class="fi fi-rr-box goingdark"></i>
                    <span class="goingdark">Kategorien</span>
                </a>
                <div id="collapseTwoo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded searchbar">
                        <h6 class="collapse-header goingdark">Kategorien bearbeiten</h6>
                        <a class="collapse-item goingdark" href="buttons.html">Hinzufügen</a>
                        <a class="collapse-item goingdark" href="cards.html">Entfernen</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading goingdark">
                Data
            </div>



            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fi fi-rr-stats goingdark"></i>
                    <span class="goingdark">Charts</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded searchbar">
                        <h6 class="collapse-header goingdark">Data</h6>
                        <a class="collapse-item goingdark" href="login.html">Customers</a>
                        <a class="collapse-item goingdark" href="register.html">Brands</a>
                        <a class="collapse-item goingdark" href="forgot-password.html">Products</a>
                        <a class="collapse-item goingdark" href="forgot-password.html">Sells</a>
                    </div>
                </div>
            </li>





            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fi fi-rr-grid-alt goingdark"></i>
                    <span class="goingdark">Tables</span></a>
                </a>

                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">

                    <div class="bg-white py-2 collapse-inner rounded searchbar">
                        <h6 class="collapse-header goingdark">Data</h6>
                        <a class="collapse-item goingdark" href="login.html">Customers</a>
                        <a class="collapse-item goingdark" href="register.html">Brands</a>
                        <a class="collapse-item goingdark" href="forgot-password.html">Products</a>
                        <a class="collapse-item goingdark" href="forgot-password.html">Sells</a>

                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">


        </ul>


        <!-- End of Sidebar -->




        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column adminback">

            <!-- Main Content -->
            <div id="content">

                <?php include 'templates\navbaradminpanel.php'; ?>

                <!-- Begin Page Content -->
                <div class="tab-content">
                    <div class="fade active show">
                        <div class="container-fluid">

                            <!-- Page Heading -->
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-800 goingdark">Produkt Entfernen</h1>

                            </div>

                            <!-- Content Row -->
                            <div class="row">

                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2 darkcard row-border-light">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Earnings (Monthly)</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 goingdark"><?= getMonthlyEarnings(getActualMonth()) ?>€</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fi fi-br-euro fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2 darkcard row-border-light">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                        Earnings (All Time)</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 goingdark"><?= getAlltimeEarnings() ?>€</div>
                                                </div>
                                                <div class="col-auto">

                                                    <i class="fi fi-br-bank fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-info shadow h-100 py-2 darkcard row-border-light">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Kunden
                                                    </div>
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col-auto">
                                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800 goingdark"><?= getUserCount() ?></div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fi fi-sr-user fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pending Requests Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-warning shadow h-100 py-2 darkcard row-border-light">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                        Anzahl Produkte im Sortiment</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 goingdark"><?= getProductCount() - getProductCountSoldOut() ?> (<?= getProductCount() ?> insg.)</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fi fi-sr-shopping-cart-add fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Content Row -->
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="row">

                                    <!-- Area Chart -->
                                    <div class="col-xl-8 col-lg-7">
                                        <div class="card shadow mb-4 darkcard row-border-light">
                                            <!-- Card Header - Dropdown -->
                                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between  darkcard row-border-light">
                                                <h6 class="m-0 font-weight-bold text-success">Produkt Entfernen</h6>
                                                <div class="dropdown no-arrow">
                                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-bs-haspopup="true" aria-bs-expanded="false">
                                                        <i class="fi fi-rr-add text-gray-400"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                        <div class="dropdown-header">Dropdown Header:</div>
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="row d-flex justify-content-center align-items-center">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-lg-12 darkcard">
                                                                <div class="p-5">
                                                                    <div class="mb-4 pb-2">
                                                                        <select class="form-select goingdark searchbar" aria-label="Kategorie" name="kategorie">
                                                                            <option selected>Kategorie</option>
                                                                            <option value="1">Mainboard</option>
                                                                            <option value="2">CPU</option>
                                                                            <option value="4">GPU</option>
                                                                            <option value="5">Gehäuse</option>
                                                                            <option value="3">Laptops</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 mb-4 pb-2">
                                                                            <div class="form-outline">
                                                                                <input type="text" id="form3Examplev2" class="form-control form-control-lg searchbar goingdark" name="produktname" />
                                                                                <label class="form-label goingdark" for="form3Examplev2">
                                                                                    <nobr>Produktname</nobr>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 mb-4 pb-2">
                                                                            <div class="form-outline">
                                                                                <textarea type="text" class="form-control form-control-lg searchbar goingdark" id="form3Examplev3" rows="3" name="beschreibung"></textarea>
                                                                                <label class="form-label goingdark" for="form3Examplev3">
                                                                                    <nobr>Produktbeschreibung</nobr>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-2 mb-4 pb-2 mb-md-0 pb-md-0">
                                                                            <div class="form-outline">
                                                                                <input type="text" id="form3Examplev5" class="form-control form-control-lg searchbar goingdark" name="preis" />
                                                                                <label class="form-label goingdark" for="form3Examplev5">
                                                                                    <nobr>Preis</nobr>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2 mb-4 pb-2 mb-md-0 pb-md-0">
                                                                            <div class="form-outline">
                                                                                <input type="password" id="form3Examplev5" class="form-control form-control-lg searchbar goingdark" name="anzahl" />
                                                                                <label class="form-label goingdark" for="form3Examplev5">
                                                                                    <nobr>Anzahl</nobr>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2 mb-4 pb-2 mb-md-0 pb-md-0">
                                                                            <div class="form-outline">
                                                                                <input type="password" id="form3Examplev5" class="form-control form-control-lg searchbar goingdark" name="lieferkosten" />
                                                                                <label class="form-label goingdark" for="form3Examplev5">
                                                                                    <nobr>Lieferkosten</nobr>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <script>
                                                    function previewImage() {
                                                        var file = document.getElementById("customFile").files;
                                                        if (file.length > 0) {
                                                            var fileReader = new FileReader();
                                                            fileReader.onload = function(event) {
                                                                document.getElementById("preview").setAttribute("src", event.target.result);
                                                            };
                                                            fileReader.readAsDataURL(file[0]);
                                                        }
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Pie Chart -->
                                    <div class="col-xl-4 col-lg-5">
                                        <div class="card shadow mb-4 darkcard row-border-light">
                                            <!-- Card Header - Dropdown -->
                                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between  darkcard row-border-light">
                                                <h6 class="m-0 font-weight-bold text-primary">Produktbild</h6>
                                                <div class="dropdown no-arrow">
                                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fi fi-rr-portrait text-gray-400"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                        <div class="dropdown-header">Dropdown Header:</div>
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card Body -->
                                            <div class="card-body">




                                                <div class="col-md-12 mb-4 pb-2 mb-md-0 pb-md-0">
                                                    <?php
                                                    include 'uploadimage.php';
                                                    ?>
                                                    <img id="preview">
                                                    <input type="file" class="form-control" name="image" id="customFile" onchange="previewImage();" />
                                                    <br>
                                                    <input type="submit" name="submit" class="btn btn-success" value="Hochladen">

                                                    <?php
                                                    if (!empty($statusMsg)) { ?>
                                                        <p class="status <?php echo $status; ?>"><?php echo "<br>" . $statusMsg; ?></p>


                                                    <?php } ?>

                                                </div>


                                            </div>





                                        </div>

                                    </div>


                                </div>
                            </form>




                            <!-- Footer -->
                            <footer class="sticky-footer bg-white darkcardfooter">
                                <div class="container my-auto">
                                    <div class="copyright text-center my-auto">
                                        <span>Copyright &copy; 2022 Dave's Webshop GmbH</span>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="index.php/impressum">Impressum</a></li>
                                            <li class="list-inline-item"><a href="index.php/tos">AGB</a></li>
                                            <li class="list-inline-item"><a href="#">Support</a></li>
                                        </ul>
                                    </div>

                                </div>


                            </footer>
                            <!-- End of Footer -->

                        </div>
                        <!-- End of Content Wrapper -->
                    </div>
                </div>
            </div>
            <!-- End of Page Wrapper -->