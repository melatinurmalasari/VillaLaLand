
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Villa Booking </title>
    <style>
        table,tr,td {
            border: 1px solid black;
        }
        thead {
            background-color: #cccddd;
        }
    </style>
</head>
<body class="p-3 m-0 border-0 bd-example">
    <?php include "header.php" ?>

    <main>
    <section class="destinations pt-120">
      <div class="container">
        <div class="row gx-5">
          <div class="col-12 d-flex align-items-center justify-content-center mb-3 text-center">
            <h1 class="fw-bold">Data transaksi</h1>
            
          </div>
        </div>
      </div>
    </section>
    <table>
        <thead>
            <tr>
                <a href="addvilla.php">+Add Villa</a>
                <td>No</td>
                <td>Id Villa</td>
                <td>Photo</td>  
                <td>Villa name</td>
                <td>Place</td>
                <td>Price</td>
                <td>Bedroom</td>
                <td>Bathroom</td>
                <td>wifi</td>  
                <td>pool</td>  
                <td>Description</td>                     
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($koneksi, 'SELECT * FROM room');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
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
                    <a href="tampilById.php?room_id=<?php echo $data['room_id'] ?>">Detail</a>
                    <a href="edit.php?room_id=$room_id">Edit</a>
                    <a href="delete.php?room_id=<?php echo $data['room_id']?>">Delete</a>
                </td>
                
            </tr>
        <?php } ?>
    </table>
</body>
</html>