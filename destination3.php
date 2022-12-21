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

  <main style="margin-top:50px;">
    <?php
      require_once 'koneksi.php';
      $query = $koneksi->query("SELECT * FROM `room` where room_id = '$_GET[room_id]'") or die(mysql_error()); 
      while($fetch = $query->fetch_array()){
      ?>
    <section class="hero-destination pt-80">
      <div class="container">
        <img src="<?php echo $fetch['photo'] ?>" style="width: 509px; height: 509px; object-fit: fill;" class="d-block w-100" alt="">
      </div>
    </section>

    <section class="desc">
      <div class="container">
        <h1 class="fw-bold mt-3"><?php echo $fetch['room_name'] ?></h1>
        
        <div class="row">
          <div class="d-flex col-md-1 justify-content-start" >
            <img src="assets/img/tool.png" alt="place"  style="width:30px;">
          </div>
          <div class="col-lg" style="margin-left: -65px;" >
            <h3 class="card-title"><?php echo $fetch['room_place'] ?></h3>
          </div>
        </div>  
        <hr>
        <div class="row">
          <div class="col">
            <p>
              <?php echo $fetch['description'] ?>
            </p>
          </div>
        </div>
      </div>
      <?php } ?>
    </section>

    <section class="facilities" style="margin-top:10px;">
      <?php
      require_once 'koneksi.php';
      $query = $koneksi->query("SELECT * FROM `room` where room_id = '$_GET[room_id]'") or die(mysql_error()); 
      while($fetch = $query->fetch_array()){
      ?>
      <div class="container">
        <h4  style="margin-bottom:20px;">Facilities</h4>
        <div class="line-black" style="margin-bottom:40px;"></div>
        <div class="row g-4">
          <div class="col-md-6 col-sm-12">
            <div class=" card d-flex justify-content-center align-items-center p-5">
              <img src="assets/img/bedroom.png" style="width : 20%; height : 20%;" alt="">
              <br><br>
              <h3 style="font-weight: 500; font-size: 25px"><?php echo $fetch['bedroom'] ?></h3>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="card d-flex justify-content-center align-items-center p-5">
              <img src="assets/img/bathroom.png" style="width : 21.5%; height : 21.5%;" alt="">
              <br><br>
              <h3 style="font-weight: 500; font-size: 25px"><?php echo $fetch['bathroom'] ?></h3>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="card d-flex justify-content-center align-items-center p-5">
              <img src="assets/img/wifi.png" style="width : 32.4%; height : 32.4%;" alt="">
              <br><br>
              <h3 style="font-weight: 500; font-size: 25px"><?php echo $fetch['wifi'] ?></h3>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="card d-flex justify-content-center align-items-center p-5">
              <img src="assets/img/pool.png" style="width : 23%; height : 23%;" alt="">
              <br><br>
              <h3 style="font-weight: 500; font-size: 25px"><?php echo $fetch['pool'] ?></h3>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </section>

    <section class="search pt-5 mt-5">
      <div class="container">
        <div class="row">
          <div class="col" style="margin:20px 0 50px;">
                <div class="col-12">
                  <a href="billing.php?room_id=<?php echo $_GET['room_id']?>" class="btn btn-primary fw-bold w-100">Book Your Villas</a>
                </div>
          </div>
        </div>
      </div>
    </section>
    
    <?php include "footer.php" ?>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>