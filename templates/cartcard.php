<div class="product">
    <div class="row">
        <div class="col-md-3">
            <img class="img-fluid mx-auto d-block image" src="<?= $cartItem[4] ?>">
        </div>
        <div class="col-md-8">
            <div class="info">
                <div class="row">
                    <div class="col-md-5 product-name">
                        <div class="product-name">
                            <a href="#"><?= $cartItem[1] ?></a>
                            <div class="product-info">
                                <div>Display: <span class="value">5 inch</span></div>
                                <div>RAM: <span class="value">4GB</span></div>
                                <div>Memory: <span class="value">32GB</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 quantity">
                        <label for="quantity">Anzahl:</label>
                        <input id="quantity" type="number" value="<?= $cartItem[6] ?>" class="form-control quantity-input">
                    </div>
                    <div class="col-md-3 price">
                        <span><?php
                                    $cost = number_format($cartItem[3], 2);
                                    echo "$cost";


                                    ?>€</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>