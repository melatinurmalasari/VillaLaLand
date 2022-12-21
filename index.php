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
  <link rel="stylesheet" href="assets/css/style.css">
  
  <link rel="icon" type="image/x-icon" href="./assets/img/Logo.png">

  <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      
</head>

<body>
	<!--========== NAVBAR ==========-->
	<nav class="navbar navbar-expand-lg bg-primary navbar-dark fixed-top shadow shadow-md">
		<div class="container">
			<a class="navbar-brand" href="index.html"><img src="./assets/img/Logo.png" alt="Logo"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
				<li class="nav-item mx-2">
					<a class="nav-link active fs-5" href="#home">Home</a>
				</li>
				<li class="nav-item mx-2">
					<a class="nav-link fs-5" href="#tentangkami">About Us</a>
				</li>
				<li class="nav-item mx-2">
					<a class="nav-link fs-5" href="#">Our Team</a>
				</li>
				</ul>
				<a href="login.php" class="text-decoration-none">
				<div class="d-flex btn btn-primary p-3 rounded-pill justify-content-center align-items-center">
					<span class="ms-3 text-primary fw-semibold">Log In/Register</span>
				</div>
				</a>
			</div>
		</div>
  	</nav>
	<!--========== END OF NAVBAR ==========-->

    <!-- Back to top button -->
  <a id="back-to-top">
    <i class="material-icons">keyboard_arrow_up</i>
  </a>
  <!-- End of Back to top button -->

  <main>
    <!-- jumbotron -->
    <section class="jumbotron jumbotron-fluid" id="home">
      <div class="container">
        <div class="row align-items-center h-100">
          <div class="col-lg text-white">
            <h1 class="display-4">SUITS • SLEEP • SWEET</h1>
            <h5 class="p-box">
				Make your stay special vacation packages designed to let you dive in <br>
              	and explore the very best of the Villa La Land website.
			</h5>
            <a href="" class="btn btn-primary fw-bold rounded-pill">Book Now</a>
          </div>
        </div>
      </div>
    </section>
    <!-- end jumbotron -->

	<section class="about mt-5 pt-5" id="tentangkami">
		<div class="container h-100 reveal">
			<div class="row h-100 gx-5">
				<div class="col-6 d-flex flex-column justify-content-center">
					<img src="assets/img/vilaaa.png"
						alt="About Villa La Land" class="img-fluid p-5">
				</div>
				<div class="col-6 d-flex flex-column justify-content-center">
					<h2>About Us</h2>
					<p>
					Our website always works professionally by providing the best for users in order to give users a sense of security, 
					comfort and satisfaction with the services of our website.
					<span id="dots">...</span><span id="more"> 
					<br>
					We want to help recommend the best tourist attractions for your family, friends, or your partner. 
					By sharing insights from experienced users, you can find interesting and interesting tourist attractions.
					We also present villas for lodging during your trip. There are many choices of villas available around Indonesia. 
					You can easily book a villa from this website, enjoy your holiday and have a nice stay at our recommended villa!
					</span></p>
					<button onclick="myFunction()" id="myBtn" class="btn btn-primary px-3 mt-4 fw-bold">Read more</button>
				</div>
			</div>
		</div>
	</section>

	<section class="film">
		<div class="container p-5">
			<div class="row p-5">
				<div class="col p-5 bg-primary shadow shadow-lg">
					<iframe width="100%" height="500" src="https://www.youtube.com/embed/Fez9jsONpRE"
						title="YouTube video player" frameborder="0"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>

	
	<section class="about mt-5" id="about">
		<div class="container">
			<h1 class="text-center reveal" style="margin:50px 0;">Why You Choose Us?</h1>
			<div class="row h-100 gx-5">
				<section class="about reveal">
					<div class="container h-200">
						<div class="row justify-content-center">
							<div class="col-12">
								<div class="row reveal">
								<div class="col-lg text-center">
									<div class="borders">
										<img src="assets/img/booked.png" alt="booking"  style="width:150px; height:150px;">
									</div>
									<h3>Easy Booking</h3>
									<p>This booking process should include minimal steps</p>
								</div>
								<div class="col-lg text-center">
									<div class="borders">
									<img src="assets/img/responsibility.png" alt="" style="width:150px; height:150px;">
									</div>
									<h3>Responsibility</h3>
									<p>You should be able to add rooms to your system</p>
								</div>
								<div class="col-lg text-center">
									<div class="borders">
									<img src="assets/img/share.png" alt="" style="width:150px; height:150px;">
									</div>
									<h3>Friendly Interface</h3>
									<p>A villa booking engine with a good user friendly</p>
								</div>
							</div>
							</div>
						</div>
						</div>
					</div>
				</section>
			</section>
		
		<!-- maps -->
		<div class="container mt-5 reveal">
			<h1 class="judul text-center mb-5" style="margin:100px 0;">Find Us</h3>
			<div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 300px">
				<iframe
				src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Jl. A. Yani No.212c, Mendungan, Pabelan, Kec. Kartasura, Kabupaten Sukoharjo, Jawa Tengah 57161&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
				width="100%"
				height="450"
				style="border: 0"
				allowfullscreen=""
				loading="lazy"
				></iframe>
			</div>
			</div>
		</div>
		<!-- akhir maps-->

		<?php include "footer.php" ?>

	</main>

	<script src="scripts/navbar.js"></script>
	<script src="scripts/reveal.js"></script>

	<script>
		function myFunction() {
			var dots = document.getElementById("dots");
			var moreText = document.getElementById("more");
			var btnText = document.getElementById("myBtn");

			if (dots.style.display === "none") {
				dots.style.display = "inline";
				btnText.innerHTML = "Read more"; 
				moreText.style.display = "none";
			} else {
				dots.style.display = "none";
				btnText.innerHTML = "Read less"; 
				moreText.style.display = "inline";
			}
		}
	</script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
		integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
		integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		const navbar = document.querySelector('.navbar');
		window.onscroll = () => {
			if (window.scrollY > 300) {
				navbar.classList.add('active');
			} else {
				navbar.classList.remove('active');
			}
		};
	</script>

</body>

</html>