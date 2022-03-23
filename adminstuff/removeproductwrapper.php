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

                            <?php include 'adminstuff\cardheaders.php'; ?>


                            <!-- Content Row -->
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="row">

                                    <!-- Area Chart -->
                                    <div class="col-xl-8 col-lg-7">
                                        <div class="card shadow mb-4 darkcard row-border-light">
                                            <!-- Card Header - Dropdown -->
                                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between  darkcard row-border-light">
                                                <h6 class="m-0 font-weight-bold text-success">Produktliste</h6>


                                                <input class="form-control me-2 searchbar goingdark col-xl-8 align-items-right justify-content-right" type="text" placeholder="Name/ArtNr" aria-label="Search" id="myInput" onkeydown="searchTable()" onkeyup='searchTable()'>


                                                <div class="dropdown no-arrow">
                                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-bs-haspopup="true" aria-bs-expanded="false">
                                                        <i class="fi fi-rr-trash text-gray-400"></i>
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
                                                                                <td for="flexCheckDefault">
                                                                                    <div class="form-check d-flex justify-content-center">
                                                                                        <input onchange="hakenAusgewaehlt(<?= $row[0] ?>);" name="<?= $row[0] ?>" class="form-check-input" type="checkbox" value="" id="<?= $row[0] ?>">
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
                                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                            <div class="card-body">




                                                <div class="col-md-12 mb-4 pb-2 mb-md-0 pb-md-0">
                                                    <p id="anzahlhaken">0 Artikel ausgewählt</p>
                                                    <button class="btn btn-danger disabled" id="buttonremoveproduct" onclick="removeProductsOnButtonClick(document.getElementById('anzahlhaken').textContent); return false">Entfernen</button>
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


                const haken = document.getElementsByClassName("form-check-input");

                function removeProductsOnButtonClick(message) {

                    if (message.trim() === "0 Artikel ausgewählt".trim()) {
                        alert("Bitte mindestens ein Produkt auswählen!");
                    } else {
                        
                        var ids = [];
                        var pids = [];
                        var k = 0;
                        for (let i = 0; i < haken.length; i++) {
                            if (haken[i].checked) {

                                ids.push(i + 1);
                                pids.push(haken[i].id);

                            }
                        }
                        var ajax = new XMLHttpRequest();
                        ajax.open("GET", "templates/ajax.php?removeid=" + ids + "&pid=" + pids, true);
                        ajax.send();
                        ajax.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                alert(this.response);
                                var ind = this.response;
                                var indsp = ind.split(',');


                                var k = 1;


                                for (let b = 0; b < indsp.length; b++) {
                                    if (b > 0) {
                                        document.getElementById("producttable").deleteRow(indsp[b] - k);
                                        k++;
                                    } else if (b == 0) {
                                        document.getElementById("producttable").deleteRow(indsp[b]);
                                    }
                                }

                            }

                        }

                    }

                }





                function hakenAusgewaehlt(message) {

                    var k = 0;
                    for (let i = 0; i < haken.length; i++) {

                        if (haken[i].checked) {
                            k++;
                        }
                    }
                    var ajax = new XMLHttpRequest();

                    ajax.open("GET", "templates/ajax.php?check=" + k, true);
                    ajax.send();

                    ajax.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("anzahlhaken").textContent = this.response + " Artikel ausgewählt";
                            if (this.response == 0) {
                                document.getElementById("buttonremoveproduct").classList.add("disabled");
                            } else {
                                document.getElementById("buttonremoveproduct").classList.remove("disabled");
                            }
                        }
                    }
                }
            </script>
            <!-- End of Page Wrapper -->