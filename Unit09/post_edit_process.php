<?php
    require_once('connection.php');
    $data = $_POST;
    
    $sql = "UPDATE posts SET title = '".$data['title']."',short_content = '".$data['description']."',category_id = '".$data['category_id']."',content = '".$data['content']."' WHERE id =".$data['id'];

    $status = $conn -> query($sql);
    if($status == true){
        header("Location: posts.php");
    }
    else{
        header("Location: post_edit.php?id=".$data['id']);
    }
?>