<?php 
// koneksi database
include 'koneksi.php';
$idInput = $_GET['room_id'];
echo $idInput;
echo "<pre>";
print_r($_POST);

// menangkap data yang di kirim dari form
if(isset($_POST['update'])){
    $photo = $_POST['photo'];
    $room_name = $_POST['room_name'];
    $room_place = $_POST['room_place'];
    $price = $_POST['price'];
    $bedroom = $_POST['bedroom'];
    $bathroom = $_POST['bathroom'];
    $wifi = $_POST['wifi'];
    $pool = $_POST['pool'];
    $description = $_POST['description'];
    
    // update data ke database
    $result = mysqli_query($koneksi,"UPDATE room set photo='$photo', room_name='$room_name', room_place='$room_place', price='$price', bedroom='$bedroom', bathroom='$bathroom', wifi='$wifi', pool='$pool', description='$description' WHERE room_id='$idInput';");
    
    if($result){
        echo "asu";
        header("location:villabooking.php");
    }else{
        echo "ya";
    }
}


?>
