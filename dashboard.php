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

  <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      
</head>

<body>
  <?php include "header.php" ?>

  <!-- Back to top button -->
  <a id="back-to-top">
    <i class="material-icons">keyboard_arrow_up</i>
  </a>
  <!-- End of Back to top button -->

  <main>
    <!-- jumbotron -->
    <section class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row align-items-center h-100">
          <div class="col-lg text-white">
            <h1 class="display-4">SUITS, SLEEP, SWEET</h1>
            <p class="p-box">
              Make your stay special vacation packages designed to let you dive in <br>
              and explore the very best of the Villa La Land website.
            </p>
            <a href="" class="btn btn-primary fw-bold rounded-pill">Book Now</a>
          </div>
        </div>
      </div>
    </section>
    <!-- end jumbotron -->

    <!-- search villa -->
    <div class="search-villa reveal fade-bottom">
      <div class="container">
      <div class="row">
          <div class="col">
              <div class="row m-4 p-md-4 p-sm-0">
                <div class="col-12 mb-3">
                  <h1 class="text-center">We working with our world partners. <br>
                  and you are our partners!</h1>
                </div>
                <img src="assets/img/1.png" alt="" style="width:30%; height:30%; margin-right: 70px;">
                <img src="assets/img/2.png" alt="" style="width:30%; height:30%; margin-right: 50px;"> 
                <img src="assets/img/3.png" alt="" style="width:30%; height:30%;">
              </div>
           
          </div>
        </div>
      </div>
    </div>
    <!-- end search villa -->

    <!-- Exclusive Offers Section -->
    <section class="offers pt-100 reveal fade-bottom">
      <div class="container">
        <div class="row g-4 justify-content-center align-items-center" >
          <div class="col-sm-12 col-md-8">
            <h1>Treat Yourseld on <br> Exclusive Offers</h1>
          </div>
          <div class="button-des col-sm-12 col-md-4 d-flex justify-content-md-end justify-content-sm-center">
            <a href="destination2.php" class="btn btn-secondary rounded-pill">Discover More</a>
          </div>
          <div class="container">
        <div class="row gx-5">
        <?php
          require_once 'koneksi.php';
          $query = $koneksi->query("SELECT * FROM `room` LIMIT 3") or die(mysql_error()); 
          while($fetch = $query->fetch_array()){
          ?>
          <div class="cat-wrap col-xl-4 col-md-6 col-sm-12 my-4">
            <div class="cat-card card shadow shadow-md rounded-4 p-4 h-100" style="border: none !important;">
              <img src="<?php echo $fetch['photo'] ?>" class="card-img-top" style="width:350px; height:180px;" alt="...">
              <div class="card-body py-4 px-0">
                <h4 class="card-title"><?php echo $fetch['room_name'] ?></h4>
                <hr>
                <div class="row" style="margin-top: 5px;">
                  <div class="d-flex col-md-1 justify-content-start" >
                    <img src="assets/img/tool.png" alt="place"  style="width:20px; height:20px;">
                  </div>
                  <div class="col-lg" style="margin-left: -5px;" >
                    <h6 class="card-title">Rp. <?php echo $fetch['price'] ?> / Day</h6>
                  </div>
                </div> 
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="destination3.php?room_id=<?php echo $fetch['room_id']?>" class="btn btn-primary fw-semibold rounded-pill w-100">View More</a></li>
              </ul>
            </div>
          </div>
          <?php } ?>
        </div>
        </div>
      </div>
    </section>
    <!-- end exclusive offers -->

    <!-- Section Testimonials -->
    <section class="comment-guest">
      <div class="container">
        <div class="row g-4 justify-content-center align-items-center">
          <div class="col-12">
            <h1 class="text-sm-center text-md-start reveal">What Say <br> Our Customers</h1>
          </div>
        </div><br>
        <div class="line-white reveal"></div><br><br>
        <div class="swiper px-10 reveal fade-bottom">
          <div class="swiper-wrapper">
            <div class="swiper-slide swiper-slide-testimonials d-flex flex-column p-4 rounded-4 text-white">
              <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam molestias inventore
                rerum magnam sint
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
            
            <div class="swiper-slide swiper-slide-testimonials d-flex flex-column p-4 rounded-4 text-white">
              <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam molestias inventore
                rerum magnam sint
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
            <div class="swiper-slide swiper-slide-testimonials d-flex flex-column p-4 rounded-4 text-white">
              <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam molestias inventore
                rerum magnam sint
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
            <div class="swiper-slide swiper-slide-testimonials d-flex flex-column p-4 rounded-4 text-white">
              <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam molestias inventore
                rerum magnam sint
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
            <div class="swiper-slide swiper-slide-testimonials d-flex flex-column p-4 rounded-4 text-white">
              <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam molestias inventore
                rerum magnam sint
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
            <div class="swiper-slide swiper-slide-testimonials d-flex flex-column p-4 rounded-4 text-white">
              <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam molestias inventore
                rerum magnam sint
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
          <div class="swiper-button-prev bg"></div>
          <div class="swiper-button-next bg"></div>
        </div>
      </div>
    </section>
    <!-- end testimonials -->

    <!-- Gallery Section -->
    <section class="gallery reveal">
      <div class="container">
        <h1 class="text-center reveal fade-bottom">Villa La Land Gallery</h1><br>
        <div class="line-black"></div><br><br>
        <div class="swiper mySwiper1 px-6">
          <div class="swiper-wrapper">
            <div class="swiper-slide px-2">
              <img src="./assets/img/VillaCard1.png" class="d-block w-100" alt="">
            </div>
            <div class="swiper-slide px-2">
              <img src="./assets/img/VillaCard2.png" class="d-block w-100" alt="">
            </div>
            <div class="swiper-slide px-2">
              <img src="./assets/img/VillaCard3.png" class="d-block w-100" alt="">
            </div>
            <div class="swiper-slide px-2">
              <img src="./assets/img/VillaCard4.png" class="d-block w-100" alt="">
            </div>
            <div class="swiper-slide px-2">
              <img src="./assets/img/VillaCard5.png" class="d-block w-100" alt="">
            </div>
            <div class="swiper-slide px-2">
              <img src="./assets/img/VillaCard6.png" class="d-block w-100" alt="">
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- end gallery -->

    <?php include "footer.php" ?>
    <script src="scripts/reveal.js"></script>
    <script src="scripts/backtotop.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper1 = new Swiper('.swiper', {
        slidesPerView: 3,
        watchSlidesProgress: true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
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
            slidesPerView: 2,
            spaceBetween: 40,
          },
          "@1.50": {
            slidesPerView: 4,
            spaceBetween: 30,
          },
        },
      });

      var swiper2 = new Swiper('.mySwiper1', {
        slidesPerView: 3,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
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
      });
    </script>
</body>
</html>