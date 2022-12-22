<?php
require_once 'koneksi.php';
session_start();
$username = $_SESSION['username'];
$idUser = mysqli_query($koneksi, "SELECT id FROM `users` WHERE username = '$username';");
$idUserFetch = mysqli_fetch_array($idUser);
$idUserInput = $idUserFetch['id'];
if (!isset($_SESSION['username'])){
  header("Location: login.php");
}
?>

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
            <a class="nav-link fs-5" href="index.php">Home</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link fs-5" href="destination2.php">Destination</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link fs-5" href="blog.php">Blog</a>
          </li>
        </ul>
        <a href="profile.php" class="text-decoration-none">
          <div class="d-flex btn btn-primary rounded-pill justify-content-center align-items-center">
            <span style="color : white ;"><?php echo $username ?></span>
          </div>
        </a>
      </div>
    </div>
  </nav>