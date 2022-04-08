<?php
    require_once('connection.php');

    $sql = "SELECT * FROM categories";
    $results = $conn -> query($sql);

    $categories = array();

    while($row = $results -> fetch_assoc()){
        $categories[] = $row;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CATEGORIES</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- CATEGORIES ---</h3>
        <a href="#" class="btn btn-primary">Add New Category</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Description</th>
                <th>Action</th>
                </thead>
        <?php foreach($categories as $cate){ ?>
            <tr>
                <td><?= $cate['id'] ?></td>
                <td><?= $cate['cate_name'] ?></td>
                <td>
                    <img class="img-fluid" src="<?= $cate['avatar'] ?>" width="100px">
                </td>
                <td><?= $cate['description'] ?></td>
                <td>
                    <a href="categories_detail.php?id=<?= $cate['id'] ?>" class="btn btn-primary">Detail</a>
                    <a href="#" class="btn btn-success">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php } ?>
        </table>
    </div>
</body>
</html>