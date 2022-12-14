<!DOCTYPE html>
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
<body>
    

    <div class="card">
        <div class="card-header">
            Fitur
        </div>
        <div class="card-body">
            <h5 class="card-title">Menampilkan Data Tunggal</h5>
            <p class="card-text" value=<?php
                $room_id = $_GET['room_id']; //Mengambil id room yang dikirim melalui url
                
                include 'koneksi.php';
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM room WHERE room_id = '$room_id'");
                $data = mysqli_fetch_array($query);
                //menampilkan data dengan id tertentu

                echo "<b>Id</b> : " . $data['room_id'] . "<br>";
                echo "<b>Photo</b> : " . $data['photo'] . "<br>";
                echo "<b>Villa Name</b> : " . $data['room_name'] . "<br>";
                echo "<b>Villa Place</b> : " . $data['room_place'] . "<br>";
                echo "<b>Price</b> : " . $data['price'] . "<br>";
                echo "<b>Bedroom</b> : " . $data['bedroom'] . "<br>";
                echo "<b>Bathroom</b> : " . $data['bathroom'] . "<br>";
                echo "<b>Wifi</b> : " . $data['wifi'] . "<br>";
                echo "<b>Pool</b> : " . $data['pool'] . "<br>";
                echo "<b>Description</b> : " . $data['description'];
                ?>></p>
            <a href="villabooking.php" class="btn btn-info">Back</a>
        </div>
    </div>
    
</body>
</html>
