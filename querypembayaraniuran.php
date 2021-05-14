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
    $id_pinjaman = $_POST['id_pinjaman'];
  
// KONEKSI KE DATABASE
$mysqli = new mysqli('localhost','root','','kspkitas_uas')or die (mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM `pinjaman_berjalan` WHERE `id_pinjaman` = '$id_pinjaman' ")or die ($mysqli->error);
}
while ($row = $result -> fetch_assoc()):
  $sebelumkurang = $row ['sisa_pinjaman'];
  $sesudahkurang = $sebelumkurang - 1;
endwhile;
$mysqli->query("UPDATE `pinjaman_berjalan` SET `sisa_pinjaman`='$sesudahkurang' WHERE `id_pinjaman` = '$id_pinjaman'")or die ($mysqli->error);
$mysqli->query("DELETE FROM `pinjaman_berjalan` WHERE `sisa_pinjaman` = '0'")or die ($mysqli->error);
header("Location: berhasilinputan.php");
?>