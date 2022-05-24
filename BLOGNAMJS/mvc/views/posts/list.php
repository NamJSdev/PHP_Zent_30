<?php
    include_once('views/partials/layoutTop.php');
    include_once('views/partials/header.php');
    include_once('views/partials/sidebar.php');
?>
<div class="container">
    <h3 class="text-center">--- POSTS ---</h3>
    <a href="index.php?mod=post&action=create" class="btn btn-primary">Add New POST</a>
    <table class="table">
        <thead>
            <th>Title</th>
            <th>Description</th>
            <th>Thumbnail</th>
            <th>Category</th>
            <th>Author</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Action</th>
            </thead>
    <?php foreach($posts as $post){ ?>
        <tr>
            <td><?= $post['title'] ?></td>
            <td><?= $post['short_content'] ?></td>
            <td>
                <img class="img-fluid" src="<?= $post['avatar'] ?>" width="100px">
            </td>
            <td><?= $post['category_name'] ?></td>
            <td><?= $post['user_name'] ?></td>
            <td><?= $post['created_at'] ?></td>
            <td><?= $post['updated_at'] ?></td>
            <td>
                <a href="index.php?mod=post&action=edit&id=<?= $post['id'] ?>" class="btn btn-success">Edit</a>
                <a href="index.php?mod=post&action=delete&id=<?= $post['id'] ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php } ?>
    </table>
</div>
<?php
    include_once('views/partials/footer.php');

    include_once('views/partials/layoutBottom.php');
?>