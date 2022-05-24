<?php
    require_once('models/Query.php');
    class User extends Query{
        protected $table = "users";

        public function checkLogin($email,$password){
            $query = "SELECT * FROM users WHERE email="."'".$email."'"." AND password="."'".$password."'";
            $result = $this->conn->query($query);

            $user = $result->fetch_assoc();

            return $user;
        }public function addUser($name,$email,$password){
            $query = "INSERT INTO users(name,email,password) VALUES('".$name."','".$email."','".$password."')";
            $result = $this->conn->query($query);
        }
    }
?>