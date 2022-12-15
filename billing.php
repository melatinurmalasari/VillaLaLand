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
    <section class="billing pt-120">
      <div class="container">
        <h1>Billing Details</h1>
        <div class="row gx-5">
          <div class="col-sm-12 col-md-8 border-md-end">
            <form method="post" enctype = "multipart/form-data">
              <div class="mb-3">
                <label>First name</label>
                <input type="text" class="form-control" name="first_name" required>
              </div>
              <div class="mb-3">
                <label>Last name</label>
                <input type="text" class="form-control" name="last_name" required>
              </div>
              <div class="mb-3">
                <label>Phone</label>
                <input type="text" class="form-control" name="contactno" required>
              </div>
              <div class="mb-3">
                <label>Email Address</label>
                <input type="text" class="form-control" name="email" required>
              </div>
              <div class="mb-3">
                  <label for="check-in">Check In</label>
                  <input type="date" id="checkin" name="checkin" required>
              </div>
              <div class="mb-3">
                  <label for="check-out">Check Out</label>
                  <input type="date" id="checkout" name="checkout" required>
              </div>
          </div>
          <?php require_once 'query_billing.php' ?>
          <div class="col-sm-12 col-md-4">
            <h3>The Total <br> Amount</h3>
            <div class="d-flex justify-content-between">
              <p>Amount Payable</p>
              <p>Rp.-</p>
            </div>
            <div class="d-flex justify-content-between">
              <p>Shipping</p>
              <p>Rp.-</p>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
              <b>The Total Amount of <br> (including VAT)</b>
              <p>Rp.-</p>
            </div>
            <br>
            <div class="col-12">
              <input type="submit" name="add_guest" value="Buy Now" class="btn btn-primary fw-bold w-100">
            </div>
            </form>
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