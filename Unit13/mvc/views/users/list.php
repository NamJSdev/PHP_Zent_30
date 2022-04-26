<?php
    include_once('views/partials/layoutTop.php');
    include_once('views/partials/header.php');
    include_once('views/partials/sidebar.php');
?>
<div class="container">
    <h3 class="text-center">--- CATEGORIES ---</h3>
    <a href="category_add.php" class="btn btn-primary">Add New Category</a>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Thumbnail</th>
            <th>Mail</th>
            <th>Action</th>
            </thead>
    <?php foreach($users as $key => $user){ ?>
        <tr>
            <td><?= $key+1 ?></td>
            <td><?= $user['email'] ?></td>
            <td>
                <img class="img-fluid" src="<?= $user['avatar'] ?>" width="100px">
            </td>
            <td>$user['name']</td>
            <td>
                <a href="category_edit.php?id=<?= $cate['id'] ?>" class="btn btn-success">Edit</a>
                <a href="category_delete.php?id=<?= $cate['id'] ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php } ?>
    </table>
</div>
<?php
    include_once('views/partials/footer.php');

    include_once('views/partials/layoutBottom.php');
?>