<?php
    include_once('views/partialsPost/header.php');
?>
    <section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries element-animate">

          <div class="col-md-12 col-lg-8 main-content">
            <!-- Content -->
            <?= $posts['content'] ?>
            <!-- END -->
            <!-- <div class="pt-5">
              <p>Categories:  <a href="#">Food</a>, <a href="#">Travel</a>  Tags: <a href="#">#manila</a>, <a href="#">#asia</a></p>
            </div> -->

            <!-- comments -->
            <div class="pt-5">
              <h3 class="mb-5">6 Comments</h3>
              <ul class="comment-list">
                <?php foreach($cmts as $cmt){ ?>
                <li class="comment">
                  <div class="vcard">
                    <img src="images/gauUser.png" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3><?= $cmt['name'] ?></h3>
                    <div class="meta"><?= $cmt['created_at'] ?></div>
                    <p><?= $cmt['message'] ?></p>
                    <!-- <p><a href="#" class="reply rounded">Reply</a></p> -->
                  </div>

                  <!-- <ul class="children">
                    <li class="comment">
                      <div class="vcard">
                        <img src="images/person_1.jpg" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>Jean Doe</h3>
                        <div class="meta">January 9, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply rounded">Reply</a></p>
                      </div>
                  </ul> -->
                </li>
                <?php } ?>
              </ul>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Để Lại Bình Luận</h3>
                <form action="index.php?mod=postClient&action=add_cmt" method="POST" class="p-5 bg-light">
                  <div class="form-group">
                    <input type="hidden" class="form-control" id="" placeholder="" name="post_id" value="<?= $posts['id'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                  
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn btn-primary">
                  </div>

                </form>
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

    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="mb-3 ">Related Post</h2>
          </div>
        </div>
        <div class="row">
        <?php foreach($postsThirt as $key => $post){ ?>
          <div class="col-md-6 col-lg-4">
            <a href="index.php?mod=postClient&action=detail&id=<?= $post['id'] ?>" class="a-block sm d-flex align-items-center height-md" style="background-image: url('<?= $post['avatar'] ?>'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category"><?= $post['category_name'] ?></span>
                  <span class="mr-2"><?= $post['created_at'] ?> </span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> <?= $post['cmt_amount'] ?></span>
                </div>
                <h3><?= $post['short_content'] ?></h3>
              </div>
            </a>
          </div>
          <?php } ?>
        </div>
      </div>


    </section>
    <!-- END section -->
<?php
    include_once('views/partialsPost/footer.php');
?>