<?php
    require('models/Category.php');
    class CategoryController{
        public function index(){
            $model = new Category();
            $categories = $model->get();
            require_once ('views/categories/list.php');
        }
        public function edit(){
            echo 'edit category controller index';
        }
        public function delete(){
            echo 'delete category controller index';
        }
    }
?>