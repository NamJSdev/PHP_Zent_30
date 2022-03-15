<?php
    echo "Các số nguyên tố nhỏ hơn 100 là: <br>";
    for($i = 2; $i<=100; $i++){
        $count = 0;
        for($j = 2; $j < $i; $j++){
            if($i % $j == 0){
                $count++;                 
            }
        }
        if($count == 0)
            echo $i."<br>";
    }
?>