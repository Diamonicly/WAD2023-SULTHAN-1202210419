<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$host = "localhost:3308";
$username = "root";
$password = "";
$dbname = "modul4_jurnal";
$db = new mysqli($host, $username, $password, $dbname);

// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if ($db ->connect_error){
    die("Koneksi Gagal: " . mysqli_connect_error());
}
// 
 
?>