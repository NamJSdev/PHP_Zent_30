<?php
    include_once('layouts/layoutTop.php');
    include_once('layouts/header.php');
    include_once('layouts/sidebar.php');
?>
<div class="container">
    <h3 align="center">Add New Category</h3>
    <hr>
    <form action="category_add_process.php" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" id="" placeholder="" name="name">
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
    require_once('layouts/footer.php');
    include_once('layouts/layoutBottom.php');
?>