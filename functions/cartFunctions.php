 <?php

     function addProductToCart($route, $userid) {
         $routeParts = explode('/', $route);
         $productId = (int) $routeParts[3];
         $sql = "INSERT INTO cart SET userid = $userid, productid = $productId, amount = 1, created = time(now())";
         $result = db_query($sql);
         return $result;
     }

    function getProdcutIDThatWantsToBeAddedToCart($route)
    {
        $routeParts = explode('/', $route);
        $productId = (int) $routeParts[3];
        return $productId;
     }

     function countCartItems() {
         $userid = getCurrentUserId();
        $sql = "SELECT sum(amount) from cart where userid = $userid;";
         
         $cartResult = db_query($sql);

         $cartItems = mysqli_fetch_column($cartResult);

         return $cartItems;
     }

     function getCartItemsForUser():array {
        $userid = getCurrentUserId();
        $sql = "SELECT productid, titel, beschreibung, preis, picture, id, amount FROM cart JOIN produkte ON(cart.productid = produkte.artnr) WHERE userid = " . $userid;
         $results = db_query($sql);
         if ($results === false) {
             return[];
         }
         $found = [];
         while ($row = mysqli_fetch_row($results)) {
             $found[] = $row;
         }
         return $found;
     }

     function bindCartItemsToUser(int $sourceId, int $targetId) {
         $sql = "UPDATE cart SET userid = $targetId WHERE userid = $sourceId";
         db_query($sql);

     }

    function getCartPrice()
    {
        $userid = getCurrentUserId();
        $sql = "SELECT sum(produkte.preis*cart.amount) as gesamtpreis FROM cart, produkte WHERE productid = artnr AND userid = $userid;";
        $result = db_query($sql);

        while ($row = mysqli_fetch_row($result)) {
            $sum = $row[0];
        }
        if ($sum == 0) {
            return "0";
        } else {
            $erg = number_format($sum, 2);
            return $erg;
        }
    }

    function updateAmount($productid, $aum)
    {
        $userid = getCurrentUserId();
        $anzahl = getProduct($productid) + $aum;
        $sql = "UPDATE cart SET amount = $anzahl WHERE productid = $productid AND userid = $userid;";
        db_query($sql);
    }

   function countCartItemsWithoutAmount() {
    $userid = getCurrentUserId();
    $sql = "SELECT COUNT(amount) from cart where userid = $userid;";
     
     $cartResult = db_query($sql);

     $cartItems = mysqli_fetch_column($cartResult);

     return $cartItems;
   }