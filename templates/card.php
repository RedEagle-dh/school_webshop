<div class="card shadow darkcard" style="width: 18rem;">
    <div class="card-title">


        <img src="<?= $product[4] ?>" class="card-img-top center" id='test' alt="...">
        <div class="card-body">
            <h5 class="card-title goingdark"><?= $product[1] ?></h5>
            <p class="card-text goingdark"><?= $product[2] ?></div>
    </div>
    <div class="card-footer darkcardfooter">
        <a href="index.php/cart/add/<?= $product[0] ?>" class="btn btn-success">Add to cart</a>


        <a href="index.php/productsite.php?id=<?= $product[0] ?>" class="btn btn-secondary">More</a>
    </div>
</div>
