<?php
    session_start();
    $user = $_POST;
    $_SESSION = $user;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin</title>
</head>
<body>
    <ul>
        <li>Họ và tên: <?= $_SESSION['user_name']?></li>
        <li>Giới tính: <?= $_SESSION['user_gender']?></li>
        <li>Ngày sinh: <?= $_SESSION['user_date']?></li>
        <li>Quê quán: <?= $_SESSION['user_town']?></li>
        <li>Ngoại ngữ: <?= $_SESSION['user_lang']?></li>
        <li>Thông tin thêm: <?= $_SESSION['user_extra']?></li>
    </ul>
</body>
</html>