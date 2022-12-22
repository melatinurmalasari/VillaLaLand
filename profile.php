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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

  <script type="text/javascript">
    const showInfo = (value) => {
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function() {
        alert(this.responseText)
      }
      var id = value
      xhttp.open("POST", "action.php?aksi=info");
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("id=" + id)
    }

    const deleteData = (value) => {
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function() {
        alert(this.responseText)
      }
      var id = value
      xhttp.open("POST", "action.php?aksi=delete");
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      let con = confirm("Apakah anda yakin ingin menghapus data?")
      if (con) {
        xhttp.send("id=" + id)
      }
    }
  </script>

</head>

<body>
  <?php include "header.php" ?>
  <?php 
$idTransaksi = mysqli_query($koneksi, "SELECT transaction_id FROM `transaction` WHERE first_name = '$username';");
$idTransaksiFetch = mysqli_fetch_array($idTransaksi);
$idTransaksiInput = $idTransaksiFetch['room_id'];
?>
  <main>
    <?php
    require_once 'koneksi.php';
    $query = $koneksi->query("SELECT * FROM `users` WHERE id = $idUserInput") or die(mysql_error()); 
    while($fetch = $query->fetch_array()){
      ?>
    <section class="hero-profile">
        <div class="row">
            <div class="col-lg">
              <div class="container">
                  <div class="row little-profile" style ="background: rgba(239, 181, 167, 0.3);">
                    <div class="col-md-2 profile-pic">
                          <div class="avatar-upload">
                              <div class="avatar-preview">
                                  <div id="imagePreview" style="background-image: url('<?php $fetch['pp']; ?>');">
                                  </div>
                              </div>
                          </div>
                          
                    </div>
                    <div class="col-md-4" style="margin: 20px; ">
                            <h2 style="font-weight: 600;"><?php echo $username ?></h2>
                            <p><?php echo $fetch['kota'] ?></p> 
                    </div>
                        <?php } ?>

                        
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
                    </div>

                   
                    <div id="current-book" class="tabcontent">
                      <center>
                        <div class="booking">
                         <?php
                         $query = mysqli_query($koneksi, "SELECT room.room_name, transaction.first_name, transaction.checkin, transaction.checkout, transaction.status FROM transaction INNER JOIN room ON transaction.room_id=room.room_id WHERE first_name = '$username';");
                         ?>
                         <table style="width: 100%;" class="display" id="tabel-data">
                          <thead>
                            <tr>
                              <th>Nama Pemesan</th>
                              <th>Nama Villa</th>
                              <th>Check In</th>
                              <th>Check Out</th>
                              <th>Status</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            while ($item = mysqli_fetch_array($query)) {
                              ?>

                              <tr>
                                <td><?= $item['first_name'] ?></td>
                                <td><?= $item['room_name'] ?></td>
                                <td><?= $item['checkin'] ?></td>
                                <td><?= $item['checkout'] ?></td>
                                <td><?= $item['status'] ?></td>
                                <form method="POST">
                                  <td>
                                  <input type="submit" name="refund" value="Refund" class="btn btn-primary fw-bold">
                                  <input type="submit" name="cancel" value="Cancel" class="btn btn-primary fw-bold">
                                </td>
                                </form>
                              </tr>

                              <?php
                              ob_start();
                              if (isset($_POST['refund'])) { 
                               $koneksi->query("UPDATE `transaction` SET status = 'PENDING' WHERE first_name = '$username' AND transaction_id = '$idTransaksiInput'") or die(mysqli_error());
                               header("location: profile.php");
                               ob_end_flush();
                             }
                             ?>
                             <?php
                             ob_start();
                             if (isset($_POST['cancel'])) { 
                               $koneksi->query("UPDATE `transaction` SET status = 'COMPLETE' WHERE first_name = '$username' AND transaction_id = '$idTransaksiInput'") or die(mysqli_error());
                               header("location: profile.php");
                               ob_end_flush();
                             }

                             ?>
                            <?php } ?>
                          </tbody>
                        </table>
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tabel-data').DataTable({
          order: [
            [2, 'desc']
            ],
          info: false,
          searching: false
        });
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>