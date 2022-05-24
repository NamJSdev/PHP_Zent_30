<?php
    class BaseModel
    {
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
        function select($columns ="*"){
            $sql = "SELECT * FROM " . $this->table;
            $results = $this->conn->query($sql);
            $data = array();
        
            while($row = $results->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
        public function insert($data){
            $query = "INSERT INTO $this->table";
            $string_1 = '';
            $string_2 = '';
    
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
           
    
            $status = $this->conn->query($query);
    
            return $status;
        }
        public function update($data, $where = [])
        {
            $query = "UPDATE $this->table SET ";
            $string1 = '';
            $j = 0;
            foreach ($data as $key => $value)
            {
                $j++;
                $string1 .= $key . '=' . "'" . $value . "'";
                if ($j != count($data)){
                    $string1 .= ", ";
                }
            }
            $query .= $string1;

            if (!empty($where)){
                $query .= " WHERE ";
                $i = 0;
                $string2 = '';
                foreach ($where as $column => $value) {
                    $i++;
                    $string2 .= "$column=" . "'" . $value . "'";

                    if ($i != count($where)){ // Nếu không phải là giá trị cuối cùng thì mới thêm dấu ,
                        $string2 .= " AND ";
                    }
                }

                $query .= $string2;
            }
            return $this->conn->query($query);
        }
        public function delete($id)
        {
            $query = "DELETE FROM " . $this->table. " WHERE id = " . $id;
            return $this->conn->query($query);
        }
    }
?>