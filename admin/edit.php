<?php
require_once 'koneksi.php';
$room_id = $_GET['room_id'];
$result = mysqli_query($koneksi, "SELECT * FROM room WHERE room_id=$room_id");

while ($item = mysqli_fetch_array($result)){
    $room_id = $item['room_id'];
    $photo = $item['photo'];
    $room_name = $item['room_name'];
    $room_place = $item['room_place'];
    $price = $item['price'];
    $bedroom = $item['bedroom'];
    $bathroom = $item['bathroom'];
    $wifi = $item['wifi'];
    $pool = $item['pool'];
    $description = $item['description'];
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>edit</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example">
    <?php include "header.php" ?>

    <br/>

    <a href="villabooking.php">BACK</a>
	<br/>
	<br/>
	<h3>VILLA</h3>
		<form method="post" action="update.php?room_id=<?=$room_id ?>">
			<table>
				<tr>			
					<td>Villa Name</td>
					<td>
						<input type="text" name="room_name" value="<?= $room_name ?>">
					</td>
				</tr>
                <tr>
					<td>Photo</td>
					<td><input type="img" name="photo" value="<?=$photo?>"></td>
				</tr>
				<tr>
					<td>Villa Place</td>
					<td><input type="text" name="room_place" value="<?=$room_place?>"></td>
				</tr>
				<tr>
					<td>Price</td>
					<td><input type="number" name="price" value="<?=$price ?>"></td>
				</tr>
                <tr>
					<td>Badroom</td>
					<td><input type="text" name="bedroom" value="<?=$bedroom ?>"></td>
				</tr>
                <tr>
					<td>Bathroom</td>
					<td><input type="text" name="bathroom" value="<?=$bathroom ?>"></td>
				</tr>
                <tr>
					<td>Wifi</td>
					<td><input type="text" name="wifi" value="<?=$wifi ?>"></td>
				</tr>
                <tr>
					<td>Pool</td>
					<td><input type="text" name="pool" value="<?= $pool ?>"></td>
				</tr>
                <tr>
					<td>Description</td>
					<td><input type="text" name="description" value="<?=$description?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="update" value="update data"></td>
				</tr>		
			</table>
		</form>
		<?php 
	?>
 
</body>
</html>

