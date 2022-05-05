<?php
    require_once('models/Query.php');
    class Post extends Query{
        protected $table = "posts";
        public function create($data){
            $query = "INSERT INTO posts(title,short_content,thumbnail) VALUES('".$data['name']."','".$data['slug']."','".$data['description']."','".$data['created_at']."','".$data['avatar']."');";
            return $this->conn->query($query);
        }
        function getPostById($postId){
            $query = "SELECT * FROM posts WHERE id = " . $postId;
            $result = $this->conn->query($query);
            return $result->fetch_assoc();
        }
        public function updatePost($data){
            $query = "UPDATE posts SET name = '".$data['title']."',description = '".$data['description']."' WHERE id =".$data['id'];
            return $this->conn->query($query);
        }
        function delete($postId){
            $query = "DELETE FROM posts WHERE id = " . $postId;
            return $this->conn->query($query);
        }
    }
?>