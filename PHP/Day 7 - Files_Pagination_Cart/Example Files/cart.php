<?php

/*
    CART

    Be able to save 'products'/'items' and remember them in a cart.

*/

session_start();

$cart = array(
    0 => array(
        'name' => 'Mobydick',
        'price' => 10
    ),
    1 => array(
        'name' => 'Jaws',
        'price' => 8
    )
);

$_SESSION['cart'] = $cart;

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
