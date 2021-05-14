<?php
session_start();
if(isset($_SESSION["username"])) {
    //Code to run if logged in

} else {
    //This will return the user to login page if the user is not logged in
    header("Location: index.php");
}
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
        <h1 class="display-4" style="text-align:center;">Menu Utama</h1>
        <p class="lead"style="text-align:center;" >Selamat datang di sistem koperasi masa kini! Silahkan pilih salah satu dari menu berikut ini.</p>
    </div>
    <div class ="row justify-content-center"> 
    <button type="button" class="btn btn-success"onclick="inputdataanggota()">Input Data Anggota</button>
    </div><br>
    <div class ="row justify-content-center"> 
    <button type="button" class="btn btn-success"onclick="inputpinjamanbaru()">Input Pinjaman Baru</button>
    </div><br>
    <div class ="row justify-content-center">
    <button type="button" class="btn btn-success"onclick="inputpembayaraniuran()">Input Pembayaran Iuran</button>
    </div><br>
    <div class ="row justify-content-center">
    <button type="button" class="btn btn-success"onclick="lihatdata()">Lihat Data</button>&nbsp;
    <button type="button" class="btn btn-success"onclick="hapusdata()">Hapus Data</button>
    </div><br>
    <div class ="row justify-content-center">
    <button type="button" class="btn btn-success"onclick="ambillaporan()">Ambil Laporan</button>
    </div><br>
    <div class ="row justify-content-center">
    <a href="#" class="btn btn-info btn-lg" onclick="logout()">
    <span class="glyphicon glyphicon-log-out"></span> Log out 
    </a>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
</body>
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
    <!-- fungsi tombol, sudah work jangan dihapus -->
<script>
function logout() {
  document.location = 'logout.php';
}
function inputdataanggota() {
  document.location = 'inputdataanggota.php';
}
function inputpinjamanbaru() {
  document.location = 'inputpinjamanbaru.php';
}
function inputpembayaraniuran() {
  document.location = 'inputpembayaraniuran.php';
}
function lihatdata() {
  document.location = 'lihatdata.php';
}
function hapusdata() {
  document.location = 'hapusdata.php';
}
function ambillaporan() {
  document.location = 'ambillaporan.php';
}
</script>
