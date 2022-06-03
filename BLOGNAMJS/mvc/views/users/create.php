<?php
    include_once('views/partials/layoutTop.php');
    include_once('views/partials/header.php');
    include_once('views/partials/sidebar.php');
?>
<div class="container">
    <h3 align="center">Add New User</h3>
    <hr>
    <form action="index.php?mod=user&action=store" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" id="" placeholder="" name="name">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" id="" placeholder="" name="email">
        </div>
        <div class="form-group">
            <label for="">Info</label>
            <input type="text" class="form-control" id="" placeholder="" name="info">
        </div>
        <div class="form-group">
            <label for="">Phone Number</label>
            <input type="text" class="form-control" id="" placeholder="" name="mobile">
        </div><br>
        <div class="form-group">
            <label for="">Create Password</label>
            <input type="text" class="form-control" id="" placeholder="" name="password">
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