<?php
    include_once('views/partials/layoutTop.php');
    include_once('views/partials/header.php');
    include_once('views/partials/sidebar.php');
?>
<div class="container">
<h3 align="center">Add New Category</h3>
<hr>
    <form action="index.php?mod=post&action=update" method="POST" role="form" enctype="multipart/form-data">
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
    include_once('views/partials/footer.php');

    include_once('views/partials/layoutBottom.php');
?>