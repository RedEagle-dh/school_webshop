<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Dave's Webshop | Cart</title>
    <base href="/Webshop/">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

</head>
<body>


<?php
include 'templates\navbar.php';

?>

<br><br><br>
<section class="container" id="cartItems">
    <?php foreach ($cartItems as $cartItem): ?>
        <div class="row">
            <?php include 'cartItem.php' ?>

        </div>
    <?php endforeach; ?>

</section>


<script src="assets/js/bootstrap.bundle.js">

</script>
</body>
</html>
