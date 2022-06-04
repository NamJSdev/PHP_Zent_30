<div class="col-md-12 col-lg-4 sidebar">
<!-- END sidebar-box -->
<div class="sidebar-box">
    <div class="bio text-center">
    <img src="<?= $users[0]['avatar']?>" alt="Image Placeholder" class="img-fluid">
    <div class="bio-body">
        <h2>NamJS</h2>
        <p><?= $users[0]['info']?></p>
        <p><a href="#" class="btn btn-primary btn-sm rounded">Read my bio</a></p>
        <p class="social">
        <a href="#" class="p-2"><span class="fa fa-github"></span></a>
        <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
        <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
        <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
        </p>
    </div>
    </div>
</div>
<!-- END sidebar-box -->
<div class="sidebar-box">
    <h3 class="heading">Bài Viết Khác</h3>
    <div class="post-entry-sidebar">
    <ul>
    <?php foreach($postsRandom as $key => $post){ ?>
        <li>
        <a href="index.php?mod=postClient&action=detail&id=<?= $post['id'] ?>">
            <img src="<?= $post['avatar'] ?>" alt="Image placeholder" class="mr-4">
            <div class="text">
            <h4><?= $post['short_content'] ?></h4>
            <div class="post-meta">
                <span class="mr-2"><?= $post['created_at'] ?> </span>
            </div>
            </div>
        </a>
        </li>
    <?php } ?>
    </ul>
    </div>
</div>
<!-- END sidebar-box -->

<div class="sidebar-box">
    <h3 class="heading">Danh mục</h3>
    <ul class="categories">
        <?php foreach($categories as $cate){?>
        <li><a href="#"><?= $cate['cate_name'] ?> <span>(12)</span></a></li>
        <?php } ?>
    </ul>
</div>
<!-- END sidebar-box -->
</div>
<!-- END sidebar -->