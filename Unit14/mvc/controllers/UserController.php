<?php
    require('models/User.php');
    class UserController{
        public function index(){
            $model = new User();
            $users = $model->get();
            require_once ('views/users/list.php');
        }
        public function edit(){
            echo 'edit user controller index';
        }
        public function delete(){
            echo 'delete user controller index';
        }
    }
?>