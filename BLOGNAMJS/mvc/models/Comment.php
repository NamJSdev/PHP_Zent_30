<?php
    require_once('models/BaseModel.php');
    class Comment extends BaseModel{
        protected $table = "comments";

        function getCommentById($commentId){
            $query = "SELECT * FROM comments WHERE id = " . $commentId;
            $result = $this->conn->query($query);
            return $result->fetch_assoc();
        }
        function getCommentByIdPost($postId){
            $query = "SELECT * FROM comments WHERE post_id = " . $postId;
            $results = $this->conn->query($query);
            $data = array();
            while($row = $results->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }
?>