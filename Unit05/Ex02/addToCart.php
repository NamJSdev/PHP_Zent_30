<?php
    include_once('cart_data.php');
    session_start();
    $products = $products_arr;
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $key = $_GET['id'];
    $product = $products[$key];
    if(isset($_SESSION['cart'][$key])){
        $_SESSION['cart'][$key]['product_quantity'] +=1;
        $_SESSION['cart'][$key]['time'] =date('d/m/y h:i:s');
    }else{
        $product['product_quantity'] = 1;
        $product['time'] = date('d/m/y h:i:s');
        $_SESSION['cart'][$key] = $product;
    }

    header('Location: cart_product.php')
?>