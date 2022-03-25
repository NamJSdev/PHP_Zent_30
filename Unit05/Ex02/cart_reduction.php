<?php
    session_start();
    $key = $_GET['id'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    if($_SESSION['cart'][$key]['product_quantity'] >=2){
        $_SESSION['cart'][$key]['product_quantity']--;
    }else{
        $_SESSION['cart'][$key]['product_quantity']=1;
    }
    $_SESSION['cart'][$key]['time'] = date('d/m/y h:i:s');
    header('Location: cart_product.php');
?>