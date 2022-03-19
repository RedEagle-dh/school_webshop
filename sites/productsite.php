<!DOCTYPE html>
<html lang="de">
<?php
include 'templates\navbar.php';
$sql = "SELECT titel, beschreibung, preis, picture, artnr FROM produkte WHERE artnr = '" . $_GET['id'] . "';";
$result = db_query($sql);

$row = mysqli_fetch_row($result); ?>

<head>
    <meta charset="utf-8">
    <title>Dave's Webshop | <?= $row[0] ?></title>
    <base href="/Webshop/">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body data-menu="vertical-menu" class="vertical-layout vertical-menu content-right-sidebar menu-expanded">




    <br><br><br>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">
                    <?= $row[0] ?>
                </h3>
                <h6 class="card-subtitle">globe type chair for rest</h6>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-6">
                        <div class="white-box text-center">
                            <img src="<?= $row[3] ?>" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6">
                        <h4 class="box-title mt-5">Product description</h4>
                        <p><?= $row[1] ?></p>
                        <h2 class="mt-5">
                            <?= $row[2] ?>€ <small class="text-success">(36%off)</small>
                        </h2>
                        <button class="btn btn-dark btn-rounded mr-1" data-toggle="tooltip" title="" data-original-title="Add to cart">
                            <i class="fa fa-shopping-cart"></i>
                        </button>
                        <button class="btn btn-primary btn-rounded">Buy Now</button>
                        <h3 class="box-title mt-5">Key Highlights</h3>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-check text-success"></i>Sturdy structure</li>
                            <li><i class="fa fa-check text-success"></i>Designed to foster easy portability</li>
                            <li><i class="fa fa-check text-success"></i>Perfect furniture to flaunt your wonderful collectibles</li>
                        </ul>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h3 class="box-title mt-5">Technische Daten</h3>
                        <div class="table-responsive">
                            <table class="table table-striped table-product">
                                <tbody>

                                    <?php
                                    
                                    $desc = getDescriptionName();
                                    $val = getDescriptioncpuValue($row[4]);
                                    
                                    for($i = 0; $i < count($desc)-2; $i++) : ?>
                                        <tr>
                                            <td width="390"><?= $desc[$i][0] ?></td>
                                            
                                            <td><?= 
                                            
                                            $val[$i] ?></td>
                                            
                                        </tr>
                                    <?php endfor; ?>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2022 Dave's Webshop GmbH</p>
    <ul class="list-inline">
        <li class="list-inline-item"><a href="index.php/impressum">Impressum</a></li>
        <li class="list-inline-item"><a href="index.php/tos">AGB</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
</footer>

</html>