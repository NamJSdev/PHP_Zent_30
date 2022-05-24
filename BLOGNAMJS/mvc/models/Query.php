<?php
    class Query{
        protected $conn;
        function __construct()
        {
            $severname = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "blogs";
            
            $this->conn = new mysqli($severname,$username,$password,$dbname);

            if($this->conn->connect_error){
                echo "failed";
                exit();
            }
        }
        
        public function get(){
            return $this->select($this->table);
        } 

        function select($tableName){
            $sql = "SELECT * FROM " . $tableName;
            $results = $this->conn->query($sql);
            $data = array();
        
            while($row = $results->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }
?>