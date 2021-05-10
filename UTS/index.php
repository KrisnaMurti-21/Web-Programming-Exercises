<?php
session_start();
$_SESSION["score"] = 0;
$_SESSION["lives"] = 5;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Halaman Utama</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1 mx-auto"><h5>Mathematic Is Fun</h5></span>
    </nav>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
    <?php
    if (isset($_SESSION["email"])) {
    ?>
    <div class="container mt-5">
    <!-- Content here -->
    <h5>Hallo <?php echo $_SESSION["name"];?>, selamat datang kembali di permainan ini!</h5>
    <a class="btn btn-primary text-white" href="soal.php">Main lagi</a>
    <h5>Bukan Anda? <a class="btn btn-primary text-white" href="ulang.php"> Klik disini</h5></a>
    
    </div>
    
    <?php
    } else {
    ?>
    <div class="container mt-5">
    <!-- Content here -->
        <form action="soal.php" method="POST">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" id="name" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email">
        </div>
        <button type="submit" class="btn btn-primary" name="mulai">Mulai Main</button>
        </form>
    </div>
    

    <?php
    }
    ?>
  </body>
</html>