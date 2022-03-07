<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <title>Dave's Webshop | Settings</title>
    <base href="/Webshop/">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <?php include 'templates/navbar.php'; ?>
    <br><br><br>


    <div class="container">


        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Warenkorb</span>
                    <span class="badge badge-secondary badge-pill"><?php $items = countCartItems(getCurrentUserId());
                                                                    echo $items; ?></span>
                </h4>
                <ul class="list-group mb-3">
                    <?php foreach ($cartItems as $cartItem) : ?>

                        <?php include 'templates/cartcardcheckout.php'; ?>


                    <?php endforeach; ?>

                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Promo code</h6>
                            <small>EXAMPLECODE</small>
                        </div>
                        <span class="text-success">-5€</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (EUR)</span>
                        <strong><?= getCartPrice(getCurrentUserId()) ?>€</strong>
                    </li>
                </ul>




                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Promo code" name="testinput" id="testinput">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Einlösen
                            </button>
                        </div>
                    </div>


                </form>


            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Lieferadresse</h4>
                <form class="needs-validation" action="index.php/bought?create=1" method="POST" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Vorname</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" name="dfname" required>
                            <div class="invalid-feedback">
                                Ein richtiger Vorname wird benötigt.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Nachname</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" name="dlname" required>
                            <div class="invalid-feedback">
                                Ein richtiger Nachname wird benötigt.
                            </div>
                        </div>
                    </div>



                    <div class="mb-3">
                        <label for="email">Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control" id="email" name="demail" placeholder="du@beispiel.com">
                        <div class="invalid-feedback">
                            Bitte gib eine korrekte Emailadresse an um Lieferupdates zu erhalten.
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9 mb-3">
                            <label for="address">Straße</label>
                            <input type="text" class="form-control" id="address" placeholder="Birkenweg" name="dstreet" required>
                            <div class="invalid-feedback">
                                Bitte gib deine Straße an.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="address">No.</label>
                            <input type="text" class="form-control" id="address" placeholder="24a" name="dno" required>
                            <div class="invalid-feedback">
                                Bitte gib deine Hausnummer an.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address2">Adresszusatz <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="address2" placeholder="Stockwerk o. Wohnung" name="daddress2">
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Land</label>

                            <?php include 'countries/allcountriesd.php' ?>


                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="address">Stadt</label>
                            <input type="text" class="form-control" id="address" placeholder="Hessen" name="dstate" required>
                            <div class="invalid-feedback">
                                Bitte gib deine Stadt an.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">PLZ</label>
                            <input type="text" class="form-control" id="zip" placeholder="36110" name="dzip" required>
                            <div class="invalid-feedback">
                                Bitte gib deine Postleitzahl an.
                            </div>
                        </div>
                    </div>


                    <hr class="mb-4">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="same-address" onclick="SetBilling(this.checked);" checked="checked" />
                        <label class="custom-control-label" for="same-address">Die Rechnungsadresse entspricht meiner Lieferadresse</label>
                    </div>

                    <div id="rechnungsadressediv" class="shipping_address" style="display:none;">


                        <br>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">Vorname</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" name="rfname">

                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Nachname</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="" name="rlname">

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-9 mb-3">
                                <label for="address">Straße</label>
                                <input type="text" class="form-control" id="address" placeholder="Birkenweg" name="rstreet">

                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="address">No.</label>
                                <input type="text" class="form-control" id="address" placeholder="24a" name="rno">

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address2">Adresszusatz <span class="text-muted">(Optional)</span></label>
                            <input type="text" class="form-control" id="address2" placeholder="Stockwerk o. Wohnung" name="raddress2">
                        </div>

                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="country">Land</label>

                                <?php include 'countries/allcountriesr.php' ?>


                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="address">Stadt</label>
                                <input type="text" class="form-control" id="address" placeholder="Hessen" name="rstate">

                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="zip">PLZ</label>
                                <input type="text" class="form-control" id="zip" placeholder="36110" name="rzip">

                            </div>
                        </div>

                    </div>



                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="save-info">
                        <label class="custom-control-label" for="save-info">Speichere die Infos für nächstes Mal</label>
                    </div>
                    <hr class="mb-4">

                    <h4 class="mb-3">Zahlungsart</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                            <label class="custom-control-label" for="credit">Kreditkarte</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="debit">Debitkarte</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="paypal">PayPal</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Karteninhaber</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="" required>
                            <small class="text-muted">Auf der Karte zu finden</small>
                            <div class="invalid-feedback">
                                Name benötigt
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Kartennummer</label>
                            <input type="text" class="form-control" id="cc-number" placeholder="" required>
                            <div class="invalid-feedback">
                                Kartennummer benötigt
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Ablaufdatum</label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                            <div class="invalid-feedback">
                                Ablaufdatum benötigt
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-cvv">CVV</label>
                            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                            <div class="invalid-feedback">
                                Sicherheitscode benötigt
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-success btn-lg btn-block" type="submit" onclick="Watch();">Buy</button>
                </form>
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2022 Dave's Webshop GmbH</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
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

    <!-- Page level plugins -->
    <script src="assets/js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/chart-area-demo.js"></script>
    <script src="assets/js/chart-pie-demo.js"></script>
</body>

</html>