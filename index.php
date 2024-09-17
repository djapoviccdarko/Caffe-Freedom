<?php
include_once "./partials/header.php";
?>

<body>
  <div class="main-content">
    <div class="header-body">
      <?php
      include_once "./partials/navbar.php";
      ?>
      <hr class="nav-line" />
      <header id="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="banner text-center">
                <h1 class="banner-heading display-1 text-white">
                  <p class="banner-heading-top">Caffe</p>
                  <br />
                  <p class="banner-heading-bottom">Freedom</p>
                </h1>
              </div>
            </div>
          </div>
        </div>
      </header>
    </div>

    <div class="container">
      <section id="welcome">
        <div class="row font-weight-bold d-flex">
          <div
            class="col-lg-4 col-md-6 col-sm-6 first-column animate order-lg-1 order-md-2 order-sm-2 order-2">
            <img
              src="img/welcome-img1.png"
              class="welcome-img1 mx-auto d-block w-100"
              alt="" />
            <div class="column-content first-column-content">
              <p class="welcome-txt p-2">
                Uživajte u savršenom početku dana uz našu aromatičnu kafu.
                Svaka šoljica donosi bogatstvo ukusa i mirisa, pripremljena s
                ljubavlju i pažnjom. Posetite nas i otkrijte svoje omiljeno
                mesto za opuštanje i uživanje u vrhunskom napitku.
              </p>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-12 col-sm-12 order-lg-2 order-md-1 order-sm-1 order-1 text-center pt-5 second-column">
            <div class="column-content">
              <h4 class="heading">Dobrodošli</h4>
              <!-- <p class="welcome-txt p-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti repellendus
                esse sed labore dignissimos eligendi cum necessitatibus repudiandae eaque iste, dolore velit deserunt
                sit quaerat ea molestiae maxime explicabo odio qui facilis reiciendis sint possimus! Iusto, ullam
                dolores! Consectetur, natus!</p> -->
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 col-sm-6 last-column animate order-lg-3 order-md-3 order-sm-3 order-3 mt-3">
            <img
              src="img/beer.avif"
              class="welcome-img2 w-50 mx-auto d-block"
              alt="" />
            <div class="column-content mt-3">
              <p class="welcome-txt p-2">
                Osvežite se uz naša pažljivo birana piva koja donose savršenu
                ravnotežu ukusa i osveženja. Svaka čaša je prilika da uživate
                u bogatom kvalitetu i nezaboravnom iskustvu. Posetite nas i
                pronađite svoje omiljeno pivo za svaku priliku.
              </p>
            </div>
          </div>
        </div>
      </section>
    </div>

    <section id="welcome-info">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-2 col-md-6 col-sm-6 p-0">
            <img src="img/img-9.jpg" class="brunch-img w-100 h-100" alt="" />
          </div>

          <div class="col-lg-8 col-md-6 col-sm-6">
            <div class="text-center happyhour">
              <i class="fas fa-coffee welcome-info-icon display-4"></i>
              <h4 class="heading">O nama</h4>
              <h6 class="welcome-info-h6 font-weight-bold pt-0 pt-sm-2">
                ~ Osnovne informacije ~
              </h6>
              <p class="happyhour-title text-left pt-5">
                Cafe Freedom, smešten u Radničkoj 32 u Čačku, otvoren je u
                julu 2023. godine. Ovaj šarmantni kafić oživljava duh starih
                vremena sa svojim dekorom posvećenim starim automobilima i
                motociklima. Uživajte u atmosferi punoj Volkswagen Buba i
                Vespa motora, koja budi sećanja na putovanja i ljubav prema
                klasičnim avanturama na točkovima. Posetite nas i doživite
                trenutke u kojima se spojila ljubav prema nostalgiji i
                avanturi.
              </p>
              <p class="happyhour-phone py-4">+38163489096</p>
              <a href="contact.php"><button class="btn btn-button btn-bfr btn-anim mb-4">
                  Više informacija
                </button></a>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6 p-0">
            <img
              src="img/img-8.jpg"
              class="happyhour-img w-100 h-100"
              alt="" />
          </div>
        </div>
      </div>
    </section>
    <section id="offer"></section>

    <section id="tea">
      <div
        class="tea-image d-flex flex-column justify-content-center align-items-center">
        <h1 class="heading text-center text-white">Topli napici</h1>
        <!-- <h6 class="tea-text text-center pt-2 pb-5">~ Bugünə Özəl ~</h6> -->
      </div>
    </section>

    <section id="buddha">
      <div class="container">
        <div class="row pb-5">
          <div
            class="col-lg-3 col-md-3 col-sm-3 animate d-flex align-items-center buddha-img">
            <img src="img/buddha-left.jpg " class="w-100" alt="Buddha" />
          </div>
          <div class="col-lg-5 col-md-6 col-sm-6 animate">
            <i
              class="fas fa-mug-hot welcome-info-icon display-4 d-inline-block"></i>
            <h1 class="heading d-inline-block pl-3">
              Kafe, čajevi<br />i ostali topli napici
            </h1>
            <p class="welcome-txt pt-2">
              Bilo da tražite savršenu šoljicu čaja, toplu čokoladu, ili
              bogatu kafu, naši topli napici donose utehu i uživanje u svakom
              gutljaju. Idealni su za opuštanje, razgovore ili trenutke mira.
              Dođite i ugrejte se uz naše posebne napitke.
            </p>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 animate align-self-center">
            <div class="card">
              <div
                id="carouselExampleControls"
                class="carousel slide"
                data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="card-image">
                      <img
                        class="card-img-top buddha-card-img d-block w-100"
                        src="img/buddha-card-image.jpg"
                        alt="Card image cap" />
                      <button class="btn btn-card">Səbətə əlavə et</button>
                    </div>
                    <div class="card-body text-center">
                      <p class="card-text text-uppercase mb-0">lorem ipsum</p>

                      <h5 class="card-title">Lorem Ipsum</h5>
                      <p class="menu-item-price">$20</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card-image">
                      <img
                        class="card-img-top buddha-card-img d-block w-100"
                        src="img/buddha-card-image-2.jpg"
                        alt="Card image cap" />
                      <button class="btn btn-card">Səbətə əlavə et</button>
                    </div>
                    <div class="card-body text-center">
                      <h5 class="card-title">Lorem & Ipsum</h5>
                      <p class="menu-item-price">$21</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card-image">
                      <img
                        class="card-img-top buddha-card-img d-block w-100"
                        src="img/buddha-card-image-3.jpg"
                        alt="Card image cap" />
                      <button class="btn btn-card">Səbətə əlavə et</button>
                    </div>
                    <div class="card-body text-center">
                      <h5 class="card-title">Lorem Ipsum Dolar</h5>
                      <p class="menu-item-price">$22</p>
                    </div>
                  </div>
                </div>
                <a
                  class="carousel-control-prev"
                  href="#carouselExampleControls"
                  role="button"
                  data-slide="prev">
                  <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a
                  class="carousel-control-next"
                  href="#carouselExampleControls"
                  role="button"
                  data-slide="next">
                  <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="menu">
      <div class="container">
        <h4 class="heading heading-line animate text-center">Cenovnik</h4>
        <div class="row">
          <div class="col-lg-4 menu-item mt-5">
            <h3 class="heading"><u>Kofe</u></h3>
            <div class="menu-item-content">
              <div
                class="menu-name pt-2 d-flex justify-content-between align-items-center"
                data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
              <div
                class="menu-name pt-3 d-flex justify-content-between align-items-center"
                data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
              <div
                class="menu-name pt-3 d-flex justify-content-between align-items-center"
                data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
              <div
                class="menu-name pt-3 d-flex justify-content-between align-items-center"
                data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
              <div
                class="menu-name pt-3 d-flex justify-content-between align-items-center"
                data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>

              <h3 class="heading pt-5"><u>Branç</u></h3>
              <div class="menu-item-content">
                <div
                  class="menu-name pt-2 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div
                  class="menu-name pt-3 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div
                  class="menu-name pt-3 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div
                  class="menu-name pt-3 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div
                  class="menu-name pt-3 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 menu-item mt-5">
            <h3 class="heading"><u>Keks</u></h3>
            <div class="menu-item-content">
              <div
                class="menu-name pt-2 d-flex justify-content-between align-items-center"
                data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
              <div
                class="menu-name pt-3 d-flex justify-content-between align-items-center"
                data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
              <div
                class="menu-name pt-3 d-flex justify-content-between align-items-center"
                data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
              <div
                class="menu-name pt-3 d-flex justify-content-between align-items-center"
                data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
              <div
                class="menu-name pt-3 d-flex justify-content-between align-items-center"
                data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>

              <h3 class="heading pt-5"><u>Nahar</u></h3>
              <div class="menu-item-content">
                <div
                  class="menu-name pt-2 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div
                  class="menu-name pt-3 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div
                  class="menu-name pt-3 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div
                  class="menu-name pt-3 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div
                  class="menu-name pt-3 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 menu-item mt-5">
            <h3 class="heading"><u>Şirniyyatlar</u></h3>
            <div class="menu-item-content">
              <div
                class="menu-name pt-2 d-flex justify-content-between align-items-center"
                data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
              <div
                class="menu-name pt-3 d-flex justify-content-between align-items-center"
                data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
              <div
                class="menu-name pt-3 d-flex justify-content-between align-items-center"
                data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
              <div
                class="menu-name pt-3 d-flex justify-content-between align-items-center"
                data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
              <div
                class="menu-name pt-3 d-flex justify-content-between align-items-center"
                data-toggle="modal"
                data-target="#modalbox">
                <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                <span class="menu-item-price align-self-end">20$</span>
              </div>
              <p class="menu-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>

              <h3 class="heading pt-5"><u>İçkilər</u></h3>
              <div class="menu-item-content">
                <div
                  class="menu-name pt-2 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div
                  class="menu-name pt-3 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div
                  class="menu-name pt-3 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div
                  class="menu-name pt-3 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div
                  class="menu-name pt-3 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- menu display none  -->

        <div id="menu-displaynone">
          <div class="row">
            <div class="col-lg-4 menu-item mt-5">
              <h3 class="heading"><u>Səhər yeməyi</u></h3>
              <div class="menu-item-content">
                <div
                  class="menu-name pt-2 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div
                  class="menu-name pt-3 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div
                  class="menu-name pt-3 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div
                  class="menu-name pt-3 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div
                  class="menu-name pt-3 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>

                <h3 class="heading pt-5"><u>Branç</u></h3>
                <div class="menu-item-content">
                  <div
                    class="menu-name pt-2 d-flex justify-content-between align-items-center"
                    data-toggle="modal"
                    data-target="#modalbox">
                    <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                    <span class="menu-item-price align-self-end">20$</span>
                  </div>
                  <p class="menu-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </p>
                  <div
                    class="menu-name pt-3 d-flex justify-content-between align-items-center"
                    data-toggle="modal"
                    data-target="#modalbox">
                    <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                    <span class="menu-item-price align-self-end">20$</span>
                  </div>
                  <p class="menu-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </p>
                  <div
                    class="menu-name pt-3 d-flex justify-content-between align-items-center"
                    data-toggle="modal"
                    data-target="#modalbox">
                    <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                    <span class="menu-item-price align-self-end">20$</span>
                  </div>
                  <p class="menu-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </p>
                  <div
                    class="menu-name pt-3 d-flex justify-content-between align-items-center"
                    data-toggle="modal"
                    data-target="#modalbox">
                    <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                    <span class="menu-item-price align-self-end">20$</span>
                  </div>
                  <p class="menu-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </p>
                  <div
                    class="menu-name pt-3 d-flex justify-content-between align-items-center"
                    data-toggle="modal"
                    data-target="#modalbox">
                    <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                    <span class="menu-item-price align-self-end">20$</span>
                  </div>
                  <p class="menu-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 menu-item mt-5">
              <h3 class="heading"><u>Şam yeməyi</u></h3>
              <div class="menu-item-content">
                <div
                  class="menu-name pt-2 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div
                  class="menu-name pt-3 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div
                  class="menu-name pt-3 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div
                  class="menu-name pt-3 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div
                  class="menu-name pt-3 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>

                <h3 class="heading pt-5"><u>Dondurma</u></h3>
                <div class="menu-item-content">
                  <div
                    class="menu-name pt-2 d-flex justify-content-between align-items-center"
                    data-toggle="modal"
                    data-target="#modalbox">
                    <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                    <span class="menu-item-price align-self-end">20$</span>
                  </div>
                  <p class="menu-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </p>
                  <div
                    class="menu-name pt-3 d-flex justify-content-between align-items-center"
                    data-toggle="modal"
                    data-target="#modalbox">
                    <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                    <span class="menu-item-price align-self-end">20$</span>
                  </div>
                  <p class="menu-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </p>
                  <div
                    class="menu-name pt-3 d-flex justify-content-between align-items-center"
                    data-toggle="modal"
                    data-target="#modalbox">
                    <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                    <span class="menu-item-price align-self-end">20$</span>
                  </div>
                  <p class="menu-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </p>
                  <div
                    class="menu-name pt-3 d-flex justify-content-between align-items-center"
                    data-toggle="modal"
                    data-target="#modalbox">
                    <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                    <span class="menu-item-price align-self-end">20$</span>
                  </div>
                  <p class="menu-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </p>
                  <div
                    class="menu-name pt-3 d-flex justify-content-between align-items-center"
                    data-toggle="modal"
                    data-target="#modalbox">
                    <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                    <span class="menu-item-price align-self-end">20$</span>
                  </div>
                  <p class="menu-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 menu-item mt-5">
              <h3 class="heading"><u>Şirniyyatlar</u></h3>
              <div class="menu-item-content">
                <div
                  class="menu-name pt-2 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div
                  class="menu-name pt-3 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div
                  class="menu-name pt-3 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div
                  class="menu-name pt-3 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div
                  class="menu-name pt-3 d-flex justify-content-between align-items-center"
                  data-toggle="modal"
                  data-target="#modalbox">
                  <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                  <span class="menu-item-price align-self-end">20$</span>
                </div>
                <p class="menu-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>

                <h3 class="heading pt-5"><u>İçkilər</u></h3>
                <div class="menu-item-content">
                  <div
                    class="menu-name pt-2 d-flex justify-content-between align-items-center"
                    data-toggle="modal"
                    data-target="#modalbox">
                    <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                    <span class="menu-item-price align-self-end">20$</span>
                  </div>
                  <p class="menu-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </p>
                  <div
                    class="menu-name pt-3 d-flex justify-content-between align-items-center"
                    data-toggle="modal"
                    data-target="#modalbox">
                    <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                    <span class="menu-item-price align-self-end">20$</span>
                  </div>
                  <p class="menu-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </p>
                  <div
                    class="menu-name pt-3 d-flex justify-content-between align-items-center"
                    data-toggle="modal"
                    data-target="#modalbox">
                    <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                    <span class="menu-item-price align-self-end">20$</span>
                  </div>
                  <p class="menu-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </p>
                  <div
                    class="menu-name pt-3 d-flex justify-content-between align-items-center"
                    data-toggle="modal"
                    data-target="#modalbox">
                    <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                    <span class="menu-item-price align-self-end">20$</span>
                  </div>
                  <p class="menu-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </p>
                  <div
                    class="menu-name pt-3 d-flex justify-content-between align-items-center"
                    data-toggle="modal"
                    data-target="#modalbox">
                    <h3 class="menu-title">Lorem ipsum dolor sit amet</h3>
                    <span class="menu-item-price align-self-end">20$</span>
                  </div>
                  <p class="menu-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="view-more-button">
          <button
            id="toggle-vm"
            type="button"
            class="btn btn-button btn-bfr btn-anim btn-lg d-flex mx-auto justify-content-center mt-4">
            Daha çox
          </button>
        </div>
      </div>
    </section>

    <section id="direction" class="add-ornament-top add-ornament-bottom">
      <div class="container">
        <div class="row first-row text-white">
          <div class="col-md-12 col-sm-12 animate pb-5 text-center">
            <h3 class="heading pb-4">Radno vreme</h3>
            <div
              class="direction-opening-text d-flex justify-content-between">
              <p class="welcome-txt">Radni dani</p>
              <p class="welcome-txt">07:00 - 00:00</p>
            </div>
            <div
              class="direction-opening-text d-flex justify-content-between pt-2">
              <p class="welcome-txt">Subota</p>
              <p class="welcome-txt">07:00 - 00:00</p>
            </div>
            <div
              class="direction-opening-text d-flex justify-content-between pt-2">
              <p class="welcome-txt">Nedelja</p>
              <p class="welcome-txt">08:00 - 23:00</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <?php
  include_once "./partials/footer.php"
  ?>