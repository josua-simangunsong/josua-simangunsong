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

// Create database connection 
$db = new mysqli('localhost','root','','kspkitas_uas')or die (mysqli_error($mysqli));

// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}
?>
<?php 
 
// Filter the excel data 
function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 
 
// Excel file name for download 
$fileName = "Laporan_Pinjaman_" . date('Ymd') . ".xls"; 
 
// Column names 
$fields = array('ID Pinjaman', 'ID Anggota', 'Jumlah Pinjaman', 'Harga Angsuran', 'Sisa Angsuran', 'Tanggal Pinjaman'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Get records from the database 
$query = $db->query("SELECT * FROM pinjaman_berjalan"); 
if($query->num_rows > 0){ 
    // Output each row of the data 
    $i=0; 
    while($row = $query->fetch_assoc()){ $i++; 
        $rowData = array($row['id_pinjaman'], $row['id_anggota'], $row['jumlah_pinjaman'], $row['harga_angsuran'], $row['sisa_pinjaman'], $row['tanggal_pinjaman']); 
        array_walk($rowData, 'filterData'); 
        $excelData .= implode("\t", array_values($rowData)) . "\n"; 
    } 
}else{ 
    $excelData .= 'No records found...'. "\n"; 
     
} 
 
// Headers for download 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
header("Content-Type: application/vnd.ms-excel"); 
 
// Render excel data 
echo $excelData;
exit;
?>