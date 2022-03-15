<?php
    $n = 1234;
    echo "Tong cac chu so cua so $n = ";
    $sum = 0;
    for(;$n !=0;){
        $separate = $n % 10;
        $sum += $separate;
        $n /= 10;
    }
    echo $sum;
?>