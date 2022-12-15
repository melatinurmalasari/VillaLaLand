<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" type="image/x-icon" href="./assets/img/Logo.png">
</head>

<body>
  
  <?php include "header.php" ?>

  <!-- Main Content -->
  <main>
    <!-- Hero Section -->
    <section class="hero-home">
      <div class="container h-100">
        <div class="row justify-content-start align-items-center h-100">
          <div class="col-sm-12 col-md-8 text-white">
            <h1 class="fs-64">SUITS, SLEEP, SWEET</h1>
            <p class="fs-20 fw-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et
              dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
              fugiat.
            </p>
            <a href="" class="btn btn-primary fw-bold rounded-pill">Book Now</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Search Section -->
    <section class="search pt-120">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card bg-primary p-md-4 p-sm-0">
              <div class="row m-4 p-md-4 p-sm-0">
                <div class="col-12 mb-3">
                  <h1 class="text-center text-white">Search for Your Villa</h1>
                </div>
                <div class="col-md-6 col-sm-12 mb-3">
                  <input type="text" class="form-control" placeholder="Check In">
                </div>
                <div class="col-md-6 col-sm-12 mb-3">
                  <input type="text" class="form-control" placeholder="Check Out">
                </div>
                <div class="col-12">
                  <select class="form-select mb-3" aria-label=".form-select-lg example">
                    <option value="">Bedrooms</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col-12">
                  <select class="form-select mb-3" aria-label=".form-select-lg example">
                    <option selected>Area</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col-12">
                  <select class="form-select mb-3" aria-label=".form-select-lg example">
                    <option selected>Price Range</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col-12">
                  <a href="destination.html" class="btn btn-primary fw-bold w-100">Find Your Villas</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Exclusive Offers Section -->
    <section class="offers pt-120">
      <div class="container">
        <div class="row g-4 justify-content-center align-items-center">
          <div class="col-sm-12 col-md-8">
            <h1>Treat Yourseld on <br> Exclusive Offers</h1>
          </div>
          <div class="col-sm-12 col-md-4 d-flex justify-content-md-end justify-content-sm-center">
            <a href="destination.html" class="btn btn-secondary rounded-pill">Discover More</a>
          </div>
          <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="card" style="border: none !important;">
              <img src="assets/img/VillaCard1.png" class="card-img-top" alt="...">
              <div class="card-body py-4 px-0">
                <h4 class="card-title">Nama Villa</h4>
                <p class="card-text">
                  Alamat Villa - incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <a href="destination3.html" class="btn btn-primary fw-semibold rounded-pill w-100">View More</a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="card" style="border: none !important;">
              <img src="assets/img/VillaCard2.png" class="card-img-top" alt="...">
              <div class="card-body py-4 px-0">
                <h4 class="card-title">Nama Villa</h4>
                <p class="card-text">
                  Alamat Villa - incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <a href="destination3.html" class="btn btn-primary fw-semibold rounded-pill w-100">View More</a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="card" style="border: none !important;">
              <img src="assets/img/VillaCard3.png" class="card-img-top" alt="...">
              <div class="card-body py-4 px-0">
                <h4 class="card-title">Nama Villa</h4>
                <p class="card-text">
                  Alamat Villa - incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <a href="destination3.html" class="btn btn-primary fw-semibold rounded-pill w-100">View More</a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="card" style="border: none !important;">
              <img src="assets/img/VillaCard4.png" class="card-img-top" alt="...">
              <div class="card-body py-4 px-0">
                <h4 class="card-title">Nama Villa</h4>
                <p class="card-text">
                  Alamat Villa - incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <a href="destination3.html" class="btn btn-primary fw-semibold rounded-pill w-100">View More</a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="card" style="border: none !important;">
              <img src="assets/img/VillaCard5.png" class="card-img-top" alt="...">
              <div class="card-body py-4 px-0">
                <h4 class="card-title">Nama Villa</h4>
                <p class="card-text">
                  Alamat Villa - incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <a href="destination3.html" class="btn btn-primary fw-semibold rounded-pill w-100">View More</a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="card" style="border: none !important;">
              <img src="assets/img/VillaCard6.png" class="card-img-top" alt="...">
              <div class="card-body py-4 px-0">
                <h4 class="card-title">Nama Villa</h4>
                <p class="card-text">
                  Alamat Villa - incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <a href="destination3.html" class="btn btn-primary fw-semibold rounded-pill w-100">View More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="testimonials bg-primary mt-5">
      <div class="container pt-5">
        <div class="row g-4 justify-content-center align-items-center">
          <div class="col-sm-12 col-md-8">
            <h1 class="text-white">What Say <br> Our Customers</h1>
          </div>
          <div class="col-sm-12 col-md-4 d-flex justify-content-md-end justify-content-sm-center position-relative">
            <div class="col-md-3 col-sm-12 position-relative">
              <div class="btn-swiper swiper-button-prev"></div>
            </div>
            <div class="col-md-2 col-sm-12 position-relative">
              <div class="btn-swiper swiper-button-next"></div>
            </div>
          </div>
        </div>
        <div #swiperRef="" class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div
              class="swiper-slide p-4 rounded-4 text-white d-flex justify-content-center align-items-start flex-column">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam molestias inventore rerum magnam sint
                expedita odio excepturi numquam qui quasi.
              </p>
              <span class="line mb-3"></span>
              <div class="d-flex justify-content-between align-items-center w-100">
                <div class="d-flex justify-content-center align-items-center">
                  <img src="./assets/img/Profil.png" class="d-block img-testimonials" alt="">
                  <h6 class="ms-2 mt-1">Chelsea Island</h6>
                </div>
                <div class="d-flex">
                  <img src="./assets/img/star.png" class="stars mx-1" alt="">
                  <img src="./assets/img/star.png" class="stars mx-1" alt="">
                  <img src="./assets/img/star.png" class="stars mx-1" alt="">
                  <img src="./assets/img/star.png" class="stars mx-1" alt="">
                </div>
              </div>
            </div>
            <div
              class="swiper-slide p-4 rounded-4 text-white d-flex justify-content-center align-items-start flex-column">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam molestias inventore rerum magnam sint
                expedita odio excepturi numquam qui quasi.
              </p>
              <span class="line mb-3"></span>
              <div class="d-flex justify-content-between align-items-center w-100">
                <div class="d-flex justify-content-center align-items-center">
                  <img src="./assets/img/Profil.png" class="d-block img-testimonials" alt="">
                  <h6 class="ms-2 mt-1">Chelsea Island</h6>
                </div>
                <div class="d-flex">
                  <img src="./assets/img/star.png" class="stars mx-1" alt="">
                  <img src="./assets/img/star.png" class="stars mx-1" alt="">
                  <img src="./assets/img/star.png" class="stars mx-1" alt="">
                  <img src="./assets/img/star.png" class="stars mx-1" alt="">
                </div>
              </div>
            </div>
            <div
              class="swiper-slide p-4 rounded-4 text-white d-flex justify-content-center align-items-start flex-column">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam molestias inventore rerum magnam sint
                expedita odio excepturi numquam qui quasi.
              </p>
              <span class="line mb-3"></span>
              <div class="d-flex justify-content-between align-items-center w-100">
                <div class="d-flex justify-content-center align-items-center">
                  <img src="./assets/img/Profil.png" class="d-block img-testimonials" alt="">
                  <h6 class="ms-2 mt-1">Chelsea Island</h6>
                </div>
                <div class="d-flex">
                  <img src="./assets/img/star.png" class="stars mx-1" alt="">
                  <img src="./assets/img/star.png" class="stars mx-1" alt="">
                  <img src="./assets/img/star.png" class="stars mx-1" alt="">
                  <img src="./assets/img/star.png" class="stars mx-1" alt="">
                </div>
              </div>
            </div>
            <div
              class="swiper-slide p-4 rounded-4 text-white d-flex justify-content-center align-items-start flex-column">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam molestias inventore rerum magnam sint
                expedita odio excepturi numquam qui quasi.
              </p>
              <span class="line mb-3"></span>
              <div class="d-flex justify-content-between align-items-center w-100">
                <div class="d-flex justify-content-center align-items-center">
                  <img src="./assets/img/Profil.png" class="d-block img-testimonials" alt="">
                  <h6 class="ms-2 mt-1">Chelsea Island</h6>
                </div>
                <div class="d-flex">
                  <img src="./assets/img/star.png" class="stars mx-1" alt="">
                  <img src="./assets/img/star.png" class="stars mx-1" alt="">
                  <img src="./assets/img/star.png" class="stars mx-1" alt="">
                  <img src="./assets/img/star.png" class="stars mx-1" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="gallery">
      <div class="container">
        <h1 class="text-center"><u>Villa La Land Gallery</u></h1>
        <div class="swiper mySwiper1">
          <div class="swiper-wrapper">
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        centeredSlides: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
          "@0.00": {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          "@0.75": {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          "@1.00": {
            slidesPerView: 3,
            spaceBetween: 40,
          },
          "@1.50": {
            slidesPerView: 4,
            spaceBetween: 30,
          },
        },
        // slidesPerView: 3,
        // centeredSlides: true,
        // spaceBetween: 30,
        // pagination: {
        //   el: '.swiper-pagination',
        //   type: 'fraction',
        // },
        // navigation: {
        //   nextEl: '.swiper-button-next',
        //   prevEl: '.swiper-button-prev',
        // },
        // slidesPerView: 3,
        // spaceBetween: 10,
        // pagination: {
        //   el: ".swiper-pagination",
        //   type: 'fraction',
        //   // clickable: true,
        // },
        // navigation: {
        //   nextEl: '.swiper-button-next',
        //   prevEl: '.swiper-button-prev',
        // },
        // breakpoints: {
        //   "@0.00": {
        //     slidesPerView: 1,
        //     spaceBetween: 10,
        //   },
        //   "@0.75": {
        //     slidesPerView: 2,
        //     spaceBetween: 20,
        //   },
        //   "@1.00": {
        //     slidesPerView: 3,
        //     spaceBetween: 40,
        //   },
        //   "@1.50": {
        //     slidesPerView: 4,
        //     spaceBetween: 50,
        //   },
        // },
      });

      var swiper1 = new Swiper(".mySwiper1", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          "@0.00": {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          "@0.75": {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          "@1.00": {
            slidesPerView: 3,
            spaceBetween: 40,
          },
          "@1.50": {
            slidesPerView: 4,
            spaceBetween: 50,
          },
        },
      });


      // const swiper = new Swiper('.swiper', {
      //   slidesPerView: 3,
      //   centeredSlides: true,
      //   spaceBetween: 30,
      //   pagination: {
      //     el: '.swiper-pagination',
      //     type: 'fraction',
      //   },
      //   navigation: {
      //     nextEl: '.swiper-button-next',
      //     prevEl: '.swiper-button-prev',
      //   },
      //   virtual: {
      //     slides: (function () {
      //       const slides = [];
      //       for (var i = 0; i < 600; i += 1) {
      //         slides.push('Slide ' + (i + 1));
      //       }
      //       return slides;
      //     })(),
      //   },
      // });
    </script>
</body>

</html>