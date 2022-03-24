<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
    <div class="main">
        <form action="./process.php" method="POST" role="form">
            <h2>Login</h2>
            <div class="form_group">
                <label for="">Tên đăng nhập</label>
                <input type="text" name="user" id="">
            </div>
            <div class="form_group">
                <label for="">Mật khẩu</label>
                <input type="password" name="pass" id="">
            </div>
            <button type="submit" name="btn_login">Gửi</button>
        </form>
    </div>
</body>
</html>