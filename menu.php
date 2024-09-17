<?php
include_once "./partials/header.php";
?>

<body>
  <div class="main-content">
    <div class="header-body hero-wrap" style="background:linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), 
                                                        url('img/bg-menu.jpg') bottom center/cover no-repeat;">
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
                <h1 class="bread">Cenovnik</h1>
              </div>
            </div>
          </div>
        </div>
      </header>
    </div>

    <section class="menyu py-5 pt-sm-1">
      <div class="container">
        <img src="img/title-above.png" class="title-above d-block mx-auto pt-3 pt-sm-1" alt="Title-above">
        <h3 class="subheading heading-line animate text-center pt-4">Günə Özəl</h3>
        <div class="row py-4">
          <div class="col-md-6 col-lg-3 animate pb-4 pb-lg-0">
            <img src="img/menu-img.jpg" class="d-block w-100" alt="menu-image">
            <div class="menyu-price">20$</div>
            <div class="menu-name pt-3" data-toggle="modal" data-target="#modalbox">
              <h3 class="menu-title ">Lorem ipsum dolor sit amet </h3>
              <small>Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 animate pb-4 pb-lg-0">
            <img src="img/menu-img-2.jpg" class="d-block w-100" alt="menu-image">
            <div class="menyu-price">20$</div>
            <div class="menu-name pt-3" data-toggle="modal" data-target="#modalbox">
              <h3 class="menu-title ">Lorem ipsum dolor sit amet </h3>
              <small>Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 animate pb-4 pb-lg-0">
            <img src="img/menu-img-3.jpg" class="d-block w-100" alt="menu-image">
            <div class="menyu-price">20$</div>
            <div class="menu-name pt-3" data-toggle="modal" data-target="#modalbox">
              <h3 class="menu-title ">Lorem ipsum dolor sit amet </h3>
              <small>Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 animate pb-4 pb-lg-0">
            <img src="img/menu-img-4.jpg" class="d-block w-100" alt="menu-image">
            <div class="menyu-price">20$</div>
            <div class="menu-name pt-3" data-toggle="modal" data-target="#modalbox">
              <h3 class="menu-title ">Lorem ipsum dolor sit amet </h3>
              <small>Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="menyu-content pb-5">
      <div class="menyu-content__image d-flex align-items-center justify-content-center"
        style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)), url('img/menyu-drinks.jpg') center center/cover fixed no-repeat;">
        <h1 class="heading text-white">İçkilər</h1>
      </div>
      <div class="container ">
        <div class="menyu-content__items add-ornament-top add-ornament-bottom mt-5">
          <div class="row py-4">
            <div class="col-lg-4 menu-item">
              <h5 class="subheading "><u>Kofelər</u></h5>
              <div class="menu-name pt-2 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">espresso</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">capuchino</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">latte</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">ice coffee</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">mocha</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">americano</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description  pb-4 pb-lg-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="col-lg-4 menu-item">
              <h5 class="subheading "><u>Kokteyl</u></h5>
              <div class="menu-name pt-2 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">aperol spritz</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">campari</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description pb-4 pb-lg-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>

            <div class="col-lg-4 menu-item">
              <h5 class="subheading "><u>Şərab</u></h5>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">Tormentoso Bush Vine Pintoage</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">Massandra </h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">Chateau Mouton-Rothschild</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">Chateau Lafite</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">Chateau Cheval Blanc</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description pb-4 pb-lg-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
          </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade modalbox" id="modalbox" tabindex="-1" role="dialog" aria-labelledby="modalboxTitle"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <img class="popup-image" src="img/modal-popup-img.jpg" alt="popup-image">
            <div class="popup-image-text modal-title" id="modalboxTitle">
              <h3 class="modal-header-heading">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
              <span class="modal-menu-price">$22</span>
            </div>
            <button type="button" class=" close-button" data-dismiss="modal" aria-label="Close">
              <i class="fas fa-times" aria-hidden="true"></i>
            </button>
          </div>
          <div class="modal-body">
            <h1 class="modal-body-category text-uppercase d-inline-block">branç</h1>
            <h6 class="modal-body-category text-uppercase d-inline-block">Bugünə Özəl</h6>
            <p class="modal-category-text font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Nemo repellat debitis ipsam nostrum, magni et?</p>
            <hr>
            <p class="text-muted">450g</p>
            <hr>
            <i class="fas fa-pepper-hot d-inline-block text-muted"></i>
            <h1 class="modal-spicy text-uppercase d-inline-block font-weight-bold">acılıq dərəcəsi</h1>
            <div class="spicy-level mb-3">
              <div class="level text-center">2/5</div>
            </div>
            <i class="fas fa-utensils d-inline-block text-muted"></i>
            <h1 class="modal-nutritions text-uppercase d-inline-block font-weight-bold">qidalanma</h1>
            <div class="row">
              <div class="col">
                <p class="text-muted nutritions-text">Kalori 250kcl <br>
                  Fiber 2.0G <br>
                  Karbohidrat 4.5G <br>
                  Protein 1.7G
                </p>
              </div>
              <div class="col">
                <p class="text-muted nutritions-text">Kalori 250kcl <br>
                  Fiber 2.0G <br>
                  Karbohidrat 4.5G <br>
                </p>
              </div>
            </div>
            <hr>
            <i class="fas fa-book d-inline-block text-muted"></i>
            <h1 class="modal-ingredients text-uppercase d-inline-block font-weight-bold">içindəkilər</h1>
            <p class="modal-category-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore quasi sequi
              accusamus, laboriosam ullam autem dolores ratione nemo saepe hic?</p>
          </div>
        </div>
      </div>
    </div>

    <section class="menyu-content pb-5">
      <div class="menyu-content__image d-flex align-items-center justify-content-center"
        style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)), url('img/menyu-dessert.jpg') center center/cover fixed no-repeat;">
        <h1 class="heading text-white">Şirniyyatlar</h1>
      </div>
      <div class="container ">
        <div class="menyu-content__items add-ornament-top add-ornament-bottom mt-5">
          <div class="row py-4">
            <div class="col-lg-4 menu-item">
              <h5 class="subheading "><u>Keks</u></h5>
              <div class="menu-name pt-2 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">espresso</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">capuchino</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">latte</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">ice coffee</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">mocha</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">americano</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description  pb-4 pb-lg-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="col-lg-4 menu-item">
              <h5 class="subheading "><u>Dondurma</u></h5>
              <div class="menu-name pt-2 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">albalı dondurması</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">kornuoll dondurması</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description pb-4 pb-lg-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">qranita</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description pb-4 pb-lg-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">meyvəli buz</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description pb-4 pb-lg-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">sorbe</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description pb-4 pb-lg-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>

            <div class="col-lg-4 menu-item">
              <h5 class="subheading "><u>Amerikan desertləri</u></h5>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">brauni</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">qırmızı məxmər tortu </h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">Chateau Mouton-Rothschild</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">sandey</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
          </div>
        </div>
    </section>

    <section class="menyu-content pb-5">
      <div class="menyu-content__image d-flex align-items-center justify-content-center"
        style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)), url('img/menyu-breakfast.jpg') center center/cover fixed no-repeat;">
        <h1 class="heading text-white">Branç</h1>
      </div>
      <div class="container ">
        <div class="menyu-content__items add-ornament-top add-ornament-bottom mt-5">
          <div class="row py-4">
            <div class="col-lg-4 menu-item">
              <h5 class="subheading "><u>Sendviç</u></h5>
              <div class="menu-name pt-2 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">poket sendviç</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">klab sendviç</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">sadə</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="col-lg-4 menu-item">
              <h5 class="subheading "><u>Hamburger</u></h5>
              <div class="menu-name pt-2 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">Çizburger</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">fişburger</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description pb-4 pb-lg-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">Çikenburger</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description pb-4 pb-lg-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>

            <div class="col-lg-4 menu-item">
              <h5 class="subheading "><u>Branç</u></h5>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">Frittata</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">Paçanya börəyi </h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">Şokoladlı çörək</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="menu-name pt-3 d-flex justify-content-between align-items-center" data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title ">pendirli krep</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
          </div>
        </div>
    </section>

    <?php
    include_once "./partials/footer.php";
    ?>