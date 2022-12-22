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

    <a href="villabooking.php" class="btn btn-light">BACK</a>
	<br/>
	<br/>
	<h3>VILLA</h3>
		<form method="post" action="update.php?room_id=<?=$room_id ?>">
			<table>
				<div class="mb-3">
  					<label for="formFile" class="form-label">Villa Name</label>
  					<input class="form-control" type="text" id="formFile" name="room_name" value="<?= $room_name ?>">
				</div>
				

				<div class="mb-3">
  					<label for="formFile" class="form-label">Photo</label>
  					<input class="form-control" type="file" id="formFile" name="photo" value="<?=$photo?>">
				</div>

                

				<div class="mb-3">
  					<label for="formFile" class="form-label">Villa Place</label>
  					<input class="form-control" type="text" id="formFile" name="room_place" value="<?=$room_place?>">
				</div>

				

				<div class="mb-3">
  					<label for="formFile" class="form-label">Price</label>
  					<input class="form-control" type="number" id="formFile" name="price" value="<?=$price ?>">
				</div>

				

				<div class="mb-3">
  					<label for="formFile" class="form-label">Bedroom</label>
  					<input class="form-control" type="text" id="formFile" name="bedroom" value="<?=$bedroom ?>">
				</div>

                

				<div class="mb-3">
  					<label for="formFile" class="form-label">Bathroom</label>
  					<input class="form-control" type="text" id="formFile" name="bathroom" value="<?=$bathroom ?>">
				</div>


				<div class="mb-3">
  					<label for="formFile" class="form-label">Wifi</label>
  					<input class="form-control" type="text" id="formFile" name="wifi" value="<?=$wifi ?>">
				</div>

                

				<div class="mb-3">
  					<label for="formFile" class="form-label">Pool</label>
  					<input class="form-control" type="text" id="formFile" name="pool" value="<?=$pool ?>">
				</div>

                

				<div class="mb-3">
  					<label for="formFile" class="form-label">Description</label>
  					<input class="form-control" type="text" id="formFile" name="description" value="<?=$description ?>">
				</div>

                
				<tr>
					<td></td>
					<td><input class="btn btn-primary"type="submit" name="update" value="update data" ></td>
				</tr>		
			</table>
		</form>
		<?php 
	?>
 
</body>
</html>

