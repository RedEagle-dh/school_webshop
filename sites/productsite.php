<!DOCTYPE html>
<html lang="de">
<?php
include 'templates\navbar.php';
$sql = "SELECT titel, beschreibung, preis, picture, artnr, katid, auflager FROM produkte WHERE artnr = '" . $_GET['id'] . "';";
$result = db_query($sql);

$row = mysqli_fetch_row($result); ?>

<head>
    <meta charset="utf-8">
    <title>Dave's Webshop | <?= $row[0] ?></title>
    <base href="/Webshop/">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>


    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body data-menu="vertical-menu" class="vertical-layout vertical-menu content-right-sidebar menu-expanded">




    <br><br><br>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="container">
        <div class="card">
            <div class="card-body darkcard">
                <h3 class="card-title goingdark">
                    <?= $row[0] ?>
                </h3>

                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-6">
                        <div class="white-box text-center">
                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row[3]) ?>" class="img-responsive" style="width:100%;max-width:300px">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6">
                        <h4 class="box-title mt-5 goingdark">Produktbeschreibung</h4>
                        <p class="goingdark"><?= $row[1] ?></p>
                        <h2 class="mt-5 goingdark">
                            <?php echo number_format($row[2], 2);  ?>€ <small class="text-success">(36%off)</small>
                        </h2>
                        <?php

                        if ($row[6] == 0) {
                            echo "<a href='index.php/cart/add/$row[4]' class='btn btn-danger mr-1 disabled' data-toggle='tooltip' data-original-title='Add to cart'>
                            <i class='fi fi-rr-cross-circle'></i> Ausverkauft
                        </a>";
                        } else {
                            echo "<a href='index.php/cart/add/$row[4]' class='btn btn-success mr-1' data-toggle='tooltip' data-original-title='Add to cart'>
                            <i class='fa fa-shopping-cart'></i> Hinzufügen
                        </a>";
                        }


                        ?>



                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h3 class="box-title mt-5 goingdark">Technische Daten</h3>
                        <div class="table-responsive">
                            <table class="table table-striped table-product goingdark">
                                <tbody>

                                    <?php
                                    $val = getDescriptionValue($row[4], $row[5]);
                                    if ($val == null) {
                                        echo '<p class="goingdark"> Noch keine vorhanden... </p>';
                                    } else {
                                        $desc = getDescriptionName($row[5]);
                                        for ($i = 0; $i < count($desc) - 2; $i++) : ?>
                                            <tr>
                                                <td width="390" class="goingdark"><?= $desc[$i][0] ?></td>

                                                <td class="goingdark"><?=

                                                                        $val[$i] ?></td>

                                            </tr>
                                    <?php endfor;
                                    } ?>








                                </tbody>
                            </table>
                        </div>

                        <!-- Hier ist die Funktion für die Kundenbewertung -->
                        <h3 class="box-title mt-5 goingdark">Kundenbewertung</h3>
                        <div class="noborder">
                            <div class="card-body darkcard">
                                <div class="card-title goingdark">

                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <div class="stars">
                                                <form action="">
                                                    <input class="star star-5" id="star-5" type="radio" name="star" /> <label class="star star-5" for="star-5"></label>
                                                    <input class="star star-4" id="star-4" type="radio" name="star" /> <label class="star star-4" for="star-4"></label>
                                                    <input class="star star-3" id="star-3" type="radio" name="star" /> <label class="star star-3" for="star-3"></label>
                                                    <input class="star star-2" id="star-2" type="radio" name="star" /> <label class="star star-2" for="star-2"></label>
                                                    <input class="star star-1" id="star-1" type="radio" name="star" /> <label class="star star-1" for="star-1"></label>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8">


                                            <br>
                                            <textarea class="form-control searchbar goingdark" id="exampleFormControlTextarea1" rows="4" placeholder="Dein Feedback..."></textarea>

                                        </div>
                                    </div>
                                </div>
                            </div>
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