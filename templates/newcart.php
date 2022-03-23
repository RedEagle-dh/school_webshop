<!DOCTYPE html>
<html>

<head>
    <title>Shopping Cart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="icon" href="https://lh3.googleusercontent.com/jUoaTIlBn5ibfQcND2n5OMD6Z7xoqNj-ShHlFR6QuLffLXD5pS8V2eNg1rGlrsRrnDkoQ28O8UHzqzBQKAGY4l1CS2NQSq2SkRScK6FOjl82jppyohK-">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <main class="page">
        <section class="shopping-cart dark-card">
            <div class="container">
                <div class="block-heading">
                    <h2>Warenkorb</h2>

                </div>
                <div class="content ro">
                    <div class="row">
                        <div class="col-md-12 col-lg-8">
                            <div class="items">


                                <?php
                                if ($cartItems == null) {
                                    include 'emptycart.html';
                                } else {
                                ?>
                                    <div id="emptycartjs">
                                    </div>
                                    <?php
                                    $anzahl = countCartItemsWithoutAmount();

                                    foreach ($cartItems as $cartItem) : ?>
                                        <div class="row">
                                            <?php include 'templates/cartcard.php';

                                            $anzahl = $anzahl - 1;

                                            ?>
                                        </div>
                                <?php endforeach;
                                }
                                ?>


                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="summary">
                                <h3 class="goingdark">Zusammenfassung</h3>
                                <div class="summary-item"><span class="text goingdark" id="artikelteile">
                                        <?php
                                        if (countCartItems(getCurrentUserId()) == 0) {
                                            echo "0";
                                        } else {
                                            echo countCartItems(getCurrentUserId());
                                        }
                                        ?></span><span class="text goingdark"> Artikel</span><span class="price goingdark" id="artikelpreiss"><?= number_format(getCartPrice(getCurrentUserId()), 2) ?>€</span></div>
                                <div class="summary-item"><span class="text goingdark">Versandkosten</span><span class="price goingdark" id="delprice"><?= getDeliveryPrice() ?>€</span></div>
                                <div class="summary-item"><span class="text goingdark">Gesamt</span><span class="price goingdark" id="totalprice"><?= number_format(getTotalPrice(), 2) ?>€</span></div>
                                <br>
                                <a href="index.php/checkout" id="buybutton" type="button" class="btn btn-secondary btn-lg btn-block disabled">Kaufen</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
    window.onload = function() {
        var hasItems = parseInt(<?= countCartItems(getCurrentUserId()) ?>);
        if (hasItems > 0) {
            document.getElementById("buybutton").classList.remove("disabled");
            document.getElementById("buybutton").classList.add("btn-success");
        } else {


        }
    }
</script>
</body>

</html>