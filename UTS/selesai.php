<?php    
    session_start();
    include "koneksi.php";
    addPemain($_SESSION["name"], $_SESSION["email"], $_SESSION["score"]);
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <title>Selamat!!!</title>
    </head>
<body>
    <div class="container mt-5 bg-primary px-3 py-3 rounded-lg">
        <h5>Hallo <?php echo $_SESSION["name"];?>, Sayang permainan sudah selesai. Semoga lain kali bisa lebih baik. <i class="fa fa-smile"></i></h5>
        <h5>Score Anda : <?php echo $_SESSION["score"]; ?></h5>
        <div class="bg-danger justify-content-center px-3 py-3">

            <h5>HALL OF FAME</h5>

        </div>
        
        <table class="table table-hover">
            <tr>
                <td class="table-secondary">No</td>
                <td class="table-success">Nama</td>
                <td class="table-danger">Score</td>
            <tr>
            <?php
            $koneksi = mysqli_connect($host,$username,$pass,$database) or die(mysqli_error());
            $sql = "SELECT * FROM tebak ORDER BY score DESC LIMIT 10";
            $result = mysqli_query($GLOBALS['koneksi'], $sql);
            if (mysqli_num_rows($result) > 0) {
                $i = 1;
                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td class='table-secondary'>" . $i . "</td>";
                    echo "<td class='table-success'>" . $row["Nama"] . "</td>";
                    echo "<td class='table-danger'>" . $row["Score"] . "</td>";
                    echo "</tr>";
                    $i = $i + 1;  
                }
            } else {
                
            }
            mysqli_close($GLOBALS['koneksi']);
            ?>
        </table>
        <a class="btn btn-secondary" href="index.php">Ayo main lagi</a>
    </div>
</body>
</html>