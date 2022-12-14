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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <?php include "header.php" ?>

  <main>
    <section class="blog pt-120">
      <div class="container">
        <div class="row">
            <div class="col-md-6">
              <h1 class="mb-5" style="margin: 50px 0; weight: 600;">Share Your Stay Experience With Us</h1>
            </div>
            <div class="d-flex col-md-5 justift-between-end" style="margin-top: 50px;">
              <div class="ms-auto p-2">
                <a href="edit_blog.php" class="btn btn-primary"><span class="bi bi-plus"></span>Add Blog</a>
              </div>
            </div>
        </div>
      
        <hr>
        <?php
          require_once 'koneksi.php';
          $query = $koneksi->query("SELECT * FROM `blog`") or die(mysql_error()); 
          while($fetch = $query->fetch_array()){
          ?>
        <div class="row" style="margin: 20px 0;">
          <div class="col-sm-12 col-md-8" style="margin: 30px 0;">
            <a href="blog2.php" class="text-decoration-none" style="color:black;">
              <h2><?= $fetch['judul'] ?></h2>
              <p><?= $fetch['text_blog'] ?></p>
            </a>
          </div>
        <hr>
     <?php } ?>
      </div>
    </section>
    
    <?php include "footer.php" ?>
  </main>

  <script src="scripts/reveal.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>