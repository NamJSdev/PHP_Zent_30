<?php
    include_once('views/partials/layoutTop.php');
    include_once('views/partials/header.php');
    include_once('views/partials/sidebar.php');
?>
<div class="container">
<h3 align="center">Update POST</h3>
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
            <input type="text" class="form-control" id="" placeholder="" name="short_content" value="<?= $posts['short_content'] ?>">
        </div><br>
        <div class="form-group">
            <label for="">Category</label>
            <input type="text" class="form-control" id="" placeholder="" name="category_name" value="<?= $posts['category_name'] ?>">
        </div>
        <div class="form-group">
            <label for="">User</label>
            <input type="text" class="form-control" id="" placeholder="" name="user_name" value="<?= $posts['user_name'] ?>">
        </div><br>
        <div class="form-group">
            <label for="">Content</label>
            <textarea id="summernote" name="content"><?= $posts['content'] ?></textarea>
        </div>
        <img class="img-fluid" src="<?= $posts['avatar'] ?>" width="100px">
        <div class="form-group">
            <label for="">Avatar Upload</label><br>
            <input type="file" name="avatar" multiple="multiple">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
</div>
<?php
    include_once('views/partials/footer.php');

    include_once('views/partials/layoutBottom.php');
?>