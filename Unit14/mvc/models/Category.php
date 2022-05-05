<?php
    require_once('models/Query.php');
    class Category extends Query{
        protected $table = "categories";
        public function create($data){
            $query = "INSERT INTO categories(cate_name,slug,description,created_at,avatar) VALUES('".$data['name']."','".$data['slug']."','".$data['description']."','".$data['created_at']."','".$data['avatar']."');";
            return $this->conn->query($query);
        }
        function getCatById($categoryId){
            $query = "SELECT * FROM categories WHERE id = " . $categoryId;
            $result = $this->conn->query($query);
            return $result->fetch_assoc();
        }
        public function updateCate($data){
            $query = "UPDATE categories SET cate_name = '".$data['name']."',description = '".$data['description']."' WHERE id =".$data['id'];
            return $this->conn->query($query);
        }
        function delete($categoryId){
            $query = "DELETE FROM categories WHERE id = " . $categoryId;
            return $this->conn->query($query);
        }
    }
?>