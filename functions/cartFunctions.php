 <?php

     function addProductToCart($route, $userid) {
         $routeParts = explode('/', $route);
         $productId = (int) $routeParts[3];
         $sql = "INSERT INTO cart SET userid = $userid, productid = $productId, amount = 1, created = time(now())";
         $result = db_query($sql);
         return $result;
     }

     function countCartItems($userid) {
         $sql = "SELECT COUNT(id) FROM cart WHERE userid =" . $userid;
         $cartResult = db_query($sql);

         $cartItems = mysqli_fetch_column($cartResult);

         return $cartItems;
     }

     function getCartItemsForUser(int $userid):array {

         $sql = "SELECT productid, titel, beschreibung, preis, picture FROM cart JOIN produkte ON(cart.productid = produkte.artnr) WHERE userid = ".$userid;
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