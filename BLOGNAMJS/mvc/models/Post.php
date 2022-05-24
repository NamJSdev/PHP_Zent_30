<?php
    require_once('models/BaseModel.php');
    class Post extends BaseModel{
        protected $table = "posts";
        
        function getPostById($postId){
            $query = "SELECT * FROM posts WHERE id = " . $postId;
            $result = $this->conn->query($query);
            return $result->fetch_assoc();
        }
    }
?>