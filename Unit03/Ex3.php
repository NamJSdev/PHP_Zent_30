<?php
    function standardized($arr_name){
        $arr_new = strtolower($arr_name);
        $arr_new = ucwords($arr_new);
        $data = explode(" ",$arr_new);
        echo implode(" ",$data);
    }
    standardized('Nguyễn   hảI nAM');
?>