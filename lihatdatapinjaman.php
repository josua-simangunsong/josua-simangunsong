<?php
session_start();
if(isset($_SESSION["username"])) {
    //Code to run if logged in

} else {
    //This will return the user to login page if the user is not logged in
    header("Location: index.php");
}
?>
<?php
// KONEKSI KE DATABASE
$mysqli = new mysqli('localhost','root','','kspkitas_uas')or die (mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM `pinjaman_berjalan`")or die ($mysqli->error);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>KSP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

    <body>
        <div class="jumbotron">
            <h1 class="display-4" style="text-align:center;">Data Pinjaman</h1>
            <p class="lead"style="text-align:center;" ></p>
        </div>
    </div>
    <a href="#" class="btn btn-info btn-lg" onclick="kembali()">
    <span class="glyphicon glyphicon-log-out"></span> Kembali 
    </a>
        <!-- display data -->

    
    </table>
    <table class = "table">
    <thead>
    <tr>
    <th>ID Pinjaman</th>
    <th>ID Anggota</th>
    <th>Jumlah Pinjaman</th>
    <th>Harga Angsuran</th>
    <th>Sisa Pinjaman</th>
    <th>Tanggal Pinjaman</th>
    </tr>
    </thead>
    <?php
        while ($row = $result -> fetch_assoc()):
    ?>
    <tr>
    <td><?php echo $row ['id_pinjaman']; ?></td>
    <td><?php echo $row ['id_anggota']; ?></td>
    <td><?php echo $row ['jumlah_pinjaman']; ?></td>
    <td><?php echo $row ['harga_angsuran']; ?></td>
    <td><?php echo $row ['sisa_pinjaman']; ?></td>
    <td><?php echo $row ['tanggal_pinjaman']; ?></td>
    <?php endwhile; ?>
    </tr>
    </table>
            <!-- display data selesai-->

    </body> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
<style>
    .jumbotron{
        background-image: url(gambar/uang.png);
        background-size: 100%;
    }
    body{
        background-image: url(gambar/latarlayarutama.jpg);
        background-size: 100%;
    }
    </style>
    <script>
    function kembali() {
  document.location = 'menu.php';
}
</script>