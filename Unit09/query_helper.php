<?php
    function select($tableName){
        $sql = "SELECT * FROM " . $tableName;
        $conn = connect();
        $results = $conn -> query($sql);
    
        $data = array();
    
        while($row = $results -> fetch_assoc()){
            $data[] = $row;
        }
        return $data;
    }
    function connect(){
        $severname = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "blogs";

        $conn = new mysqli($severname,$username,$password,$dbname);
        return $conn;
    }

    function insert($tableName,$data){
        $query = "INSERT INTO $tableName";
        $string_1 = "";
        $string_2 = "";
        $i = 0;
        foreach ($data as $column => $value){
            $i++;
            $string_1 .= $column;
            if ($i != count($data)){ // Nếu không phải là cột cuối cùng thì mới thêm dấu ,
                $string_1 .= ',';
            }
            $string_2 .= "'" . $value . "'";
            if ($i != count($data)){ // Nếu không phải là giá trị cuối cùng thì mới thêm dấu ,
                $string_2 .= ',';
            }
        }
        $string = ' (' . $string_1 . ')' . ' VALUES ' . '(' . $string_2 . ')';
        $query = $query . $string;
        echo $query;
        die();
    }
?>