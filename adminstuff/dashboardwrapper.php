<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fi fi-rr-computer"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Dave's Webshop</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fi fi-rr-dashboard"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Products
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fi fi-rr-box"></i>
                    <span>Products</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Manage Products</h6>
                        <a class="collapse-item" href="buttons.html">Add</a>
                        <a class="collapse-item" href="cards.html">Remove</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>



            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fi fi-rr-stats"></i>
                    <span>Charts</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data</h6>
                        <a class="collapse-item" href="login.html">Customers</a>
                        <a class="collapse-item" href="register.html">Brands</a>
                        <a class="collapse-item" href="forgot-password.html">Products</a>
                        <a class="collapse-item" href="forgot-password.html">Sells</a>
                    </div>
                </div>
            </li>





            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fi fi-rr-grid-alt"></i>
                    <span>Tables</span></a>
                </a>

                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">

                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data</h6>
                        <a class="collapse-item" href="login.html">Customers</a>
                        <a class="collapse-item" href="register.html">Brands</a>
                        <a class="collapse-item" href="forgot-password.html">Products</a>
                        <a class="collapse-item" href="forgot-password.html">Sells</a>

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
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800 goingdark">Admin Dashboard</h1>

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
                            <div class="card border-left-info shadow h-100 py-2 darkcard row-border-light" >
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

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4 darkcard row-border-light" >
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between  darkcard row-border-light">
                                    <h6 class="m-0 font-weight-bold text-success">Jahresumsatz Übersicht</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-bs-haspopup="true" aria-bs-expanded="false">
                                            <i class="fi fi-rr-chat-arrow-grow text-gray-400"></i>
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
                                    <script>
                                        var jan = <?= getMonthlyEarnings('jan22') ?>;
                                        var feb = <?= getMonthlyEarnings('feb22') ?>;
                                        var mar = <?= getMonthlyEarnings('mar22') ?>;
                                        var apr = <?= getMonthlyEarnings('apr22') ?>;
                                        var mai = <?= getMonthlyEarnings('mai22') ?>;
                                        var jun = <?= getMonthlyEarnings('jun22') ?>;
                                        var jul = <?= getMonthlyEarnings('jul22') ?>;
                                        var aug = <?= getMonthlyEarnings('aug22') ?>;
                                        var sep = <?= getMonthlyEarnings('sep22') ?>;
                                        var okt = <?= getMonthlyEarnings('okt22') ?>;
                                        var nov = <?= getMonthlyEarnings('nov22') ?>;
                                        var dez = <?= getMonthlyEarnings('dez22') ?>;
                                    </script>
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4 darkcard row-border-light">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between  darkcard row-border-light">
                                    <h6 class="m-0 font-weight-bold text-primary">Produktübersicht</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
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
                                    <script>
                                        var mb = <?= getProductPercentegeOfCat(1) ?>;
                                        var cpu = <?= getProductPercentegeOfCat(2) ?>;
                                        var lapi = <?= getProductPercentegeOfCat(3) ?>;
                                        var gpu = <?= getProductPercentegeOfCat(4) ?>;
                                        var geh = <?= getProductPercentegeOfCat(5) ?>;
                                    </script>
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Direct
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Social
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Referral
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



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
            <!-- End of Page Wrapper -->