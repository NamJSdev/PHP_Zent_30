<?php
    include_once('views/partials/layoutTop.php');
    include_once('views/partials/header.php');
    include_once('views/partials/sidebar.php');
?>
<div class="container">
    <h3 class="text-center">--- POSTS ---</h3>
    <a href="post_add.php" class="btn btn-primary">Add New POST</a>
    <table class="table">
        <thead>
            <th>Title</th>
            <th>Description</th>
            <th>Thumbnail</th>
            <th>Category_id</th>
            <th>Content</th>
            <th>Created_at</th>
            <th>Action</th>
            </thead>
    <?php foreach($posts as $post){ ?>
        <tr>
            <td><?= $post['title'] ?></td>
            <td><?= $post['short_content'] ?></td>
            <td>
                <img class="img-fluid" src="<?= $post['thumbnail'] ?>" width="100px">
            </td>
            <td><?= $post['category_id'] ?></td>
            <td><?= $post['content'] ?></td>
            <td><?= $post['created_at'] ?></td>
            <td>
                <a href="post_edit.php?id=<?= $post['id'] ?>" class="btn btn-success">Edit</a>
                <a href="post_delete.php?id=<?= $post['id'] ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php } ?>
    </table>
</div>
<?php
    include_once('views/partials/footer.php');

    include_once('views/partials/layoutBottom.php');
?>