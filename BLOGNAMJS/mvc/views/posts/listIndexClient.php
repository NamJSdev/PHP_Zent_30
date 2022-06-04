<?php
    include_once('views/partialsPost/header.php');
?>
<section class="site-section pt-5 pb-5">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="owl-carousel owl-theme home-slider">
                <?php foreach($postsThirt as $key => $post){ ?>
                    <div>
                        <a href="index.php?mod=postClient&action=detail&id=<?= $post['id'] ?>" class="a-block d-flex align-items-center height-lg"
                            style="background-image: url('<?= $post['avatar'] ?>'); ">
                            <div class="text half-to-full">
                            <span class="category mb-5"><?= $post['category_name'] ?></span>
                            <div class="post-meta">

                                <span class="author mr-2"><img src="<?= $users[0]['avatar']?>" alt="<?= $users[0]['name']?>"> <?= $post['user_name'] ?></span>&bullet;
                                <span class="mr-2"><?= $post['created_at'] ?></span> &bullet;
                                <span class="ml-2"><span class="fa fa-comments"></span> <?= $post['cmt_amount'] ?></span>

                            </div>
                            <h3><?= $post['title'] ?></h3>
                            <p><?= $post['short_content'] ?> !</p>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    </div>


</section>
<!-- END section -->

<section class="site-section py-sm">
    <div class="container">
    <div class="row">
        <div class="col-md-6">
        <h2 class="mb-4">Bài Viết Mới Nhất</h2>
        </div>
    </div>
    <div class="row blog-entries">
        <div class="col-md-12 col-lg-8 main-content">
        <div class="row">
        <?php foreach($posts as $key => $post){ ?>
            <div class="col-md-6">
            <a href="index.php?mod=postClient&action=detail&id=<?= $post['id'] ?>" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <img height="200px" width="auto" src="<?= $post['avatar'] ?>" alt="Image placeholder">
                <div class="blog-content-body">
                <div class="post-meta">
                    <span class="author mr-2"><img src="<?= $users[0]['avatar']?>" alt="<?= $post['user_name'] ?>"> <?= $post['user_name'] ?></span>&bullet;
                    <span class="mr-2"><?= $post['created_at'] ?> </span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> <?= $post['cmt_amount'] ?></span>
                </div>
                <h2><?= $post['short_content'] ?></h2>
                </div>
            </a>
            </div>
        <?php } ?>
        </div>

        <div class="row mt-5">
            <div class="col-md-12 text-center">
            <nav aria-label="Page navigation" class="text-center">
                <ul class="pagination">
                <?php if($totalPage > 1){ ?>

                    <li class="page-item">
                        <?php if($page > 1){ ?>
                            <a class="page-link" href="index.php?mod=postClient&action=index&page=<?=$page - 1?>">&lt;</a>
                        <?php } ?>
                    </li>
	                <?php for($itemPage = 1; $itemPage <= $totalPage; $itemPage ++){
                        if($page == $itemPage){
                            $active = "active";
                        }else{
                            $active = "";
                        }
		                if($totalPage < 5 || $itemPage == 1 || $itemPage == $totalPage || $itemPage==$page || $itemPage==$page-1 || $itemPage == $page+1){ ?>
                            <li class="page-item <?=$active?>"><a class="page-link" href="index.php?mod=postClient&action=index&page=<?=$itemPage?>"><?= $itemPage ?></a></li>
		                <?php }else{
                                echo '.';
                            }
                        } ?>
                    <li class="page-item">
                        <?php if($page < $totalPage){ ?>
                            <a class="page-link" href="index.php?mod=postClient&action=index&page=<?=$page + 1?>">&gt;</a>
                        <?php } ?>
                    </li>
                <?php } ?>
                </ul>
            </nav>
            </div>
        </div>
        </div>
        <!-- END main-content -->

        <?php
            include_once('views/partialsPost/layoutRight.php');
        ?>

    </div>
    </div>
</section>
<?php
    include_once('views/partialsPost/footer.php');
?>