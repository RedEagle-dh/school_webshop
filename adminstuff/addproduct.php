<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <title>Dave's Webshop | Admin</title>
    <base href="/Webshop/">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/dashboard.css">


    <link rel="stylesheet" href="assets/css/sb-admin-2.min.css">
    <link rel="stylesheet" href="assets/css/sb-admin-2.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/all.css">

    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


</head>

<body data-menu="vertical-menu" class="vertical-layout vertical-menu content-right-sidebar menu-expanded">


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
                            <a class="collapse-item active goingdark" href="index.php/addproduct">Hinzufügen</a>
                            <a class="collapse-item goingdark" href="index.php/removeproduct">Entfernen</a>
                            <a class="collapse-item goingdark" href="index.php/bearbeiten">Bearbeiten</a>
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
                            <a class="collapse-item goingdark" href="index.php/addcategory">Hinzufügen</a>
                            <a class="collapse-item goingdark" href="index.php/removecategory">Entfernen</a>
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
               <li class="nav-item disabled">
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fi fi-rr-stats goingdark"></i>
                        <span class=" goingdark">Charts (Bald Verfügbar)</span>
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
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                        <i class="fi fi-rr-grid-alt goingdark"></i>
                        <span class=" goingdark">Tables (Bald Verfügbar)</span></a>
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
                                    <h1 class="h3 mb-0 text-gray-800 goingdark">Produkt Hinzufügen</h1>

                                </div>

                                <?php include 'adminstuff\cardheaders.php'; ?>

                                <!-- Content Row -->
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="row">

                                        <!-- Area Chart -->
                                        <div class="col-xl-8 col-lg-7">
                                            <div class="card shadow mb-4 darkcard row-border-light">
                                                <!-- Card Header - Dropdown -->
                                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between  darkcard row-border-light">
                                                    <h6 class="m-0 font-weight-bold text-success">Produkt hinzufügen</h6>
                                                    <div class="dropdown no-arrow">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-bs-haspopup="true" aria-bs-expanded="false">
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
                                                                            <select class="form-select goingdark searchbar" aria-label="Kategorie" name="kategorie" id="katselector" onchange="watchKatSelector(); sendReq(this.value); return false;">
                                                                                <option disabled selected>Kategorie</option>
                                                                                <?php foreach (getCatIdAndName() as $catitandname) : ?>
                                                                                    <option value="<?= $catitandname[0] ?>"><?= $catitandname[1] ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>

                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 mb-4 pb-2">
                                                                                <div class="form-outline">
                                                                                    <label class="form-label goingdark" for="form3Examplev2">
                                                                                        <nobr>Produktname*</nobr>
                                                                                    </label>
                                                                                    <input type="text" id="form3Examplev2" class="form-control form-control-lg searchbar goingdark" name="produktname" />

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 mb-4 pb-2">
                                                                                <div class="form-outline">
                                                                                    <label class="form-label goingdark" for="form3Examplev3">
                                                                                        <nobr>Produktbeschreibung</nobr>
                                                                                    </label>
                                                                                    <textarea type="text" class="form-control form-control-lg searchbar goingdark" id="form3Examplev3" rows="3" name="beschreibung"></textarea>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-2 mb-4 pb-2 mb-md-0 pb-md-0">
                                                                                <div class="form-outline">
                                                                                    <label class="form-label goingdark" for="form3Examplev5">
                                                                                        <nobr>Preis*</nobr>
                                                                                    </label>
                                                                                    <input type="text" id="form3Examplev5" class="form-control form-control-lg searchbar goingdark" name="preis" />

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2 mb-4 pb-2 mb-md-0 pb-md-0">
                                                                                <div class="form-outline">
                                                                                    <label class="form-label goingdark" for="form3Examplev5">
                                                                                        <nobr>Anzahl</nobr>
                                                                                    </label>
                                                                                    <input type="text" id="form3Examplev5" class="form-control form-control-lg searchbar goingdark" name="anzahl" />

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2 mb-4 pb-2 mb-md-0 pb-md-0">
                                                                                <div class="form-outline">
                                                                                    <label class="form-label goingdark" for="form3Examplev5">
                                                                                        <nobr>Versandkosten</nobr>
                                                                                    </label>
                                                                                    <input type="text" id="form3Examplev5" class="form-control form-control-lg searchbar goingdark" name="lieferkosten" />

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div id="techdetails">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

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
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                                        <input type="submit" name="submit" id="uploadbtn" class="btn btn-success disabled" value="Hochladen">

                                                        <?php
                                                        if (!empty($statusMsg)) { ?>
                                                            <p><?php echo "<br>" . $statusMsg; ?></p>


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

                <script>
                    function watchKatSelector() {
                        document.getElementById("uploadbtn").classList.remove("disabled");
                    }

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


                    function sendReq(kat) {
                        var ajax = new XMLHttpRequest();

                        ajax.open("GET", "templates/ajax.php?kategorie=" + kat, true);
                        ajax.send();

                        ajax.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("techdetails").innerHTML = this.response;
                            }
                        }
                    }
                </script>
                <!-- End of Page Wrapper -->







                <script src="assets/js/bootstrap.bundle.min.js"></script>
                <!-- Bootstrap core JavaScript-->
                <script src="assets/js/jquery.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="assets/js/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="assets/js/sb-admin-2.min.js"></script>

                <!-- Page level plugins -->
                <script src="assets/js/Chart.min.js"></script>

                <!-- Page level custom scripts -->
                <script src="assets/js/chart-area-demo.js"></script>
                <script src="assets/js/chart-pie-demo.js"></script>
    </body>

</html>