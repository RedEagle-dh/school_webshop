<div class="card" style="width: 18rem;">
  <div class="card-title">
    <?php
    include_once 'functions\db_funktionen.php';
    $sql = "select * from produkte order by rand() limit 1";
    $result = db_query($sql);
    while($row = mysqli_fetch_row($result)) {
      echo "<img src=\"$row[5]\" class=\"card-img-top\" alt=\"...\">
      <div class=\"card-body\">
      <h5 class=\"card-title\"> $row[1] </h5>
      <p class=\"card-text\"> $row[2]</div>
      </div>
      <div class=\"card-footer\">
      <a href=\"index.php/cart/add/$row[0]\" class=\"btn btn-primary\">Add to cart</a>";
    }

      ?>

    <a href="productsite.php" class="btn btn-secondary">More</a>
  </div>
</div>
