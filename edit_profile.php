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
  <?php include "header.php" ?>

  <main>
    <section class="hero-profile">
        <div class="row">
            <div class="col-lg">
                  <div class="container">
                  <div class="row little-profile">
                        <div class="col-md-2 profile-pic">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                    <label for="imageUpload"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview" style="background-image: url('https://i.imgur.com/8RKXAIV.jpg');">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="col-md-2" style="margin: 20px; font-weight: 600;">Edit Profile</h2>
                    </div>
                  
                    <div class="card w3-padding-24 center" style="margin-top:10px; border-radius: 25px; padding:30px;   box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                        <div class="card-body">
                            <h4 class="card-title" style="font-weight: 600;">Personal Data</h4>
                            <div class="line-black"></div>
                            <div class="row mt-3">
                                <div class="col-md-12" style="margin-top:10px;"><label class="labels" style="font-weight: 500;">Full Name</label><input type="text" class="form-control" placeholder="enter fullname" value=""></div>
                                <div class="col-md-12" style="margin-top:10px;"><label class="labels" style="font-weight: 500;">Phone</label><input type="text" class="form-control" placeholder="enter number phone" value=""></div>
                                <div class="col-md-12" style="margin-top:10px;"><label class="labels" style="font-weight: 500;">Email</label><input type="text" class="form-control" placeholder="enter email address" value=""></div>
                                <div class="row mt-2" style="margin-top:20px;">
                                    <div class="col-md-6">
                                        <label class="labels genders" style="font-weight: 500;">Gender</label>
                                        <div class="input-group mb-3">
                                            <select class="form-select mb-3" aria-label=".form-select-lg example">
                                                <option value="">Gender</option>
                                                <option value="1">Man</option>
                                                <option value="2">Ladies</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labels" style="font-weight: 500;">Birthdate</label>
                                        <div>
                                            <input class="form-control" type="date" id="birthday" name="birthday">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top:-10px;">
                                    <label class="labels" style="font-weight: 500;">City of Residence</label>
                                    <div class="input-group mb-3">
                                        <select class="form-select mb-3" aria-label=".form-select-lg example">
                                            <option value="">City</option>
                                            <option value="1">Jakarta</option>
                                            <option value="2">Palembang</option>
                                            <option value="3">Bogor</option>
                                            <option value="4">Tangerang</option>
                                            <option value="5">Bali</option>
                                            <option value="6">Padang</option>
                                        </select> 
                                    </div>
                                </div>
                                <div class="text-center" style="margin-top:5px;">
                                    <a href="" class="btn btn-secondary rounded-pill">Cancel</a>
                                    <a href="" class="btn btn-secondary rounded-pill">Save Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
             
                </div>
            </div>    
        </div>
    </section>
</main>
  
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