<?php
require_once 'koneksi.php';
if (isset($_POST['add_guest'])){
	$firstname = $_POST['first_name'];
	$lastname = $_POST['last_name'];
	$phone = $_POST['contactno'];
	$email = $_POST['email'];
	$checkin = $_POST['checkin'];
	$checkout = $_POST['checkout'];

	$idUser = mysqli_query($koneksi, "SELECT id FROM `users` WHERE username = '$_SESSION[username]';");
                $idUserFetch = mysqli_fetch_array($idUser);
                $idUserInput = $idUserFetch['id'];

	$koneksi->query("INSERT INTO `guest` (first_name, last_name, contactno, email, id_user) VALUES ('$firstname', '$lastname', '$phone', '$email', '$idUserInput')") or die(mysqli_error());
	$query = $koneksi->query("SELECT * FROM `guest` WHERE `first_name` = '$firstname' && `last_name` = '$lastname' && `contactno` = '$phone' && `email` = '$email'") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$query2 = $koneksi->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkin' && `checkout` = '$checkout' && `room_id` = '$_REQUEST[room_id]'") or die(mysqli_error());
	$row = $query2->num_rows;
	if($checkin < date("Y-m-d", strtotime('+8 HOURS'))){	
		echo "<script>alert('Must be present date')</script>";
	}else{
		if($row > 0){
			echo "<div class = 'col-md-4'>
			<label style = 'color:#ff0000;'>Not Available Date</label><br />";
			$q_date = $koneksi->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkin'") or die(mysqli_error());
			while($f_date = $q_date->fetch_array()){
				echo "<ul>
				<li>	
				<label class = 'alert-danger'>".date("M d, Y", strtotime($f_date['checkin']."+8HOURS"))."</label>	
				</li>
				</ul>";
			}
			"</div>";
		}else{	
			if($guest_id = $fetch['guest_id']){
				$room_id = $_REQUEST['room_id'];
				$dateCheckin = $checkin;
				$dateCheckout = $checkout;
				$timeStampCheckin = strtotime($checkin);
				$timeStampCheckout = strtotime($checkout);
				$hitungHari = $timeStampCheckout - $timeStampCheckin;
				$hari = $hitungHari/(24*60*60);
				$hargaQuery = mysqli_query($koneksi, "SELECT price FROM `room` WHERE room_id = $room_id;");
                $hargaFetch = mysqli_fetch_array($hargaQuery);
                $hargaResult = $hargaFetch['price'];
				$totalInput = $hargaResult * $hari;
				
				$koneksi->query("INSERT INTO `transaction`(guest_id, room_id, checkin, checkout, first_name, last_name, contactno, email, hari_menginap, hargaKamar, id_user) VALUES('$guest_id', '$room_id', '$checkin', '$checkout', '$firstname', '$lastname', '$phone', '$email', '$hari', '$totalInput', '$idUserInput')") or die(mysqli_error());
				$last_id = mysqli_insert_id($koneksi);
				header("location: receipt.php?transaction_id=$last_id&room_id=$room_id");
			}else{
				echo "<script>alert('Silahkan masukkan data dengan benar!')</script>";
			}
		}	
	}		
}
?>