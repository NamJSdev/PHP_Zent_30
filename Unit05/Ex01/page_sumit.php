<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="page_submit_show.php" method="POST" role="form">
            <br>
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" name="user_name">
            </div>
            <div class="form-group">
                <label for="">Giới tính</label>
                <input type="radio"  name="user_gender" value="Nam">Nam
                <input type="radio"  name="user_gender" value="Nữ">Nữ
                <input type="radio"  name="user_gender" value="Khác">Khác
            </div>
            <div class="form-group">
                <label for="">Ngày sinh</label>
                <input type="date" class="form-control" name="user_date">
            </div>
            <div class="form-group">
                <label for="">Quê quán</label>
                <input type="text" class="form-control" name="user_town" placeholder="Nhập quê quán">
            </div>
            <div class="form-group">
                <label for="">Ngoại ngữ</label>
                <input type="checkbox" name="user_lang" value="Tiếng Anh">Tiếng Anh
                <input type="checkbox" name="user_lang" value="Tiếng Nhật">Tiếng Nhật
                <input type="checkbox" name="user_lang" value="Tiếng Pháp">Tiếng Pháp
            </div>
            <div class="form-group">
                <label for="">Thông tin thêm</label>
                <textarea class="form-control" name="user_extra" id="" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">submit</button>
        </form>
    </div>
</body>
</html>