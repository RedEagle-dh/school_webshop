<div class="row">
    <hr>
    <div class="col-4">
        <div class="form-check">



            <a href="index.php/throw?id=<?= $cartItem[5] ?>">
                <img src="mull.png" />
            </a>
            <i class="bi bi-trash"></i>
        </div>
        <img src="<?= $cartItem[4] ?>" class="center goingdark" alt="...">
    </div>
    <div class="col-8">
        <div>
            <h5 class="card-title goingdark"><?= $cartItem[1] ?></h5>
        </div>
        <div class=" goingdark"><?= $cartItem[2] ?></div>
        <br>

        <div>
            <h5 class="card-title goingdark"><?php
                                    $cost = number_format($cartItem[3], 2);
                                    echo "$cost";


                                    ?>€</h5>
        </div>

        <div class="form-group col-1" id="sel1">
            <label for="sel1" class="goingdark"><nobr>Anzahl:</nobr></label>
            <br>
            <select class="form-control darkcard" disabled>
                <option class="goingdark" selected><?= $cartItem[6] ?></option>
                
            </select>

        </div>

    </div>

</div>