<?php
    include_once('views/partials/layoutTop.php');
    include_once('views/partials/header.php');
    include_once('views/partials/sidebar.php');
?>
<div class="container">
<h3 align="center">Zent - Education And Technology Group</h3>
<h3 align="center">Add New Category</h3>
<hr>
    <form action="index.php?mod=category&action=update" method="POST" role="form" enctype="multipart/form-data">
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
    include_once('views/partials/footer.php');

    include_once('views/partials/layoutBottom.php');
?>