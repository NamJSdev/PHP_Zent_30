<?php
    include_once('views/partials/layoutTop.php');
    include_once('views/partials/header.php');
    include_once('views/partials/sidebar.php');
?>
<div class="container">
    <h3 class="text-center">--- CATEGORIES ---</h3>
    <a href="index.php?mod=category&action=create" class="btn btn-primary">Add New Category</a>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Thumbnail</th>
            <th>slug</th>
            <th>Description</th>
            <th>Created at</th>
            <th>Action</th>
            </thead>
    <?php foreach($categories as $key => $cate){ ?>
        <tr>
            <td><?= $key+1 ?></td>
            <td><?= $cate['cate_name'] ?></td>
            <td>
                <img class="img-fluid" src="<?= $cate['avatar'] ?>" width="100px">
            </td>
            <td><?= $cate['slug'] ?></td>
            <td><?= $cate['description'] ?></td>
            <td><?= $cate['created_at'] ?></td>
            <td>
                <a href="index.php?mod=category&action=edit&id=<?= $cate['id'] ?>" class="btn btn-success">Edit</a>
                <a href="index.php?mod=category&action=delete&id=<?= $cate['id'] ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php } ?>
    </table>
</div>
<?php
    include_once('views/partials/footer.php');

    include_once('views/partials/layoutBottom.php');
?>