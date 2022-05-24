<?php
    include_once('views/partials/layoutTop.php');
    include_once('views/partials/header.php');
    include_once('views/partials/sidebar.php');
?>
<div class="container">
    <h3 class="text-center">--- USERS ---</h3>
    <a href="index.php?mod=user&action=create" class="btn btn-primary">Add New User</a>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Avatar</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Mail</th>
            <th>Action</th>
            </thead>
    <?php foreach($users as $key => $user){ ?>
        <tr>
            <td><?= $key+1 ?></td>
            <td>
                <img class="img-fluid" src="<?= $user['avatar'] ?>" width="100px">
            </td>
            <td><?=$user['name'];?></td>
            <td><?=$user['mobile'];?></td>
            <td><?= $user['email'] ?></td>
            <td>
                <a href="index.php?mod=user&action=edit&id=<?= $user['id'] ?>" class="btn btn-success">Edit</a>
                <a href="index.php?mod=user&action=delete&id=<?= $user['id'] ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php } ?>
    </table>
</div>
<?php
    include_once('views/partials/footer.php');

    include_once('views/partials/layoutBottom.php');
?>