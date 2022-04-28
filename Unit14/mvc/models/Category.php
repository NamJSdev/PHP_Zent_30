<?php
    require_once('models/Query.php');
    class Category extends Query{
        protected $table = "categories";
        public function create($data){
            $query = "INSERT INTO categories(cate_name,slug,description,created_at,avatar) VALUES('".$data['name']."','".$data['slug']."','".$data['description']."','".$data['created_at']."','".$data['avatar']."');";
            return $this->conn->query($query);
        }
    }
?>