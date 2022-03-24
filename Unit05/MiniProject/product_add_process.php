<?php
    session_start();
    $products = $_POST;
    $_SESSION['products'][] = $products;

    header('Location: product_list.php');
    ?>