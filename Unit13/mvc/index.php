<?php
    $mod = $_GET['mod'];
    $action = $_GET['action'];

    $nameController = ucfirst($mod) . 'Controller';

    $path = "controllers/" . $nameController . ".php";
    require_once $path;
    $controller = new $nameController();
    $controller->$action();
?>