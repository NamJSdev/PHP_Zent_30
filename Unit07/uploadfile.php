<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload Avatar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3>Upload ảnh đại diện</h3>
        <form action="upload.php" method="POST" role="form" enctype="multipart/form-data">
            <p>Chọn ảnh đại diện:</p>
            <input type="file" name="avatar[]" multiple="multiple"><br>
            <button type="submit" value="submit" class="btn btn-primary" name="btn_login">Upload Ảnh</button>
        </form>
        <br>
        <?php if(isset($_SESSION['upload_status']) && $_SESSION['upload_status'][0] == false){?>
            <div class="alert alert-danger" role="alert">
                <?php 
                    foreach($_SESSION['upload_status'][1] as $error){
                        echo "<p> - ".$error."</p>";
                    }
                    unset($_SESSION['upload_status']);
                ?>
            </div>
            <?php } ?>
            <?php if(isset($_SESSION['upload_status']) && $_SESSION['upload_status'][0] == true){ ?>
                <div class="alert alert-danger" role="alert">
                    Đường dẫn file sau khi upload: <?= $_SESSION['upload_status'][1]; ?>
                </div>
            <?php
                unset($_SESSION['upload_status']);
                } 
            ?>
    </div>
</body>
</html>