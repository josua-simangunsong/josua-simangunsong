    <!-- Fungsi logout, sudah work jangan dihapus -->
<?php
session_start();
//untuk reset session
// remove all session variables
session_unset();
// destroy the session
session_destroy();
header ("location: index.php");
?> 