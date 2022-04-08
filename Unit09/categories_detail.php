<?php
    require_once('connection.php');

    $id = (isset($_GET['id'])?$_GET['id']:0);
    $sql = "SELECT * FROM categories WHERE id = ".$id;

    $category = $conn -> query($sql) -> fetch_assoc();

    echo '<pre>';
    print_r($category);
    echo '</pre>';
?>