<div class="card" style="width: 18rem;">
    <div class="card-title">


        <img src="<?= $product[4] ?>" class="card-img-top center" id='test' alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $product[1] ?></h5>
            <p class="card-text"><?= $product[2] ?></div>
    </div>
    <div class="card-footer">
        <a href="index.php/cart/add/<?= $product[0] ?>" class="btn btn-success">Add to cart</a>


        <a href="productsite.php" class="btn btn-secondary">More</a>
    </div>
</div>
