<?php
    include_once('layouts/layoutTop.php');
    include_once('layouts/header.php');
    include_once('layouts/sidebar.php');
?>
<?php
    require_once('connection.php');
    $data = $_POST;
    
    $id = (isset($_GET['id'])?$_GET['id']:0);
    $sql = "SELECT * FROM posts WHERE id = ".$id;

    $posts = $conn -> query($sql) -> fetch_assoc();
?>
<div class="container">
<h3 align="center">Add New Category</h3>
<hr>
    <form action="post_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $posts['id'] ?>">
        </div>
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" id="" placeholder="" name="title" value="<?= $posts['title'] ?>">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" id="" placeholder="" name="description" value="<?= $posts['short_content'] ?>">
        </div><br>
        <div class="form-group">
            <label for="">Category_id</label>
            <input type="text" class="form-control" id="" placeholder="" name="category_id" value="<?= $posts['category_id'] ?>">
        </div><br>
        <div class="form-group">
            <label for="">Content</label>
            <input type="text" class="form-control" id="" placeholder="" name="content" value="<?= $posts['content'] ?>">
        </div><br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?php
    require_once('layouts/footer.php');
    include_once('layouts/layoutBottom.php');
?>