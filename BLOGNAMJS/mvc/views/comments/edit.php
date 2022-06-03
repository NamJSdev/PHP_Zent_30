<?php
    include_once('views/partials/layoutTop.php');
    include_once('views/partials/header.php');
    include_once('views/partials/sidebar.php');
?>
<div class="container">
<h3 align="center">Edit User</h3>
<hr>
    <form action="index.php?mod=comment&action=update" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $comments['id'] ?>">
        </div>
        <div class="form-group">
            <label for="">Viewer Name</label>
            <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $comments['name'] ?>">
        </div>
        <div class="form-group">
            <label for="">Message</label>
            <input type="text" class="form-control" id="" placeholder="" name="message" value="<?= $comments['message'] ?>">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?php
    include_once('views/partials/footer.php');

    include_once('views/partials/layoutBottom.php');
?>