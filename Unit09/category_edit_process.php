<?php
    require_once('connection.php');
    $data = $_POST;
    
    $sql = "UPDATE categories SET cate_name = '".$data['name']."',description = '".$data['description']."' WHERE id =".$data['id'];

    $status = $conn -> query($sql);
    if($status == true){
        header("Location: index.php");
    }
    else{
        header("Location: category_edit.php?id=".$data['id']);
    }
?>