<?php
    include_once('views/partials/layoutTop.php');
    include_once('views/partials/header.php');
    include_once('views/partials/sidebar.php');
?>
<div class="container">
    <h3 align="center">Add New Post</h3>
    <hr>
    <form action="index.php?mod=post&action=store" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" id="" placeholder="" name="title">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" id="" placeholder="" name="short_content">
        </div><br>
        <div class="form-group">
            <label for="">Category</label>
            <!-- <input type="text" class="form-control" id="" placeholder="" name="category_id"> -->
            <select name="category_name" id="" class="form-control">
                <?php foreach($categories as $key => $cate){ ?>    
                    <option value="<?= $cate['cate_name']; ?>"><?= $cate['cate_name'];?></option>
                <?php }?> 
            </select>
        </div><br>
        <div class="form-group">
            <label for="">User</label>
            <!-- <input type="text" class="form-control" id="" placeholder="" name="category_id"> -->
            <select name="user_name" id="" class="form-control">
                <?php foreach($users as $key => $user){ ?>    
                    <option value="<?= $user['name']; ?>"><?= $user['name'];?></option>
                <?php }?> 
            </select>
        </div><br>
        <div class="form-group">
            <label for="">Content</label>
            <textarea id="summernote" class="form-control" name="content"></textarea>
        </div><br>
        <div class="form-group">
            <label for="">Thumbnail Upload</label><br>
            <input type="file" name="avatar" multiple="multiple">
        </div><br>
        <button type="submit" class="btn btn-primary">Create</button>
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