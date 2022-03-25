<?php
    session_start();
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $key = $_GET['id'];
    $_SESSION['cart'][$key]['product_quantity'] += 1;
    $_SESSION['cart'][$key]['time'] = date('d/m/y h:i:s');
    header('Location: cart_product.php');
?>