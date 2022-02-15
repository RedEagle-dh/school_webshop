<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dave's Webshop</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="icon" href="https://lh3.googleusercontent.com/jUoaTIlBn5ibfQcND2n5OMD6Z7xoqNj-ShHlFR6QuLffLXD5pS8V2eNg1rGlrsRrnDkoQ28O8UHzqzBQKAGY4l1CS2NQSq2SkRScK6FOjl82jppyohK-">

</head>
<body>


<?php
include 'templates\navbar.php';

?>

<br><br><br>
<section class="container" id="products">


    <div class="row">
        <?php if (!empty($products)) {
            foreach ($products as $product): ?>
                <div class="col">
                    <?php include 'templates\card.php' ?>
                    <br>
                </div>
            <?php endforeach;
        } ?>
    </div>

</section>


<script src="assets/js/bootstrap.bundle.js">

</script>
</body>
</html>
