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
    $jumlah_pinjaman = $_POST['jumlah_pinjaman'];
    $harga_angsuran = $_POST['harga_angsuran'];
    $jumlah_angsuran = $_POST['jumlah_angsuran'];
    $tanggal_pinjaman = $_POST['tanggal_pinjaman'];
// KONEKSI KE DATABASE
$koneksi = new mysqli('localhost','root','','kspkitas_uas')or die (mysqli_error($mysqli));
$koneksi->query("INSERT INTO `pinjaman_berjalan` (`id_pinjaman`, `id_anggota`, `jumlah_pinjaman`, `harga_angsuran`, `sisa_pinjaman`, `tanggal_pinjaman`) VALUES (NULL, '$id_anggota', '$jumlah_pinjaman', '$harga_angsuran', '$jumlah_angsuran', '$tanggal_pinjaman');")
    or die ($mysqli->error);
}
header("Location: berhasilinputan.php");
?>

