<?php
    include_once('layouts/layoutTop.php');
    include_once('layouts/header.php');
    include_once('layouts/sidebar.php');
?>
<?php
    require_once('connection.php');
    $data = $_POST;
    
    $id = (isset($_GET['id'])?$_GET['id']:0);
    $sql = "SELECT * FROM categories WHERE id = ".$id;

    $category = $conn -> query($sql) -> fetch_assoc();
?>
<div class="container">
<h3 align="center">Zent - Education And Technology Group</h3>
<h3 align="center">Add New Category</h3>
<hr>
    <form action="category_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $category['id'] ?>">
        </div>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $category['cate_name'] ?>">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" id="" placeholder="" name="description" value="<?= $category['description'] ?>">
        </div><br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?php
    require_once('layouts/footer.php');
    include_once('layouts/layoutBottom.php');
?>