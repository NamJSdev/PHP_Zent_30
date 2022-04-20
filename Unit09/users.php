<?php
    require_once('./query_helper.php');
    require('./User.php');
    $user = new User();
    $users = $user->get();

    echo '<pre>';
    print_r($users);
    echo '</pre>';

?>