<?php
require_once 'koneksi.php';
if (isset($_POST['add_guest'])){
	$firstname = $_POST['first_name'];
	$lastname = $_POST['last_name'];
	$phone = $_POST['contactno'];
	$email = $_POST['email'];
	$checkin = $_POST['checkin'];
	$checkout = $_POST['checkout'];
	$koneksi->query("INSERT INTO `guest` (first_name, last_name, contactno, email) VALUES ('$firstname', '$lastname', '$phone', '$email')") or die(mysqli_error());
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
				$koneksi->query("INSERT INTO `transaction`(guest_id, room_id, checkin, checkout, first_name, last_name, contactno, email) VALUES('$guest_id', '$room_id', '$checkin', '$checkout', '$firstname', '$lastname', '$phone', '$email')") or die(mysqli_error());
				header("location:transaksi.php");
			}else{
				echo "<script>alert('Error Javascript Exception!')</script>";
			}
		}	
	}		
}
?>