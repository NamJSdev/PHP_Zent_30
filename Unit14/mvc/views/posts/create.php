<?php
    include_once('views/partials/layoutTop.php');
    include_once('views/partials/header.php');
    include_once('views/partials/sidebar.php');
?>
<div class="container">
    <h3 align="center">Add New Post</h3>
    <hr>
    <form action="index.php?mod=category&action=store" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" id="" placeholder="" name="title">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" id="" placeholder="" name="description">
        </div><br>
        <div class="form-group">
            <label for="">Category_id</label>
            <input type="text" class="form-control" id="" placeholder="" name="category_id">
        </div><br>
        <div class="form-group">
            <label for="">Content</label>
            <input type="text" class="form-control" id="" placeholder="" name="content">
        </div><br>
        <div class="form-group">
            <label for="">Thumbnail Upload</label><br>
            <input type="file" name="thumbnail" multiple="multiple">
        </div><br>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    <br>
        <?php if(isset($_SESSION['upload_status']) && $_SESSION['upload_status'][0] == false){?>
            <div class="alert alert-danger" role="alert">
                <?php 
                    foreach($_SESSION['upload_status'][1] as $error){
                        echo "<p> - ".$error."</p>";
                    }
                    unset($_SESSION['upload_status']);
                ?>
            </div>
        <?php } ?>
</div>
<?php
    include_once('views/partials/footer.php');

    include_once('views/partials/layoutBottom.php');
?>