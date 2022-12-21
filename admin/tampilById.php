<!DOCTYPE html>
<html>
<head>
    <title>Detail </title>
</head>
<body>
    <h2>Menampilkan Data Tunggal</h2>
    <?php
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
    ?>
</body>
</html>
