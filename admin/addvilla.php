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
	<a href="villabooking.php" class="btn btn-light">Back</a>
	<br/>
	<br/>
	<h3>ADD VILLA</h3>

		<form method="post" action="tambah_aksi.php">
			<table>
				
				<div class="mb-3">
  					<label for="formFile" class="form-label">Photo</label>
  					<input class="form-control" type="file" id="formFile" name="photo">
				</div>
				<div class="mb-3">
  					<label for="formGroupExampleInput" class="form-label">Villa Name</label>
  					<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Villa Name" name="room_name">
				</div>
				
				<div class="mb-3">
  					<label for="formGroupExampleInput" class="form-label">Place</label>
  					<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Villa Place" name="room_place">
				</div>
				
				<div class="mb-3">
  					<label for="formGroupExampleInput" class="form-label">Price</label>
  					<input type="number" class="form-control" id="formGroupExampleInput" placeholder="Villa Price" name="price">
				</div>
				
				<div class="mb-3">
  					<label for="formGroupExampleInput" class="form-label">Bedroom</label>
  					<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Total Bedroom" name="bedroom">
				</div>
                
				<div class="mb-3">
  					<label for="formGroupExampleInput" class="form-label">Bathroom</label>
  					<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Total Bathroom" name="bathroom">
				</div>
                
				<div class="mb-3">
  					<label for="formGroupExampleInput" class="form-label">Wifi</label>
  					<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Wifi" name="wifi">
				</div>
                
				<div class="mb-3">
  					<label for="formGroupExampleInput" class="form-label">Pool</label>
  					<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Pool Type" name="pool">
				</div>
                
				<div class="mb-3">
  					<label for="exampleFormControlTextarea1" class="form-label">Description</label>
  					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description" name="description" type="text"></textarea>
				</div>
                
				<tr>
					<td></td>
					<td><input class="btn btn-primary"type="submit" name="submit" value="Add data"></td>
				</tr>		
			</table>
		</form>

		<?php

		
		?>
 
</body>
</html>

