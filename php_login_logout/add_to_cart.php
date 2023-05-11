<?php

session_start();

if (empty($_SESSION['cart'])){
$_SESSION['cart'] = array();}

array_push($_SESSION['cart'], $_GET['id']);

?>

<html>
    <body>
        <p> Product was successfully added to the cart.
            <a href="shopping_cart.php"> View cart </a>
        </p>
    </body>
</html>