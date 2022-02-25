<div class="row">
    <hr>
<div class="col-4">
    <div class="form-check">

        <input class="form-check-input form-check-input-bg" type="checkbox" value="" id="flexCheckDefault">


    </div>
    <img src="<?= $cartItem[4] ?>" class="center" alt="...">
</div>
<div class="col-8">
    <div><h5 class="card-title"><?= $cartItem[1] ?></h5></div>
    <div><?= $cartItem[2] ?></div>
    <br>

    <div><h5 class="card-title"><?php
            $cost = number_format($cartItem[3], 2);
            echo "$cost";


             ?>€</h5></div>
             
</div>

</div>