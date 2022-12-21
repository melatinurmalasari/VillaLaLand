<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>add</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example">
    <?php include "header.php" ?>

    <br/>
	<a href="villabooking.php">BACK</a>
	<br/>
	<br/>
	<h3>ADD VILLA</h3>

		<form method="post" action="addvilla.php?">
			<table>
				<tr>
					<td>Photo</td>
					<td><input type="pic" name="photo" ></td>
				</tr>
				<tr>		
					<td>Villa Name</td>
					<td><input type="text" name="room_name" ></td>
				</tr>
				<tr>
					<td>Place</td>
					<td><input type="text" name="room_place" ></td>
				</tr>
				<tr>
					<td>Price</td>
					<td><input type="number" name="price" ></td>
				</tr>
                <tr>
					<td>Bedroom</td>
					<td><input type="text" name="bedroom" ></td>
				</tr>
                <tr>
					<td>Bathroom</td>
					<td><input type="text" name="bathroom" ></td>
				</tr>
                <tr>
					<td>Wifi</td>
					<td><input type="text" name="wifi" ></td>
				</tr>
                <tr>
					<td>Pool</td>
					<td><input type="text" name="pool" ></td>
				</tr>
                <tr>
					<td>Description</td>
					<td><input type="text" name="description" ></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="submit"></td>
				</tr>		
			</table>
		</form>

		<?php
		if (isset($_POST['submit'])){
			$photo = $_POST['photo'];
			$room_name = $_POST['room_name'];
			$room_place = $_POST['room_place'];
			$price = $_POST['price'];
			$bedroom = $_POST['bedroom'];
			$bathroom = $_POST['bathroom'];
			$wifi = $_POST['wifi'];
			$pool = $_POST['pool'];
			$description = $_POST['description'];

			include_once("koneksi.php");

			// update data ke database
			$result = mysqli_query($koneksi,"INSERT INTO room(photo, room_name, room_place, price, bedroom, bathroom, wifi, pool, description) VALUES
			('$photo', '$room_name', '$room_place', '$price', '$bedroom', '$bathroom', '$wifi', '$pool', '$description' ");
    
			if($result){
				echo "BERHASIL";
				header("location:villabooking.php");
			}else{
				echo "GAK";
			}
		}
	
		?>
 
</body>
</html>

