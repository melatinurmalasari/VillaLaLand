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
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
  <?php include "header.php" ?>

  <main>
    <section class="destinations pt-120">
      <div class="container">
        <div class="row gx-5">
          <div class="col-12 d-flex align-items-center justify-content-center mb-3 text-center ">
            <h1 class="fw-bold" style="margin-top: 60px;">Find Your Perfect Villa <br> in <span style="color:#f1a198;">Villa La Land</span></h1>
          </div>
          <hr>
          <?php
          require_once 'koneksi.php';
          $query = $koneksi->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error()); 
          while($fetch = $query->fetch_array()){
          ?>
          <div class="cat-wrap col-xl-4 col-md-6 col-sm-12 my-4">
            <div class="cat-card card shadow shadow-md rounded-4 p-4 h-100" style="border: none !important;">
              <img src="<?php echo $fetch['photo'] ?>" class="card-img-top" style="width:100%; height:100%" alt="...">
              <div class="card-body py-4 px-0">
                <h4 class="card-title"><?php echo $fetch['room_name'] ?></h4>
                <div class="row" style="margin-top: 5px;">
                  <div class="d-flex col-md-1 justify-content-start" >
                    <img src="assets/img/tool.png" alt="place"  style="width:20px; height:20px;">
                  </div>
                  <div class="col-lg" style="margin-left: -5px;" >
                    <p class="card-title"><?php echo $fetch['room_place'] ?></p>
                  </div>
                  <ul class="list-group list-group-flush" >
                    <li class="list-group-item"><h5 class="mb-4" >Rp. <?php echo $fetch['price'] ?> / Day</h5><a href="destination3.php?room_id=<?php echo $fetch['room_id']?>" class="btn btn-primary fw-semibold rounded-pill w-100">Book Now</a></li>
                  </ul>
                </div>  
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>

    <?php include "footer.php" ?>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>