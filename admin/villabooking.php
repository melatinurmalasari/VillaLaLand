<?php
require_once('koneksi.php');
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Data Tables -->
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

  <title></title>
</head>

<body>
  <!-- Navbar -->
  <header>
    <nav class=" navbar navbar-expand-lg navbar-light bg-light">
      <div class=" container-fluid">
        <div class=" collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class=" nav-item"><a class=" nav-link" href="villabooking.php">Villa</a></li>
            <li class=" nav-item"><a class=" nav-link" href="datacus.php">Transaksion</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Main UI -->
  <main>
    

          <div class="card">
            <div class="card-body">
              <div class="card-title">Villa</div>
              <hr>
              <?php
              $result = mysqli_query($koneksi, "SELECT * FROM room");
              ?>

              <table style="width: 100%;" class="display" id="tabel-data">
                <thead>
                  <tr>
                  <a href="addvilla.php" class="btn btn-light">+Add Villa</a></caption>
                    
                    <th>Id Villa</th>
                    <th>Photo</th>  
                    <th>Villa name</th>
                    <th>Place</th>
                    <th>Price</th>
                    <th>Bedroom</th>
                    <th>Bathroom</th>
                    <th>wifi</th>  
                    <th>pool</th>  
                    <th>Description</th>
                    <th>#</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while ($data = mysqli_fetch_array($result)) {
                  ?>

                    <tr>
                    
                    <td><?php echo $data['room_id'] ?></td>
                    <td><?php echo $data['photo'] ?></td>
                    <td><?php echo $data['room_name'] ?></td>
                    <td><?php echo $data['room_place'] ?></td>
                    <td><?php echo $data['price'] ?></td>
                    <td><?php echo $data['bedroom'] ?></td>
                    <td><?php echo $data['bathroom'] ?></td>
                    <td><?php echo $data['wifi'] ?></td>
                    <td><?php echo $data['pool'] ?></td>
                    <td><?php echo $data['description'] ?></td>
                    <td>
                        <a href="tampilById.php?room_id=<?php echo $data['room_id'] ?>" class="btn btn-info">Detail</a>
                        <a href="edit.php?room_id=<?= $data['room_id'] ?>" class="btn btn-success">Edit</a>
                        <a href="delete.php?room_id=<?php echo $data['room_id']?>" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>

                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>


  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Data Tables -->
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
</body>
