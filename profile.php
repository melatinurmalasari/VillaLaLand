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
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  
  <link rel="icon" type="image/x-icon" href="./assets/img/Logo.png">

  <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
  <?php include "header.php" ?>

  <main>
    <section class="hero-profile">
        <div class="row">
            <div class="col-lg">
              <div class="container">
                  <div class="row little-profile" style ="background: rgba(239, 181, 167, 0.3);">
                    <div class="col-md-2 profile-pic">
                          <div class="avatar-upload">
                              <div class="avatar-preview">
                                  <div id="imagePreview" style="background-image: url('https://i.imgur.com/8RKXAIV.jpg');">
                                  </div>
                              </div>
                          </div>
                          <?php
                          require_once 'koneksi.php';
                          $query = $koneksi->query("SELECT * FROM `users` WHERE id = $idUserInput") or die(mysql_error()); 
                          while($fetch = $query->fetch_array()){
                            ?>
                    </div>
                    <div class="col-md-4" style="margin: 20px; ">
                            <h2 style="font-weight: 600;"><?php echo $username ?></h2>
                            <p><?php echo $fetch['kota'] ?></p> 
                    </div>
                        `<?php } ?>
                        
                        <div class="d-flex col-md-5 justift-between-end" style="margin-top: 40px;">
                            <div class="ms-auto p-2">
                              <a href="edit_profile.php?id_user=<?= $idUserInput ?>" class="btn btn-secondary rounded-pill" data-abc="true">Edit Profile</a>
                            </div>
                            <form action="" method="POST" class="login-email">
                              <div class="input-group ms-auto p-2">
                                <a href="logout.php" class="btn btn-secondary rounded-pill" data-abc="true">Logout</a>
                              </div>
                            </form>
                          </div>
                   
                  </div>
                    <div class="tab-book">
                      <button class="tablinks" onclick="openCity(event, 'current-book')" id="defaultOpen">Current Booking</button>
                      <button class="tablinks" onclick="openCity(event, 'book-history')">Booking History</button>
                      <button class="tablinks" onclick="openCity(event, 'our-blog')">Blog</button>
                    </div>

                    <div id="current-book" class="tabcontent">
                      <center>
                      <div class="booking">
                        <h5>No Booked Yet</h5>
                        <p>Anything you booked shows up here, but it seems like you haven’t made any. Let’s create one via destination page!</p>
                        <a href="destination2.php" class="btn btn-primary rounded" data-abc="true">Make a Villa Reservation</a>
                      </div> 
                      </center>
                    </div>

                    <div id="book-history" class="tabcontent">
                      <center>
                        <div class="card secondary w3-hover-shadow w3-padding-8" style="width:80%">
                          <div class="card-body">
                            <h2 class="card-title">Ubud Bali Resort</h2>
                            <p class="card-text">Check In : 2022-12-03</p>
                            <p class="card-text">Check Out : 2022-12-05</p>
                            <a href="#" class="btn btn-primary rounded">Book Again</a>
                          </div>
                        </div>
                      </center>
                    </div>

                    <div id="our-blog" class="tabcontent">
                      <center>
                      <div class="blog">
                        <h5>Oops!</h5>
                        <h5>No Blog Yet</h5>
                        <p>You haven't created a blog yet, let's create yours now!</p>
                        <a href="destination2.php" class="btn btn-primary rounded" data-abc="true">Create Your Blog</a>
                      </div> 
                      </center>
                    </div>
                </div>
              </div>       
        </div>
    </section>
  
    <?php include "footer.php" ?>
    <script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
      }

      document.getElementById("defaultOpen").click();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>