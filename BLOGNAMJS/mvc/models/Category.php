<?php
    require_once('models/BaseModel.php');
    class Category extends BaseModel{
        protected $table = "categories";
   
        function getCatById($categoryId){
            $query = "SELECT * FROM categories WHERE id = " . $categoryId;
            $result = $this->conn->query($query);
            return $result->fetch_assoc();
        }
    }
?>