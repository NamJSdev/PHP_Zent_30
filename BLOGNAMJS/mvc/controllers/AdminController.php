<?php
    require('controllers/BaseController.php');
    class AdminController extends BaseController{
        function __construct()
        {
            if(!isset($_SESSION['auth']))
            {
                header("Location: index.php?mod=auth&action=login");
            }
        }
    }
?>