<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <title>Dave's Webshop | Warenkorb</title>
    <base href="/Webshop/">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="icon" href="https://lh3.googleusercontent.com/jUoaTIlBn5ibfQcND2n5OMD6Z7xoqNj-ShHlFR6QuLffLXD5pS8V2eNg1rGlrsRrnDkoQ28O8UHzqzBQKAGY4l1CS2NQSq2SkRScK6FOjl82jppyohK-">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
</head>

<body data-menu="vertical-menu" class="vertical-layout vertical-menu content-right-sidebar menu-expanded">


    <?php
    include 'templates\navbar.php';


    ?>



    <?php include 'templates/newcart.php'; ?>







    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1" id="tesst">&copy; 2022 Dave's Webshop GmbH</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="index.php/impressum">Impressum</a></li>
            <li class="list-inline-item"><a href="index.php/tos">AGB</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>



    <script src="assets/js/bootstrap.bundle.js"></script>
    
</body>

</html>