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
            <th class="text-center">Title</th>
            <th class="text-center">Description</th>
            <th class="text-center">Thumbnail</th>
            <th class="text-center">Category</th>
            <th class="text-center">Author</th>
            <th class="text-center">Amount CMT</th>
            <th class="text-center">Created</th>
            <th class="text-center">Updated</th>
            <th class="text-center">Action</th>
        </thead>
    <?php foreach($posts as $post){ ?>
        <tr>
            <td><?= $post['title'] ?></td>
            <td><?= $post['short_content'] ?></td>
            <td>
                <img class="img-fluid" src="<?= $post['avatar'] ?>" width="100px">
            </td>
            <td class="text-center"><?= $post['category_name'] ?></td>
            <td class="text-center"><?= $post['user_name'] ?></td>
            <td class="text-center"><?= $post['cmt_amount']?></td>
            <td class="text-center"><?= $post['created_at'] ?></td>
            <td class="text-center"><?= $post['updated_at'] ?></td>
            <td class="text-center">
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