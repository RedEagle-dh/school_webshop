<li class="list-group-item d-flex justify-content-between lh-condensed darkcard">
    <div>
        <h6 class="my-0 goingdark"><?= $cartItem[1] ?></h6>
        
    </div>
    <span class="text-muted goingdark"><?= $cartItem[6] ?> x <?php
                                $cost = number_format(($cartItem[3] -($cartItem[3] * getDiscountForProduct($cartItem[0]) / 100 )), 2) ;
                                echo "$cost";


                                ?>€</h5></span>
</li>