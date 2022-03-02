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

  $sql = "SELECT artnr, titel, beschreibung, preis, picture, produkte.katid FROM produkte, kategorien WHERE produkte.katid = kategorien.katid AND kategorien.katid = '" . $_GET['cat'] . "'";
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
<footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2022 Dave's Webshop GmbH</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
</html>