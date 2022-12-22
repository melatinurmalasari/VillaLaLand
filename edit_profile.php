
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link rel="icon" type="image/x-icon" href="./assets/img/Logo.png">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    .profile-pic {
        color: transparent;
        transition: all .3s ease;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        transition: all .3s ease;
        margin-top: -80px;
        margin-bottom: 20px;
    }
        
    .profile-pic input {
            display: none;
        }
    
    .profile-pic img {
        position: absolute;
        object-fit: cover;
        box-shadow: 0 0 10px 0 rgba(255,255,255,.35);
        border-radius: 100px;
        z-index: 0;
    }

    .profile-pic .-label {
        cursor: pointer;
    }
    
    .profile-pic .-label :hover {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0,0,0,.8);
            z-index: 10000;
            color: rgb(250,250,250);
            transition: background-color .2s ease-in-out;
            border-radius: 100px ;
            margin-bottom: 0;
    }
    
    .-label span {
        display: inline-flex;
        padding: .2em;
        height: 2em;
    }
  </style>
</head>

<body>
  <?php 
  include "header.php";
  $result = mysqli_query($koneksi, "SELECT * FROM users WHERE id=$idUserInput");

  while ($item = mysqli_fetch_array($result)){
    $username = $item['username'];
    $kota = $item['kota'];
    $phone = $item['phone'];
    $gender = $item['gender'];
    $birth = $item['birth'];
    $email = $item['email'];
    $pp = $item['imageUpload'];
}
   ?>
  <main>
    <form method="POST" enctype = "multipart/form-data">
        <section class="hero-profile">
        <div class="row">
            <div class="col-lg">
                  <div class="container">
                  <div class="row little-profile">
                        <div class="col-md-2 profile-pic">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file' id="imageUpload" name="imageUpload" accept=".png, .jpg, .jpeg" />
                                    <label for="imageUpload"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview" style="background-image: url('<?php $item['pp'] ?>');">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h1 class="col-md-2" style="margin-left: 30px; margin-top: -50px; font-weight: 600;">Edit Profile</h1>
                    </div>
                  
                    <div class="card w3-padding-24 center" style="margin-top:10px; border-radius: 25px; padding:30px;   box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                        <div class="card-body">
                            <h2 class="card-title" style="font-weight: 600;">Personal Data</h2>
                            <div class="line-black"></div>
                            <div class="row mt-3">
                                <div class="col-md-12" style="margin-top:20px;">
                                    <label class="labels" style="font-weight: 500; font-size: 20px;">Full Name</label>
                                    <input type="text" name="username" class="form-control" placeholder="enter fullname" style="margin-top:10px;" value="<?=$username ?>">
                                </div>
                                <div class="col-md-12" style="margin-top:20px;">
                                    <label class="labels" style="font-weight: 500; font-size: 20px;">Phone</label>
                                    <input type="text" name="phone" class="form-control" placeholder="enter number phone" style="margin-top:10px;" value="<?=$phone ?>">
                                </div>
                                <div class="col-md-12" style="margin-top:20px;">
                                    <label class="labels" style="font-weight: 500; font-size: 20px;">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="enter email address" style="margin-top:10px;" value="<?= $email ?>">
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6"  style="margin-top:20px;">
                                        <label class="labels genders" style="font-weight: 500; font-size: 20px;">Gender</label>
                                        <div class="input-group mb-3">
                                            <select class="form-select mb-3" name="gender" aria-label=".form-select-lg example">
                                                <option value="Man">Man</option>
                                                <option value="Ladies">Ladies</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="col-md-6"  style="margin-top:20px;">
                                        <label class="labels" style="font-weight: 500; font-size: 20px;">Birthdate</label>
                                        <div>
                                            <input class="form-control" type="date" id="birth" name="birth" value="<?= $birth ?>" style="margin-top:10px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="labels" style="font-weight: 500; font-size: 20px;">City</label>
                                    <input type="text" name="kota" class="form-control" style="margin-top:10px;" placeholder="enter city" value="<?=$kota ?>">
                                </div>
                                <div class="text-center" style="margin-top:20px;">
                                    <a href="profile.php" class="btn btn-secondary rounded-pill" style="padding: 15px;">Back to Profile Page</a>
                                    <input class="btn btn-secondary rounded-pill" type="submit" name="update" value="Save Profile" style="padding: 15px;" >
                                </div>
                            </div>
                        </div>
                    </div>
             
                </div>
            </div>    
        </div>
    </section>
    </form>
</main>

?>

<?php
if(isset($_POST['update'])){
     $username = $_POST['username'];
    $kota = $_POST['kota'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $birth = $_POST['birth'];
    $email = $_POST['email'];
    
    // update data ke database
    $result = mysqli_query($koneksi,"UPDATE users set kota='$kota', phone='$phone', gender='$gender', birth='$birth', email='$email' WHERE id=$idUserInput;");
}
?>
  
    <?php include "footer.php" ?>
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>