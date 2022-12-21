<?php session_start() ?>

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
  <?php 
  include "header.php";
   ?>


  <main>
    <section class="billing pt-120">
      <br><br><br><br>
      <div class="container">
        <div class="card text-center h-100" style="padding: 50px;">
          <center>
          <img src="assets/img/hands.png" alt="" style="width: 150px;">
          </center>
          <br>
          <center>
          <h1 class="card-title">Terimakasih</h1>
          <p class="card-text">Selamat menikmati kamar yang telah dipesan.</p><br>
          <a href="dasboard.php" class="btn btn-primary fw-semibold rounded-pill w-40">Kembali ke halaman awal</a>
          </center>
      </div>
      </div>
      
    </section>
  </main>

  <?php include "footer.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>