<?php
    include_once('layouts/layoutTop.php');
    include_once('layouts/header.php');
    include_once('layouts/sidebar.php');
?>
<?php
    require_once('./query_helper.php');
    require('./Category.php');
    $category = new Category();
    $categories = $category->get();
    // var_dump($categories);
    // die();
    // $categories = select("categories");
    // require_once('connection.php');

    // $sql = "SELECT * FROM categories";
    // $results = $conn -> query($sql);

    // $categories = array();

    // while($row = $results -> fetch_assoc()){
    //     $categories[] = $row;
    // }
?>
<div class="container">
    <h3 class="text-center">--- CATEGORIES ---</h3>
    <a href="category_add.php" class="btn btn-primary">Add New Category</a>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Thumbnail</th>
            <th>Description</th>
            <th>Action</th>
            </thead>
    <?php foreach($categories as $index => $cate){ ?>
        <tr>
            <td><?= $index+1 ?></td>
            <td><?= $cate['cate_name'] ?></td>
            <td>
                <img class="img-fluid" src="<?= $cate['avatar'] ?>" width="100px">
            </td>
            <td><?= $cate['description'] ?></td>
            <td>
                <a href="category_edit.php?id=<?= $cate['id'] ?>" class="btn btn-success">Edit</a>
                <a href="category_delete.php?id=<?= $cate['id'] ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php } ?>
    </table>
</div>
<?php
    require_once('layouts/footer.php');
    include_once('layouts/layoutBottom.php');
?>