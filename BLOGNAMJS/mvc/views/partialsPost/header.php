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
  <style>
    .wrap {
      max-width: 100%;
    }
    .back-to-top {
      position: fixed;
      right: 50px;
      top: 87%;
      color: #fff;
      background-color: blue;
      width: 45px;
      height: 45px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22pt;
      border-radius: 50%;
      cursor: pointer;
      z-index: 20;
    }
    .back-to-top:hover {
      transition: background-color 0.3s;
      background-color: #14bdef;
      border: 1px solid;
      border-color: greenyellow;
    }
    #btnZaloChat {
        width: 45px;
        height: 45px;
        display: flex;
        background: #028fe3;
        border-radius: 50%;
        background: rgba(2, 143, 227, 1);
        box-shadow: 0 0 0 0 rgb(2 143 227);
        position: fixed;
        right: 50px;
        top: 75%;
        bottom: 50px;
        overflow: hidden;
        z-index: 200;
        transform: scale(1);
        animation: pulse-blue 2s infinite;
      }
      @media (max-width: 767px) {
        .back-to-top,#btnZaloChat{
          right: 30px;
        }
      }
      @keyframes pulse-blue {
        0% {
          transform: scale(0.95);
          box-shadow: 0 0 0 0 rgb(2 143 227 / 70%);
        }
        70% {
          transform: scale(1);
          box-shadow: 0 0 0 10px rgb(2 143 227 / 0%);
        }
        100% {
          transform: scale(0.95);
          box-shadow: 0 0 0 0 rgb(2 143 227 / 0%);
        }
    }
  </style>
</head>

<body>
  <div class="wrap">
  <!-- <i class="back-to-top d"></i> -->
  <span class=" back-to-top fa fa-angle-up"></span>
  <a href="https://zalo.me/84392559639" target="_blank" id="btnZaloChat" class="btn-zalo-chat"><img class="cpslazy loaded" data-src="https://cellphones.com.vn/media/icons/icon-zalo.png" data-ll-status="loaded" src="https://cellphones.com.vn/media/icons/icon-zalo.png"></a>
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
            <div class="col-3 text-white">
              <!-- <div class="row">
                <span class="fa fa-envelope col d-flex justify-content-end align-items-center pr-0"></span>
                <p class="col mb-0 w-100">nam.js.dev@gmail.com</p>
              </div> -->
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
              <!-- <li class="nav-item">
                <a class="nav-link" href="index.php?mod=postClient&action=about">About Us</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="index.php?mod=postClient&action=contact">Liên Hệ</a>
              </li>
            </ul>

          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->