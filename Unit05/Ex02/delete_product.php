<?php
    include_once('cart_data.php');
    session_start();
    $key = $_GET['id'];
    unset($_SESSION['cart'][$key]);
        
    header('Location: cart_product.php');

?>