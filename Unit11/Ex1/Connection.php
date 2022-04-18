<?php
    require_once('config.php');
    class Connection{
        var $conn;

        function __construct()
        {
            $this -> conn = new mysqli(HOST,USER,PASSWORD,DB_NAME);
            $this -> conn -> set_charset("utf8");
            if($this -> conn -> connect_error){
                die("Connection failed: " . $this -> conn -> connect_error);
            }
        }
    }
    $obj = new Connection();
    $sql = "SELECT * FROM categories";
    $results = $obj -> conn -> query($sql);
    $categories = array();

    while($row = $results -> fetch_assoc()){
        $categories[] = $row;
    }
    echo '<pre>';
    print_r($categories);
    echo '</pre>';
?>