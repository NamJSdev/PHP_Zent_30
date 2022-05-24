<?php
    include_once('views/partials/layoutTop.php');
    include_once('views/partials/header.php');
    include_once('views/partials/sidebar.php');
?>
<div class="container">
    <h3 align="center">Add New Category</h3>
    <hr>
    <form action="index.php?mod=category&action=store" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" id="" placeholder="" name="cate_name">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" id="" placeholder="" name="description">
        </div><br>
        <div class="form-group">
            <label for="">Avatar Upload</label><br>
            <input type="file" name="avatar" multiple="multiple">
        </div><br>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
<?php
    include_once('views/partials/footer.php');

    include_once('views/partials/layoutBottom.php');
?>