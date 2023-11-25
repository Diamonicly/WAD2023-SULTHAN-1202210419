<?php 

// (1) Hapus cookie dengan key id 
setcookie('id', '', time() + (80000 * 31), "/");
// 

// (2) Mulai session
session_start();
//

// (3) Hapus semua session yang berlangsung
session_destroy();
//

// (4) Lakukan redirect ke halaman login awal
header('location:../views/login.php');
//

exit;

?>