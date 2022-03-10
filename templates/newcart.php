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
        <section class="shopping-cart dark">
            <div class="container">
                <div class="block-heading">
                    <h2>Warenkorb</h2>

                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-12 col-lg-8">
                            <div class="items">


                                <?php 
                                $anzahl = countCartItemsWithoutAmount();
                                foreach ($cartItems as $cartItem) : ?>
                                    <div class="row">
                                        <?php include 'templates/cartcard.php';
                    
                                        $anzahl = $anzahl -1;

                                        ?>
                                    </div>
                                <?php endforeach; ?>


                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="summary">
                                <h3>Zusammenfassung</h3>
                                <div class="summary-item"><span class="text" id="artikelteile"><?php 
                                if(countCartItems(getCurrentUserId()) == 0) {
                                    echo "0";
                                } else {
                                    echo countCartItems(getCurrentUserId());
                                }
                                 ?></span><span class="text"> Artikel</span><span class="price" id="artikelpreiss"><?= getCartPrice(getCurrentUserId()) ?>€</span></div>
                                <div class="summary-item"><span class="text">Lieferkosten</span><span class="price" id="delprice"><?= getDeliveryPrice() ?>€</span></div>
                                <div class="summary-item"><span class="text">Gesamt</span><span class="price" id="totalprice"><?= getTotalPrice() ?>€</span></div>
                                <br>
                                <a href="index.php/checkout" type="button" class="btn btn-primary btn-lg btn-block">Kaufen</a>
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

</body>

</html>