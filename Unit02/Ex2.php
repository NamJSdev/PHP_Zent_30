<?php
    $a = 2;
    $b = 10;
    $c = 3; 
    $delta = $b*$b - (4*$a*$c);
    echo "Chuong trinh giai phuong trinh ".$a."x2 + ".$b."x + ".$c." = 0 <br>";
    if($a != 0){
        if($delta>0){
            echo "Phuong trinh co hai nghiem phan biet <br>";
            $x1 = (-$b + sqrt($delta))/(2*$a);
            echo "x1 = ".$x1."<br>";
            $x2 = (-$b - sqrt($delta))/(2*$a);
            echo "x2 = ".$x2."<br>";
        }
        elseif($delta == 0){
            echo "Phuong trinh co nghiem kep <br>";
            $x  = (-$b)/(2*$a);
            echo "x1 = x2 = ".$x."<br>";
        }
        else
            echo "Phuong trinh vo nghiem";
    }
    else
        echo "<br> a = 0 khong thoa man dieu kien phuong trinh";
?>