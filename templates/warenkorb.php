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
                <div class="card" style="width: 18rem;" >
                    <div class="card-title">

                        <div class="card-body">
                            <h5 class="card-title">Summe</h5>
                            <p class="card-text"><?= countCartItems(getCurrentUserId());?> Artikel: <?php
                            $prod = getCartItemsForUser(getCurrentUserId());
                            $sql = "SELECT SUM(preis) FROM cart JOIN produkte p on cart.productid = p.artnr";
                            $result = db_query($sql);

                            while ($row = mysqli_fetch_row($result)) {
                                $sum = $row[0];
                            }

                            $erg = number_format($sum, 2);
                            echo "$erg";
                            ?></div>
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
                    <?php include 'cartItem.php' ?>

                </div>
            <?php endforeach; ?>

        </div>

    </div>


</div>





<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
