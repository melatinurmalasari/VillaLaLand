<?php 
// koneksi database
include 'koneksi.php';

 
// menangkap data yang di kirim dari form


$photo = $_POST['photo'];
$room_name = $_POST['room_name'];
$room_place = $_POST['room_place'];
$price = $_POST['price'];
$bedroom = $_POST['bedroom'];
$bathroom = $_POST['bathroom'];
$wifi = $_POST['wifi'];
$pool = $_POST['pool'];
$description = $_POST['description'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into room(`room_name`, `room_place`, `description`, `price`, `photo`, `bedroom`, `bathroom`, `wifi`, `pool`) values('$room_name','$room_place','$description', '$price', '$photo', '$bedroom', '$bathroom', '$wifi', '$pool')");
 
// mengalihkan halaman kembali ke ke awal
header("location:villabooking.php");
 
?> 