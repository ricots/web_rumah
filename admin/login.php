<?php
session_start(); // Memulai Session
$error=''; // Variabel untuk menyimpan pesan error
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Variabel username dan password
$username=$_POST['username'];
$password=$_POST['password'];
// Membangun koneksi ke database
$connection = mysql_connect("localhost", "root", "");
// Mencegah MySQL injection 
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Seleksi Database
$db = mysql_select_db("penjualan_pkl", $connection);
// SQL query untuk memeriksa apakah karyawan terdapat di database?
$query = mysql_query("select * from tbl_admin where password='$password' AND username ='$username'", $connection) or die(mysql_error());
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Membuat Sesi/session
header("location: home.php"); // Mengarahkan ke halaman profil
} else {
$error = "Username atau Password belum terdaftar";
}
mysql_close($connection); // Menutup koneksi
}
}
?>