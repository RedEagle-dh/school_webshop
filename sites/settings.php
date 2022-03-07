<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <title>Dave's Webshop | Settings</title>
    <base href="/Webshop/">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body data-menu="vertical-menu" class="vertical-layout vertical-menu content-right-sidebar menu-expanded">

    <?php include 'templates/navbar.php'; 
    $data = getUserData(getEmailAdress());?>

    <div class="container light-style flex-grow-1 container-p-y">
        <form action="index.php/updateprofile" method="POST">



            <h4 class="h3 mb-0 text-gray-800 py-3 ">
                Account settings
            </h4>

            <div class="card overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light">
                    <div class="col-md-3 pt-0">
                        <div class="list-group list-group-flush account-settings-links">
                            <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">Allgemein</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Passwort ändern</a>
                            
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-invoices">Rechnungen</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="account-general">



                                <div class="card-body">
                                    <h6 class="mb-4">Deine Daten</h6>
                                    <div class="form-group">
                                        <label class="form-label"><nobr>Vorname</nobr></label>
                                        <input name="fname" type="text" class="form-control mb-1" value="<?= $data[2] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label"><nobr>Nachname</nobr></label>
                                        <input name="lname" type="text" class="form-control" value="<?= $data[3] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">E-mail</label>
                                        <input name="emailadress" type="text" class="form-control mb-1" value="<?= $data[4] ?>">

                                    </div>

                                    <hr>
                                    <h6 class="mb-4">Kontakt</h6>
                                    <div class="form-group">
                                        <label class="form-label"><nobr>Handynummer</nobr></label>
                                        <input name="handynummer" type="text" class="form-control" value="<?= $data[5] ?>">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-9 mb-3">
                                            <label for="form-label">Straße</label>
                                            <input name="street" type="text" class="form-control" value="<?= $data[6] ?>">

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="form-label">No.</label>
                                            <input name="hausnr" type="text" class="form-control" value="<?= $data[7] ?>">

                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="form-label"><nobr>Adresszusatz <span class="text-muted">(Optional)</span></nobr></label>
                                        <input name="addinfo" type="text" class="form-control" value="<?= $data[8] ?>">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5 mb-3">
                                            <label for="form-label">Land</label>

                                            <?php include 'countries/allcountriessettings.php' ?>


                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="form-label">Stadt</label>
                                            <input name="city" type="text" class="form-control" value="<?= $data[10] ?>">

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="form-label">PLZ</label>
                                            <input name="zip" type="text" class="form-control" value="<?= $data[11] ?>">

                                        </div>
                                    </div>

                                </div>

                            </div>



                            <div class="tab-pane fade" id="account-change-password">
                                <div class="card-body pb-2">

                                    <div class="form-group">
                                        <label class="form-label"><nobr>Aktuelles Passwort</nobr></label>
                                        <input type="password" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label"><nobr>Neues Passwort</nobr></label>
                                        <input type="password" class="form-control" name="firstpw">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label"><nobr>Wiederhole das neue Passwort</nobr></label>
                                        <input type="password" class="form-control" name="secondpw">
                                    </div>

                                </div>
                            </div>


                            




                            <div class="tab-pane fade" id="account-invoices">
                                <br>
                                <?php include 'invoice.php' ?>
                            </div>



                        </div>
                    </div>
                </div>
            </div>

            <div class="text-right mt-3">
                <button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
                <button type="button" class="btn btn-default">Cancel</button>
            </div>
        </form>
    </div>




    <script src="assets/js/bootstrap.bundle.js">

</script>
</body>
<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2022 Dave's Webshop GmbH</p>
    <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
</footer>

</html>