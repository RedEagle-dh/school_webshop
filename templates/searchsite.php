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
    $searchword = $_POST['searchproduct'];
    
    $sql = "SELECT artnr, titel, beschreibung, preis, picture FROM produkte WHERE titel LIKE '%".$searchword."%';";
    $result = db_query($sql);
    if (!$result) {
        return [];
    }
    $products = [];
    while ($row = mysqli_fetch_row($result)) {
        $products[] = $row;
    }

    
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


    </div>



    <div class="row">
        <div class="col">
            <div class="container">

                <?php if (!empty($products)) {
                    foreach ($products as $product) : ?>
                        <div class="col">
                            <?php include 'templates\card.php' ?>
                            <br>
                        </div>
                <?php endforeach;
                } ?>

            </div>

        </div>


    </div>





    <script src="assets/js/bootstrap.bundle.js"></script>
</body>

</html>