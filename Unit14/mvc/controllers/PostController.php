<?php
    require('models/Post.php');
    class PostController{
        public function index(){
            $model = new Post();
            $posts = $model->get();
            require_once ('views/posts/list.php');
        }
        public function edit(){
            echo 'edit post controller index';
        }
        public function delete(){
            echo 'delete post controller index';
        }
    }
?>