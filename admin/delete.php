<?php
//including the database connection file
include("koneksi.php");


//getting id of the data from url
$room_id = $_GET['room_id'];

//deleting the row from table
$result = mysqli_query($koneksi, "DELETE FROM room WHERE room_id=$room_id");

//redirecting to the display page (index.php in our case)
header("Location:villabooking.php");
?>