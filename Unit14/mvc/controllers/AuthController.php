<?php
    session_start();
    require('models/User.php');
    class AuthController{
        public function login(){
            require('views/auth/login.php');
        }
        public function handleLogin(){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $userModel = new User();
            $user = $userModel->checkLogin($email,$password);
            if(empty($user)){
                echo 'Login failed';
                header("Location: index.php?mod=auth&action=login");
            }else{
                echo 'Login success';
                $_SESSION['auth'] = [
                    'id' => $user['id'],
                    'name' => $user['name']
                ];
                header("Location: index.php?mod=category&action=index");
            }
            var_dump($user);
        }
    }
?>