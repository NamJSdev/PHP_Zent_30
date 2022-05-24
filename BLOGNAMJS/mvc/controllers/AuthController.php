<?php
    require('models/User.php');
    class AuthController{
        public function login(){
            require('views/auth/login.php');
        }
        public function register(){
            require('views/auth/register.php');
        }
        public function handleRegister(){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];
            $userModel = new User();
            if($password !=$password_confirm)
            {
                header("Location: index.php?mod=auth&action=register");

            }else{
                $user = $userModel->addUser($name,$email,$password);
                header("Location: index.php?mod=auth&action=login");
            }
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
            echo '<pre>';
            var_dump($user);
            echo '</pre>';
        }
        public function logout()
        {
            unset($_SESSION['auth']);
            header("Location: index.php?mod=auth&action=login");
        }
    }
?>