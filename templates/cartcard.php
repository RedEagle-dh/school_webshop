<div class="product" id="products">
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

                        <input onchange="aendern(<?= $cartItem[0] ?>, <?= $anzahl ?>)" id="auswahl<?= $anzahl ?>" type="number" value="<?= $cartItem[6] ?>" class="form-control quantity-input artikelpr">
                    </div>
                    <script>
                        const artikelp = document.getElementsByClassName("artikelp");
                        const artikelpr = document.getElementsByClassName("artikelpr");
                        const artikelteile = document.getElementsByClassName("artikelpr");

                        function aendern(a, b) {

                            var anzahl = 'auswahl' + b;
                            var e = document.getElementById(anzahl).value;
                            var ajax = new XMLHttpRequest();

                            ajax.open("GET", "templates/ajax.php?amount=" + e + "&productid=" + a, true);
                            ajax.send();


                            let preis = 0;
                            for (let i = 0; i < artikelp.length; i++) {

                                preis = preis + parseFloat(artikelp[i].textContent.replace(',', "")) * parseFloat(artikelpr[i].value);
                            }
                            var endpreis = preis.toLocaleString("en-EN");

                            var gesamtteile = 0;
                            for (let i = 0; i < artikelteile.length; i++) {
                                gesamtteile = parseInt(artikelteile[i].value) + gesamtteile;
                            }


                            document.getElementById("artikelpreiss").textContent = endpreis.fixed(2).replace(/(<([^>]+)>)/gi, "") + "€";
                            document.getElementById("artikelteile").textContent = gesamtteile;
                            document.getElementById("warenkorbanzahl").textContent = "Warenkorb (" + gesamtteile + ")";
                            ajax.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                    if(this.response == "delete") {
                                        document.getElementById("products").remove();
                                        
                                    }
                                }
                            }
                        }
                    </script>
                    <div class="col-md-3 price">
                        <span class="artikelp"><?php
                                                $cost = number_format($cartItem[3], 2);
                                                echo "$cost";


                                                ?>€</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>