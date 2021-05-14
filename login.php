<?php
// KONEKSI KE DATABASE
$koneksi = new mysqli('localhost','root','','kspkitas_uas')or die (mysqli_error($mysqli));
?>
 
<?php
// PROSES LOGIN
if($_POST['login']){
	$user = $_POST['username'];
	$pass = $_POST['password'];
	if($user && $pass){
		$result = $koneksi->query("SELECT * FROM login WHERE username='$user'");
            $row = $result -> fetch_assoc();
			$db_user = $row['username'];
			$db_pass = $row['password'];
 
			if($user == $db_user && $pass == $db_pass){
				// masukkan script lainnya disini
				// seperti Session atau redirect ke halaman admin
				session_start();
				$_SESSION['username'] = $user;
                header ("location: menu.php");
			}else{
                header ("location: index.php");
				echo '<p>Username dan Password tidak cocok!</p>';
			}
		
	}
}
?>