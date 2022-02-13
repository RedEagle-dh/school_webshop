<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title>Dave's Webshop</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  </head>
  <body>


    <?php
      include 'templates\navbar.php';

     ?>

<br><br><br>
    <section class="container" id="products">
      <div class="row">
        <div class="col">
            <?php include 'templates\card.php' ?>
        </div>
        <div class="col">
          <?php include 'templates\card.php' ?>
        </div>
        <div class="col">
          <?php include 'templates\card.php' ?>
        </div>
        <div class="col">
          <?php include 'templates\card.php' ?>
        </div>

      </div>
<br><br>
      <div class="row">
        <div class="col">
          <?php include 'templates\card.php' ?>
        </div>
        <div class="col">
          <?php include 'templates\card.php' ?>
        </div>
        <div class="col">
          <?php include 'templates\card.php' ?>
        </div>
        <div class="col">
          <?php include 'templates\card.php' ?>
        </div>

      </div>
    </section>



    <script src="assets/js/bootstrap.bundle.js">

    </script>
  </body>
</html>
