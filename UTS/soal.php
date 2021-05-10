<?php
	session_start();
	if (isset($_SESSION["email"])) {
	} else {
		$_SESSION["name"] = $_POST["nama"];
		$_SESSION["email"] = $_POST["email"];
	}
	if ($_SESSION["lives"] == 0) {
		header('Location: selesai.php');
	}

	$a = rand(0,20);
	$b = rand(0,20);
	$hasil = $a + $b;
	$_SESSION["hasil"] = $hasil;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>SOAL</title>
  </head>
  <body>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<div class="container mt-5 bg-primary px-3 py-3 rounded-lg">
		<!-- Content here -->
		<form action="cek.php" method="POST">
			<h5 class="text-white">Hallo <?php echo $_SESSION["name"];?>, tetap semangat ya...you can do the best!!!</h5>
			<h5 class="text-white">Lives: <?php echo $_SESSION["lives"];?> | Score: <?php echo $_SESSION["score"];?></i></h5>
			<br>
			<div class="form-group row">
			<label class="text-white col-sm-2 col-form-label">Berapakah <?php echo $a; ?> + <?php echo $b; ?> =</label>
			<div class="col-sm-10">
				<input class="form-control" name="hasil" placeholder="Masukkan Jawaban" type="number">
    		</div>
				<div class="col-sm-2">
				</div>
				<div class="col-sm-2 mt-3">
					<button class="btn btn-secondary" type="submit" value="jawab">Jawab</button>
				</div>
			</div>
		</form>
	</div>
    
  </body>
</html>