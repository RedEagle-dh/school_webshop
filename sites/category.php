<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="utf-8">
  <title>Dave's Webshop | Suche</title>
  <base href="/Webshop/">
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body data-menu="vertical-menu" class="vertical-layout vertical-menu content-right-sidebar menu-expanded">


  <?php
  include 'templates\navbar.php'; ?>

  <br><br><br>




  <section class="container" id="products">
  

  <div class="row">
    
      

        <?php if (!empty(getCat())) {
          $products = getCat();
          foreach ($products as $product) : ?>
            <div class="col-3">
              <?php include 'templates\card.php' ?>
              <br>
            </div>
        <?php endforeach;
        } ?>

      

      

    


  </div>
  </section>




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