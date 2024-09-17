<?php
include_once "./partials/header.php";
?>

<body>
  <div class="main-content">
    <div class="header-body hero-wrap" style="background:linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), 
                                                        url('img/bg-blog-healthy.jpg') bottom center/cover no-repeat;">
      <?php
      include_once "./partials/navbar.php";
      ?>
      <div>
        <input type="text" class="search-header__input" placeholder="Axtar">
        <button class="btn search-header__close"><i class="fas fa-times" aria-hidden="true"></i></button>
      </div>

      <hr class="nav-line">

      <header class="header-wrap">
        <div class="container-fluid">
          <div class="row  ">
            <div class="col-md-12">
              <div class="header-wrap__text">
                <h1 class="bread">Galerija</h1>
              </div>
            </div>
          </div>
        </div>
      </header>
    </div>

    <section class="gallery py-5 pt-sm-1">
      <div class="container">
        <img src="img/title-above.png" class="title-above d-block mx-auto pt-3 pt-sm-1" alt="Title-above">
        <h3 class="subheading heading-line animate text-center pt-4">Fotografije</h3>
        <div class="row justify-content-center py-4">

        </div>
        <div class="row no-gutters gallery-inner">
          <a href="img/img-1.jpg" class="gallery-product col-md-4 filter mocha">
            <img src="img/img-1.jpg" class="w-100 d-block gallery-image">
          </a>
          <a href="img/img-8.jpg" class="gallery-product  col-md-4 filter americano">
            <img src="img/img-8.jpg" class="w-100 d-block gallery-image">
          </a>
          <a href="img/img-3.jpg" class="gallery-product col-md-4 filter mocha">
            <img src="img/img-3.jpg" class="w-100 d-block gallery-image">
          </a>
          <a href="img/img-4.jpg" class="gallery-product col-md-4 filter espresso">
            <img src="img/img-4.jpg" class="w-100 d-block gallery-image">
          </a>
          <a href="img/img-5.jpg" class="gallery-product col-md-4  filter americano">
            <img src="img/img-5.jpg" class="w-100 d-block gallery-image">
          </a>
          <a href="img/img-6.jpg" class="gallery-product  col-md-4 filter icecoffee">
            <img src="img/img-6.jpg" class="w-100 d-block gallery-image">
          </a>
          <a href="img/img-7.jpg" class="gallery-product col-md-4 filter mocha">
            <img src="img/img-7.jpg" class="w-100 d-block gallery-image">
          </a>
          <a href="img/img-8.jpg" class="gallery-product col-md-4  filter mocha">
            <img src="img/img-8.jpg" class="w-100 d-block gallery-image">
          </a>
          <a href="img/img-9.jpg" class="gallery-product col-md-4  filter latte">
            <img src="img/img-9.jpg" class="w-100 d-block gallery-image">
          </a>
        </div>
      </div>

      <?php
      include_once "./partials/footer.php";
      ?>