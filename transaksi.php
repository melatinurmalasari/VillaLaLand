<?php include "koneksi.php"; ?>

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
    <br><br><br><br><br><br><br>
    <section>
      <?php 
      $roomInput = $_GET['room_id'];
      $transactionInput = $_GET['transaction_id'];
      $query = $koneksi->query("SELECT hargaKamar, hargaKamar DIV 100 * 5 AS pajak FROM `transaction` WHERE room_id = $roomInput AND transaction_id = $transactionInput
        ") or die(mysql_error()); 
      while($fetch = $query->fetch_array()){
        ?>
     <form method="post">
       <div class="container">
        <div class="col-sm-12 col-md-4">
            <h3>The Total Amount</h3>
            <div class="d-flex justify-content-between">
              <p>Amount Payable</p>
              <p>Rp. <?= $fetch['hargaKamar']; ?></p>
            </div>
            <div class="d-flex justify-content-between">
              <p>Shipping</p>
              <p>Rp. <?= $fetch['pajak']; ?></p>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
              <b>The Total Amount of <br> (including VAT)</b>
              <p>Rp. <?php $diBayar =  $fetch['hargaKamar'] + $fetch['pajak'];
              echo $diBayar;?></p>
            </div>
            <br>
            <input type="submit" name="yes" value="Konfirmasi" class="btn btn-primary fw-bold w-100">
          </div>
      </div>
     </form>
        <?php } ?>
    </section>
  </main>
  <?php
  if (isset($_POST['yes'])) { 
     $koneksi->query("UPDATE `transaction` SET hargaTotal = '$diBayar' WHERE transaction_id = '$transactionInput'") or die(mysqli_error());
     header("location: dasboard.php");
   }

  ?>

  <?php include "footer.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>