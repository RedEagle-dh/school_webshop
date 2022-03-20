<div class="card shadow darkcard" style="width: 18rem">
    <div class="card-title">
        <?php 
        $price = "<p class='card-text goingdark pricesoldout' style='color:green' id='picesoldout'>".number_format($product[3], 2) . "€";
        $img = "<img src='data:image/jpg;charset=utf8;base64,".base64_encode($product[4])."' class='card-img-top center productimage' id='productimage' alt='data:image/jpg;charset=utf8;base64,".base64_encode($product[4])."'>";
        $btn = "<a href='index.php/cart/add/$product[0]' class='btn btn-success' id='addtocartbtn'><i class='fa fa-shopping-cart addtocartbtn'></i> Hinzufügen</a>";
        if ($product[5] == 0) {
            $price = "<p class='card-text' style='color: red'>Sold Out!</p>";
            $img = "<img src='data:image/jpg;charset=utf8;base64,".base64_encode($product[4])."' class='card-img-top center  imageoutoforder productimage' id='productimage' alt='data:image/jpg;charset=utf8;base64,".base64_encode($product[4])."'>";
            $btn = "<a href='index.php/cart/add/<?= $product[0] ?>' class='btn btn-success disabled' id='addtocartbtn'><i class='fa fa-shopping-cart addtocartbtn'></i> Hinzufügen</a>";
        }
        $sql = "SELECT artnr, titel, beschreibung, preis, picture, auflager FROM produkte WHERE auflager = 0";
        $result = db_query($sql);
    
        $soutt = mysqli_fetch_array($result);
        echo "$img";
        ?>

        
        <div class="card-body">
            <h5 class="card-title goingdark"><?= $product[1] ?></h5>
            <?php 
            
            
            echo "$price" ?>
        </div>
    </div>
    <div class="card-footer darkcardfooter">
        <?php 
        echo "$btn";
        ?>


        <a href="index.php/productsite.php?id=<?= $product[0] ?>" class="btn btn-secondary"><i class="fi fi-rr-info"></i> Info</a>
    </div>
    
</div>