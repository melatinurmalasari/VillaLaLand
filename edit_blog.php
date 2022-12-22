<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/editor.css">
  <link rel="stylesheet" href="./assets/css/style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include "header.php" ?>

    <main>
        <section>
            <div class="banner">
                <input type="file" accept="image/*" id="banner-upload" hidden>
                <label for="banner-upload" class="banner-upload-btn"><img src="img/upload.png" alt="upload banner"></label>
            </div>
            <!-- <form action="/action_page.php">
                <p><label for="w3review">Review of W3Schools:</label></p>
                <textarea id="w3review" name="w3review" rows="4" cols="50">At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.</textarea>
                <br>
                <input type="submit" value="Submit">
            </form> -->
            <div class="container">
                <div class="blog">
                    <div class=" shadow shadow-md">
                        <textarea type="text" class="title" placeholder="Blog title..."></textarea> 
                    </div>
                    <div class="shadow shadow-md">
                        <textarea type="text" class="article" placeholder="Start writing here..."></textarea>
                    </div>
                    <center>
                        <div style="margin-top:35px;">
                        <button class="btn dark publish-btn">publish</button>
                        <input type="file" accept="image/*" id="image-upload" hidden>
                        <label for="image-upload" class="btn btn-primary upload-btn">Upload Image</label>
                        </div>
                        
                    </center>
                </div>
            </div> 
        </section>
    </main>
    
    <?php include "footer.php" ?>

    <script src="scripts/editor.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>