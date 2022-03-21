<?php
    $input = array(1,5,6,3,2,8,6,4);
    $output = array();
    echo "Mảng ban đầu là : ". implode(" , ",$input)."<br>";
    for($i = count($input)-1; $i >=0; $i--){
        array_push($output,$input[$i]);
    }
    echo "Mảng đảo ngược : ". implode(" , ",$output);
?>