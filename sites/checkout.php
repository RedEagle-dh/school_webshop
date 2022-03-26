<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <title>Dave's Webshop | Bezahlvorgang</title>
    <base href="/Webshop/">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">


    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="assets\css\bootstrap.css" rel="stylesheet">

</head>

<body>
    <?php include 'templates/navbar.php';
    $data = getUserData(getEmailAdress());
    ?>
    <br><br><br>


    <div class="container">


        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted goingdark">Warenkorb</span>
                    <span class="badge badge-secondary badge-pill"><?php $items = countCartItems(getCurrentUserId());
                                                                    echo $items; ?></span>
                </h4>
                <ul class="list-group mb-3">
                    <?php foreach ($cartItems as $cartItem) : ?>

                        <?php include 'templates/cartcardcheckout.php'; ?>


                    <?php endforeach; ?>

                    <li class="list-group-item d-flex justify-content-between bg-light darkcard">
                        <div class="text-success">
                            <h6 class="my-0">Promo code</h6>
                            <small>EXAMPLECODE</small>
                        </div>

                        <span class="text-success">-5€</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between darkcard">
                        <span class="goingdark">Versandkosten</span>
                        <strong class="goingdark"><?= getDeliveryPrice() ?>€</strong>
                    </li>
                    <li class="list-group-item d-flex justify-content-between darkcard">
                        <strong class="goingdark">Gesamt (EUR)</strong>
                        <strong class="goingdark"><?= number_format(getTotalPrice(), 2) ?>€</strong>
                    </li>
                </ul>




                <form class="card p-2 darkcard">
                    <div class="input-group">
                        <input type="text" class="form-control goingdark searchbar" placeholder="Promo code" name="testinput" id="testinput">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Einlösen
                            </button>
                        </div>
                    </div>


                </form>


            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3 goingdark">Lieferadresse</h4>
                <form class="needs-validation" action="index.php/bought?create=1" method="POST" id="boughtform" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="goingdark">Vorname</label>
                            <input type="text" class="form-control searchbar goingdark" id="firstName" placeholder="" value="<?= $data[2] ?>" name="dfname" required>
                            <div class="invalid-feedback">
                                Ein richtiger Vorname wird benötigt.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="goingdark">Nachname</label>
                            <input type="text" class="form-control searchbar goingdark" id="lastName" placeholder="" value="<?= $data[3] ?>" name="dlname" required>
                            <div class="invalid-feedback">
                                Ein richtiger Nachname wird benötigt.
                            </div>
                        </div>
                    </div>



                    <div class="mb-3">
                        <label for="email" class="goingdark">Email <span class="text-muted goingdark">(Optional)</span></label>
                        <input type="email" class="form-control searchbar goingdark" id="email" name="demail" placeholder="du@beispiel.com" value="<?= $data[4] ?>">
                        <div class="invalid-feedback">
                            Bitte gib eine korrekte Emailadresse an um Lieferupdates zu erhalten.
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9 mb-3">
                            <label class="goingdark" for="address">Straße</label>
                            <input type="text" class="form-control searchbar goingdark" id="address" placeholder="Birkenweg" name="dstreet" value="<?= $data[6] ?>" required>
                            <div class="invalid-feedback">
                                Bitte gib deine Straße an.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="goingdark" for="nod">No.</label>
                            <input type="text" class="form-control searchbar goingdark" id="nod" placeholder="24a" name="dno" value="<?= $data[7] ?>" required>
                            <div class="invalid-feedback">
                                Bitte gib deine Hausnummer an.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="goingdark" for="address2">Adresszusatz <span class="text-muted goingdark">(Optional)</span></label>
                        <input type="text" class="form-control searchbar goingdark" id="address2" placeholder="Stockwerk o. Wohnung" name="daddress2" value="<?= $data[8] ?>">
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country" class="goingdark">Land</label>

                            <?php include 'countries/allcountriesd.php' ?>


                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="sd" class="goingdark">Stadt</label>
                            <input type="text" class="form-control searchbar goingdark" id="sd" placeholder="Frankfurt a.M." name="dstate" value="<?= $data[10] ?>" required>
                            <div class="invalid-feedback">
                                Bitte gib deine Stadt an.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip" class="goingdark">PLZ</label>
                            <input type="text" class="form-control searchbar goingdark" id="zip" placeholder="36110" name="dzip" value="<?= $data[11] ?>" required>
                            <div class="invalid-feedback">
                                Bitte gib deine Postleitzahl an.
                            </div>
                        </div>
                    </div>


                    <hr class="mb-4">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="same-address" onclick="SetBilling(this.checked);" checked="checked" />
                        <label class="custom-control-label goingdark" for="same-address">
                            <nobr>Die Rechnungsadresse entspricht meiner Lieferadresse</nobr>
                        </label>
                    </div>

                    <div id="rechnungsadressediv" class="shipping_address animated--grow-in" style="display:none;">


                        <br>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstNamer" class="goingdark">Vorname</label>
                                <input type="text" class="form-control searchbar goingdark" id="firstNamer" placeholder="" value="" name="rfname">

                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastNamer" class="goingdark">Nachname</label>
                                <input type="text" class="form-control searchbar goingdark" id="lastNamer" placeholder="" value="" name="rlname">

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-9 mb-3">
                                <label for="addressr" class="goingdark">Straße</label>
                                <input type="text" class="form-control searchbar goingdark" id="addressr" placeholder="Birkenweg" name="rstreet">

                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="rno" class="goingdark">No.</label>
                                <input type="text" class="form-control searchbar goingdark" id="rno" placeholder="24a" name="rno">

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address2r" class="goingdark">Adresszusatz <span class="text-muted goingdark">(Optional)</span></label>
                            <input type="text" class="form-control searchbar goingdark" id="address2r" placeholder="Stockwerk o. Wohnung" name="raddress2">
                        </div>

                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="countryr" class="goingdark">Land</label>

                                <?php include 'countries/allcountriesr.php' ?>


                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="cityr" class="goingdark">Stadt</label>
                                <input type="text" class="form-control searchbar goingdark" id="cityr" placeholder="Frankfurt a.M." name="rstate">

                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="zipr" class="goingdark">PLZ</label>
                                <input type="text" class="form-control searchbar goingdark" id="zipr" placeholder="36110" name="rzip">

                            </div>
                        </div>

                    </div>


                    <hr class="mb-4">

                    <h4 class="mb-3 goingdark">Kreditkarte</h4>
                    <br>

                    <div class="showorshownot">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cc-name" class="goingdark">Karteninhaber</label>
                                <input type="text" class="form-control searchbar goingdark" id="cc-name" placeholder="" required>
                                <small class="text-muted goingdark">Auf der Karte zu finden</small>
                                <div class="invalid-feedback">
                                    Name benötigt
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cc-number" class="goingdark">Kartennummer</label>
                                <input type="text" class="form-control searchbar goingdark" id="cc-number" placeholder="" required>
                                <div class="invalid-feedback">
                                    Kartennummer benötigt
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration" class="goingdark">Ablaufdatum</label>
                                <input type="text" class="form-control searchbar goingdark" id="cc-expiration" placeholder="" required>
                                <div class="invalid-feedback">
                                    Ablaufdatum benötigt
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cc-cvv" class="goingdark">CVV</label>
                                <input type="text" class="form-control searchbar goingdark" id="cc-cvv" placeholder="" required>
                                <div class="invalid-feedback">
                                    Sicherheitscode benötigt
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <div class="row">
                        <button class="btn btn-success btn-lg btn-block" type="submit" onclick="Watch();">Kostenpflichtig bestellen</button>
                        
                    </div>
                </form>
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2022 Dave's Webshop GmbH</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.php/impressum">Impressum</a></li>
                <li class="list-inline-item"><a href="index.php/tos">AGB</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>



    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';

            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

        function Watch() {
            var c = document.getElementById("same-address");
            if (c.checked == true) {
                document.querySelector('input[name="rfname"]').value = document.querySelector('input[name="dfname"]').value;
                document.querySelector('input[name="rlname"]').value = document.querySelector('input[name="dlname"]').value;
                document.querySelector('input[name="rstreet"]').value = document.querySelector('input[name="dstreet"]').value;
                document.querySelector('input[name="rno"]').value = document.querySelector('input[name="dno"]').value;
                document.querySelector('input[name="rstate"]').value = document.querySelector('input[name="dstate"]').value;
                document.querySelector('input[name="rzip"]').value = document.querySelector('input[name="dzip"]').value;
                document.querySelector('input[name="rcountry"]').value = document.querySelector('input[name="dcountry"]').value;
                document.querySelector('input[name="raddress2"]').value = document.querySelector('input[name="daddress2"]').value;

            }


        }

        function SetBilling(checked) {

            if (checked) {
                document.getElementById('rechnungsadressediv').style.display = "none";
            } else {
                document.getElementById('rechnungsadressediv').style.display = "block";
            }
        }
    </script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</body>

</html>