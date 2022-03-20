<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <title>Dave's Webshop | Settings</title>
    <base href="/Webshop/">


    <link rel="icon" href="https://lh3.googleusercontent.com/jUoaTIlBn5ibfQcND2n5OMD6Z7xoqNj-ShHlFR6QuLffLXD5pS8V2eNg1rGlrsRrnDkoQ28O8UHzqzBQKAGY4l1CS2NQSq2SkRScK6FOjl82jppyohK-">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body data-menu="vertical-menu" class="vertical-layout vertical-menu content-right-sidebar menu-expanded">

    <?php include 'templates/navbar.php';
    $data = getUserData(getEmailAdress()); ?>

    <div class="container light-style flex-grow-1 container-p-y darkcard">
        <form action="index.php/updateprofile" method="POST">



            <h4 class="h3 mb-0 text-gray-800 py-3 goingdark">
                Account settings
            </h4>

            <div class="card overflow-hidden darkcard">
                <div class="row no-gutters row-bordered row-border-light">
                    <div class="col-md-3 pt-0">
                        <div class="list-group list-group-flush account-settings-links">
                            <a class="list-group-item list-group-item-action active goingdark darkcard" data-toggle="list" href="#account-general">Allgemein</a>
                            <a class="list-group-item list-group-item-action goingdark darkcard" data-toggle="list" href="#account-change-password">Passwort ändern</a>

                            <a class="list-group-item list-group-item-action goingdark darkcard" data-toggle="list" href="#account-invoices">Rechnungen</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="account-general">



                                <div class="card-body">
                                    <h6 class="mb-4 goingdark">Deine Daten</h6>
                                    <div class="form-group">
                                        <label class="form-label goingdark">
                                            <nobr>Vorname</nobr>
                                        </label>
                                        <input name="fname" type="text" class="form-control mb-1 goingdark searchbar" value="<?= $data[2] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label goingdark">
                                            <nobr>Nachname</nobr>
                                        </label>
                                        <input name="lname" type="text" class="form-control goingdark searchbar" value="<?= $data[3] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label goingdark">E-mail</label>
                                        <input name="emailadress" type="text" class="form-control mb-1 goingdark searchbar" value="<?= $data[4] ?>">

                                    </div>

                                    <hr>
                                    <h6 class="mb-4 goingdark">Kontakt</h6>
                                    <div class="form-group">
                                        <label class="form-label goingdark">
                                            <nobr>Handynummer</nobr>
                                        </label><br>
                                        <input name="handynummer" type="text" class="form-control goingdark searchbar" value="<?= $data[5] ?>">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-9 mb-3">
                                            <br><label for="form-label" class=" goingdark">Straße</label><br>
                                            <input name="street" type="text" class="form-control goingdark searchbar" value="<?= $data[6] ?>">

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <br><label for="form-label" class=" goingdark">No.</label><br>
                                            <input name="hnr" type="text" class="form-control goingdark searchbar" value="<?= $data[7] ?>">

                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="form-label" class=" goingdark">
                                            <nobr>Adresszusatz <span class="text-muted goingdark">(Optional)</span></nobr>
                                        </label><br>
                                        <input name="addinfo" type="text" class="form-control goingdark searchbar" value="<?= $data[8] ?>">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5 mb-3">
                                            <label for="form-label" class="goingdark">Land</label> <br>

                                            <?php include 'countries/allcountriessettings.php' ?>


                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="form-label" class=" goingdark">Stadt</label><br>
                                            <input name="city" type="text" class="form-control goingdark searchbar" value="<?= $data[10] ?>">

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="form-label " class=" goingdark">PLZ</label><br>
                                            <input name="zip" type="text" class="form-control goingdark searchbar" value="<?= $data[11] ?>">

                                        </div>
                                    </div>

                                </div>

                            </div>



                            <div class="tab-pane fade" id="account-change-password">
                                <div class="card-body pb-2">

                                    <div class="form-group">
                                        <label class="form-label goingdark">
                                            <nobr>Aktuelles Passwort</nobr>
                                        </label>
                                        <input type="password" class="form-control searchbar goingdark" name="actualpw">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label goingdark">
                                            <nobr>Neues Passwort</nobr>
                                        </label>
                                        <input type="password" class="form-control searchbar goingdark" name="firstnewpw">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label goingdark">
                                            <nobr>Wiederhole das neue Passwort</nobr>
                                        </label>
                                        <input type="password" class="form-control searchbar goingdark" name="secondnewpw">
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
            

                <button type="submit" class="btn btn-success">Save changes</button>&nbsp;
                <button type="button" class="btn btn-default goingdark">Cancel</button>
            </div> <br>
        </form>
    </div>







</body>
<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2022 Dave's Webshop GmbH</p>
    <ul class="list-inline">
        <li class="list-inline-item"><a href="index.php/impressum">Impressum</a></li>
        <li class="list-inline-item"><a href="index.php/tos">AGB</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
</footer>

</html>