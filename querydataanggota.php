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
$nama = $_POST['nama'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];
$tanggal_daftar = $_POST['tanggal_daftar'];
// KONEKSI KE DATABASE
$koneksi = new mysqli('localhost','root','','kspkitas_uas')or die (mysqli_error($mysqli));
$koneksi->query("INSERT INTO `data_anggota` (`id_anggota`, `nama`, `pekerjaan`, `alamat`, `tanggal_daftar`) VALUES (NULL, '$nama', '$pekerjaan', '$alamat', '$tanggal_daftar')")
    or die ($mysqli->error);
}
header("Location: berhasilinputan.php");
?>

