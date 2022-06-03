<?php
    include_once('views/partials/layoutTop.php');
    include_once('views/partials/header.php');
    include_once('views/partials/sidebar.php');
?>
<div class="container">
    <h3 class="text-center">--- Comments ---</h3>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Viewer Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Created Time</th>
            <th>Action</th>
            </thead>
    <?php foreach($comments as $key => $cmt){ ?>
        <tr>
            <td><?= $key+1 ?></td>
            <td><?= $cmt['name'] ?></td>
            <td><?= $cmt['email'] ?></td>
            <td><?=$cmt['message'];?></td>
            <td><?= $cmt['created_at'] ?></td>
            <td>
                <a href="index.php?mod=comment&action=edit&id=<?= $cmt['id'] ?>" class="btn btn-success">Edit</a>
                <a href="index.php?mod=comment&action=delete&id=<?= $cmt['id'] ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php } ?>
    </table>
</div>
<?php
    include_once('views/partials/footer.php');

    include_once('views/partials/layoutBottom.php');
?>