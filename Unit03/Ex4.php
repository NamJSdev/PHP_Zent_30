<?php
    function Palindrome($str){
        $data = strrev($str);

        if($str == $data){
            echo "Chuỗi : ".$str." là chuỗi Palindrome";
        }else{
            echo "Chuỗi : ".$str." không phải là chuỗi Palindrome";
        }
    }
    Palindrome('NamaN');
?>