<?php
    $input = array(3,5,1,45,7,8,54,80);
    $max = $input[0];
    echo "Mảng vừa nhập vào là: ";
    echo implode(" , ",$input);

    for($i = 1; $i < count($input); $i++){
        if($input[$i] >= $max){
            $max = $input[$i];
        }else{
            $max = $max;
        }
    }
    echo "<br>Giá trị lớn nhất trong mảng trên là: ".$max;
?>  