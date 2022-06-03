
<?php
    // require('models/User.php');
    // $model = new User();
    // $users = $model->select();
?>
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
    <li><a href="#">Food <span>(12)</span></a></li>
    <li><a href="#">Travel <span>(22)</span></a></li>
    <li><a href="#">Lifestyle <span>(37)</span></a></li>
    <li><a href="#">Business <span>(42)</span></a></li>
    <li><a href="#">Adventure <span>(14)</span></a></li>
    </ul>
</div>
<!-- END sidebar-box -->

<div class="sidebar-box">
    <h3 class="heading">Tags</h3>
    <ul class="tags">
    <li><a href="#">Travel</a></li>
    <li><a href="#">Adventure</a></li>
    <li><a href="#">Food</a></li>
    <li><a href="#">Lifestyle</a></li>
    <li><a href="#">Business</a></li>
    <li><a href="#">Freelancing</a></li>
    <li><a href="#">Travel</a></li>
    <li><a href="#">Adventure</a></li>
    <li><a href="#">Food</a></li>
    <li><a href="#">Lifestyle</a></li>
    <li><a href="#">Business</a></li>
    <li><a href="#">Freelancing</a></li>
    </ul>
</div>
</div>
<!-- END sidebar -->