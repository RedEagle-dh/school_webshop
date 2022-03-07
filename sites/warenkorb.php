<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Dave's Webshop | Cart</title>
    <base href="/Webshop/">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

</head>
<body data-menu="vertical-menu" class="vertical-layout vertical-menu content-right-sidebar menu-expanded">


<?php
include 'templates\navbar.php';


?>

<br><br><br>


<div class="row">
    <div class="col-3">
        <div class="container">
            <div class="align-right">
                Nichts
            </div>

        </div>

    </div>
    <div class="col-6">
        <div class="container">
            <div class="align-right">
                Infos?
            </div>

        </div>

    </div>
    <div class="col-3">
        <div class="float-end">
            <div class="container">
                <div class="card darkcard" style="width: 18rem;" >
                    <div class="card-title">

                        <div class="card-body">
                            <h5 class="card-title goingdark">Summe</h5>
                            <p class="card-text goingdark"><?= countCartItems(getCurrentUserId());?> Artikel: <?= getCartPrice(getCurrentUserId())?>€</div>
                    </div>
                    <div class="card-footer">
                        <a href="index.php/checkout" class="btn btn-success">Zur Kasse</a>

                    </div>
                </div>

            </div>
        </div>



    </div>

</div>



<div class="row">
    <div class="col">
        <div class="container">

            <?php foreach ($cartItems as $cartItem): ?>
                <div class="row">
                    <?php include 'templates/cartItem.php' ?>

                </div>
            <?php endforeach; ?>

        </div>

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



<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
