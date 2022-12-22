<?php include "header.php" ?>
<?php 
    session_start();
    
    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>admin</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Berhasil Login</title>
</head>
<body>
    <div class="container-logout">
        <form action="" method="POST" class="login-email">
            <?php echo "<h1>Selamat Datang, Admin" . $_SESSION['username'] ."!". "</h1>"; ?>
             
            <div class="input-group">
            <a href="logout_admin.php" class="btn">Logout</a>
            </div>
        </form>
    </div>
</body>
</html>
