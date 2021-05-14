<?php
session_start();
if(isset($_SESSION["username"])) {
    //Code to run if logged in

} else {
    //This will return the user to login page if the user is not logged in
    header("Location: index.php");
}
?>
    <!-- untuk ambil data dari form sebelumnya -->
<?php
if (isset($_POST['kirim'])){
    $id_anggota = $_POST['id_anggota'];
  
// KONEKSI KE DATABASE
$mysqli = new mysqli('localhost','root','','kspkitas_uas')or die (mysqli_error($mysqli));
}
$mysqli->query("DELETE FROM `data_anggota` WHERE `id_anggota` = '$id_anggota'")or die ($mysqli->error);
header("Location: berhasilhapus.php");
?>