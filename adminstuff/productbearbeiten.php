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
                            <a class="collapse-item goingdark" href="index.php/addproduct">Hinzufügen</a>
                            <a class="collapse-item goingdark" href="index.php/removeproduct">Entfernen</a>
                            <a class="collapse-item active goingdark" href="index.php/bearbeiten">Bearbeiten</a>
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
                                    <h1 class="h3 mb-0 text-gray-800 goingdark">Produkt Bearbeiten</h1>

                                </div>

                                <?php include 'adminstuff\cardheaders.php'; ?>


                                <!-- Content Row -->
                                <form action="index.php/editproduct" method="POST" enctype="multipart/form-data">
                                    <div class="row">

                                        <!-- Area Chart -->
                                        <div class="col-xl-8 col-lg-7">
                                            <div class="card shadow mb-4 darkcard row-border-light">
                                                <!-- Card Header - Dropdown -->
                                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between  darkcard row-border-light">
                                                    <h6 class="m-0 font-weight-bold text-success">Produktliste</h6>


                                                    <input class="form-control me-2 searchbar goingdark col-xl-8 align-items-right justify-content-right" type="text" placeholder="Name/ArtNr" aria-label="Search" id="myInput" onkeydown="searchTable()" onkeyup='searchTable()'>


                                                    <div class="dropdown no-arrow">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-bs-haspopup="true" aria-bs-expanded="false">
                                                            <i class="fi fi-rr-edit text-gray-400"></i>
                                                            
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

                                                                    <table class="table table-bordered" id="producttable">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">ArtNr</th>
                                                                                <th scope="col">Produktname</th>
                                                                                <th scope="col">Hinzugefügt Am</th>
                                                                                <th scope="col">Im Lager</th>
                                                                                <th scope="col">Preis (€)</th>
                                                                                <th scope="col">Rabatt (%)</th>
                                                                                <th scope="col">Versandkosten</th>
                                                                                <th scope="col">Auswählen</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                            foreach (getAllProducts() as $row) : ?>
                                                                                <tr class="<?php
                                                                                            if ($row[5] == 0) {
                                                                                                echo "table-danger";
                                                                                            } else if ($row[5] > 0 && $row[5] < 10) {
                                                                                                echo "table-warning";
                                                                                            } else {
                                                                                                echo "table-success";
                                                                                            }


                                                                                            ?>">
                                                                                    <th scope="row"><?= $row[0] ?></th>
                                                                                    <td><?= $row[1] ?></td>
                                                                                    <td><?= $row[6] ?></td>
                                                                                    <td><?= $row[5] ?></td>
                                                                                    <td><?= $row[3] ?>€</td>
                                                                                    <td><?= $row[8] ?>%</td>
                                                                                    <td><?= $row[7] ?>€</td>
                                                                                    
                                                                                    <td for="flexButtonDefault">
                                                                                        <div class="form-button d-flex justify-content-center">
                                                                                            <button type="button" class="btn btn-warning" onclick="selectProduct(<?= $row[0] ?>);"><i class="fi fi-rr-pencil"></i> Edit</button>
                                                                                            
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php endforeach; ?>
                                                                        </tbody>
                                                                    </table>
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
                                                    <h6 class="m-0 font-weight-bold text-primary">Produktauswahl</h6>
                                                    <div class="dropdown no-arrow">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fi fi-rr-filter text-gray-400"></i>
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
                                                <div class="card-body" id="cardbodyforedit" style="display: none;">




                                                    <div class="col-md-12 mb-4 pb-2 mb-md-0 pb-md-0">
                                                        <div class="row">
                                                        <p id="produktid" name="prodid"><div>Moin</div></p>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-8 mb-8 pb-8">
                                                                <div class="form-outline">
                                                                    <label class="form-label goingdark" for="produktnameform">
                                                                        <nobr>Produktname*</nobr>
                                                                    </label>
                                                                    <input maxlength="30" type="text" id="produktnameform" class="form-control form-control-lg searchbar goingdark" name="name" />

                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mb-4 pb-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label goingdark" for="produktpreisform">
                                                                        <nobr>Preis (€)</nobr>
                                                                    </label>
                                                                    <input type="text" id="produktpreisform" placeholder="" class="form-control form-control-lg searchbar goingdark" name="preis" />

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-8 mb-8 pb-8">
                                                                <div class="form-outline">
                                                                    <label class="form-label goingdark" for="produktbeschreibungform">
                                                                        <nobr>Beschreibung</nobr>
                                                                    </label>
                                                                    <textarea rows="2" type="text" id="produktbeschreibungform" class="form-control form-control-lg searchbar goingdark" name="beschreibung"></textarea>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mb-4 pb-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label goingdark" for="produktauflagerform">
                                                                        <nobr>Auf Lager</nobr>
                                                                    </label>
                                                                    <input type="text" id="produktauflagerform" placeholder="" class="form-control form-control-lg searchbar goingdark" name="auflager" />

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4 mb-4 pb-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label goingdark" for="produktrabattform">
                                                                        <nobr>Rabatt (%)</nobr>
                                                                    </label>
                                                                    <input rows="3" type="text" id="produktrabattform" class="form-control form-control-lg searchbar goingdark" name="rabatt"/>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mb-4 pb-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label goingdark" for="produktlieferkostenform">
                                                                        <nobr>Lieferkosten</nobr>
                                                                    </label>
                                                                    <input type="text" id="produktlieferkostenform" placeholder="" class="form-control form-control-lg searchbar goingdark" name="versand" />

                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mb-4 pb-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label goingdark" for="produktidform">
                                                                        <nobr>Artikel Nummer</nobr>
                                                                    </label>
                                                                    <input style="font-size: 18px;" type="text" value="" id="produktidform" placeholder="" class="form-control form-control-lg searchbar goingdark" readonly name="prodid" />

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-success" id="buttonremoveproduct" type="submit">Speichern</button>
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
                    

                    function selectProduct(productid) {
                        var ajax = new XMLHttpRequest();
                        ajax.open("GET", "templates/ajax.php?productidforedit=" + productid, true);
                        ajax.send();

                        ajax.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                var str = String(this.response);
                                var splittedstr = str.split('&');

                                document.getElementById("cardbodyforedit").style.display = "block";
                                document.getElementById("produktid").textContent = "Artikel " + productid + " wird bearbeitet";
                                document.getElementById("produktnameform").setAttribute("value", splittedstr[1]);
                                document.getElementById("produktbeschreibungform").textContent = splittedstr[2];
                                document.getElementById("produktpreisform").setAttribute("value", splittedstr[3]);
                                document.getElementById("produktauflagerform").setAttribute("value", splittedstr[4]);
                                document.getElementById("produktlieferkostenform").setAttribute("value", splittedstr[5]);
                                document.getElementById("produktrabattform").setAttribute("value", splittedstr[6]);
                                document.getElementById("produktidform").setAttribute("value", productid);
                            } 
                        }
                    }




                    function searchTable() {
                        var input, filter, found, table, tr, td, i, j;
                        input = document.getElementById("myInput");
                        filter = input.value.toUpperCase();
                        table = document.getElementById("producttable");
                        tr = table.getElementsByTagName("tr");
                        for (i = 1; i < tr.length; i++) {
                            td = tr[i].getElementsByTagName("td");
                            for (j = 0; j < td.length; j++) {
                                if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                                    found = true;
                                }
                            }
                            if (found) {
                                tr[i].style.display = "";
                                found = false;
                            } else {
                                tr[i].style.display = "none";

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
                <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

    </body>

</html>