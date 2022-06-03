<?php
    include_once('views/partials/layoutTop.php');
    include_once('views/partials/header.php');
    include_once('views/partials/sidebar.php');
?>
<div class="container">
<h3 align="center">Edit User</h3>
<hr>
    <form action="index.php?mod=user&action=update" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $users['id'] ?>">
        </div>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $users['name'] ?>">
        </div>
        <div class="form-group">
            <label for="">Phone Number</label>
            <input type="text" class="form-control" id="" placeholder="" name="mobile" value="<?= $users['mobile'] ?>">
        </div>
        <div class="form-group">
            <label for="">Info</label>
            <input type="text" class="form-control" id="" placeholder="" name="info" value="<?= $users['info'] ?>">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" id="" placeholder="" name="email" value="<?= $users['email'] ?>">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="text" class="form-control" id="" placeholder="" name="password" value="<?= $users['password'] ?>">
        </div>
        <img class="img-fluid" src="<?= $users['avatar'] ?>" width="100px">
        <div class="form-group">
            <label for="">Avatar Upload</label><br>
            <input type="file" name="avatar" multiple="multiple">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?php
    include_once('views/partials/footer.php');

    include_once('views/partials/layoutBottom.php');
?>