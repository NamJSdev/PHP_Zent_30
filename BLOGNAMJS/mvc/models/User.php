<?php
    require_once('models/BaseModel.php');
    class User extends BaseModel{
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
        function getUserById($userId){
            $query = "SELECT * FROM users WHERE id = " . $userId;
            $result = $this->conn->query($query);
            return $result->fetch_assoc();
        }
    }
?>