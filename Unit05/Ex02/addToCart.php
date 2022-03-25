<?php
    include_once('cart_data.php');
    session_start();
    $_SESSION['products'] = $products_arr;
    if(isset($_SESSION['products'])){
        $products = $_SESSION['products'];
    }

    $key = $_GET['id'];
    $product = $products[$key];
    $product['product_stock'] = 1;
    $_SESSION['cart'][] = $product;

    header('Location: cart_product.php');
?>