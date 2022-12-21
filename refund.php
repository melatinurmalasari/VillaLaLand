<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refund</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<?php include "header.php" ?>

<main>
  <section class="billing pt-120">
    <div class="container">
    <div class="card  shadow shadow-md" style="margin:50px; padding:30px; ">
      <div class="card-body">
        <h1 class="text-center">Billing Details</h1><br>
        <div class="row gx-5">
          <div class="col-sm-12 col-md-8 border-md-end justify-content-center mx-auto">
            <form method="post" enctype = "multipart/form-data">
              <div class="mb-3">
                <h6>Guest Name</h6>
                <p>[Nama Lengkap Pengunjung]</p>
              </div>
              <div class="mb-3">
                <h6>Check In</h6>
                <p>[Check In Pengunjung]</p>
              </div>
              <div class="mb-3">
                <h6>Check Out</h6>
                <p>[Check Out Pengunjung]</p>
              </div>
              <div class="mb-3">
                <h6>Status</h6>
                <p>[Status Refund]</p>
              </div>
              <div class="col-12">
              <input type="submit" name="add_guest" value="Confirm Refund" class="btn btn-primary fw-bold w-100">
              <br><br>
              <input type="submit" name="add_guest" value="Cancel" class="btn btn-secondary fw-bold w-100">
              <?Php require_once 'query_billing.php' ?>
            </div>
            </form>
          </div>
      </div>
      </div>
    </div>
     
    </div>
  </section>
</main>


    <?php include "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>