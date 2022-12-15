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

  <style>
    html,
    body,
    main,
    .testimonials,
    .container,
    .gallery {
      position: relative;
      height: 100%;
    }

    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: justify;
      background: #2B5881;
    }

    .mySwiper .swiper-slide,
    .mySwiper .swiper-slide-active {
      width: 500px !important;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .swiper {
      width: 100%;
      height: 300px;
      margin: 20px auto;
    }

    .swiper-button-prev,
    .swiper-button-next {
      color: #2B5881;
      background: #F4E379;
      padding: 2rem;
      border-radius: 2.5rem;
      z-index: 1;
    }

    /* .btn-swiper {
      color: #2B5881;
      background: #F4E379;
      padding: 2rem;
      border-radius: 2.5rem;
      top: 0;
      z-index: 1;
      top: 80px
    }
    
    .swiper-button-prev {
      float: right !important;
      left: 90% !important;
    }

    .swiper-button-next {
      float: right !important;
      right: 0% !important;
    } */


    .swiper-button-next:after,
    .swiper-button-prev:after {
      font-size: 1rem !important;
      font-weight: 900;
    }
  </style>
</head>

<body>
  <?php include "header.php" ?>
  <!-- Main Content -->
  <main>
    <!-- Hero Section -->
    <section class="hero-profile">
      <div class="container h-100 bg-danger">
        <div class="row h-100">
          <div class="col-sm-12 col-md-8">
            <div class="d-flex justify-content-center align-items-center">
              <img src="./assets/img/Profil.png" alt="">
              <h4>Kevin Alexander</h4>
            </div>
          </div>
          <div class="col-sm-12 col-md-4"></div>
        </div>
      </div>
    </section>

    <section class="bg-danger">
      <h1>tes</h1>
    </section>

    <?php include "footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <!-- Swiper JS -->
</body>

</html>