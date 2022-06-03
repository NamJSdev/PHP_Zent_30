<?php
    require('models/Category.php');
    $model = new Category();
    $categories = $model->select();
?>
<!doctype html>
<html lang="en">

<head>
  <title>NamJS Dev Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <!-- Theme Style -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="wrap">
  
    <header role="banner">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-9 social">
              <a href="index.php?mod=auth&action=login" target="__blank"><span class="fa fa-user" title="Admin"></span></a>
              <a href="https://www.facebook.com/profile.php?id=100017603470791" target="__blank"><span class="fa fa-facebook" title="FaceBook"></span></a>
              <a href="https://github.com/NamJSdev" target="__blank"><span class="fa fa-github" title="Github"></span></a>
              <a href="#" target="__blank"><span class="fa fa-youtube-play" title="YouTube"></span></a>
            </div>
            <div class="col-3 search-top">
              <!-- <a href="#"><span class="fa fa-search"></span></a> -->
              <!-- <form action="#" class="search-top-form">
                <span class="icon fa fa-search"></span>
                <input type="text" id="s" placeholder="Tìm kiếm ...">
              </form> -->
            </div>
          </div>
        </div>
      </div>

      <div class="container logo-wrap">
        <div class="row pt-5">
          <div class="col-12 text-center">
            <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button"
              aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
            <h1 class="site-logo"><a href="index.php?mod=postClient&action=index">NAM JS DEV</a></h1>
          </div>
        </div>
      </div>

      <nav class="navbar navbar-expand-md  navbar-light bg-light">
        <div class="container">


          <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.php?mod=postClient&action=index">Trang chủ</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="category.html" id="dropdown05" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Danh mục</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <?php foreach($categories as $cate){ ?>
                    <a class="dropdown-item" href="#"><?= $cate['cate_name']; ?></a>
                  <?php } ?>
                </div>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?mod=postClient&action=about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?mod=postClient&action=contact">Liên Hệ</a>
              </li>
            </ul>

          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->