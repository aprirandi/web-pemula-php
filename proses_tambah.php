<?php session_start();
require_once("koneksi.php");
$email = $_POST['email'];
$password = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM tb_customer WHERE Email  = '$email'");
    $jumlah = mysql_num_rows($cekuser,$koneksi);
$hasil = mysql_fetch_array($cekuser,$koneksi);
if($jumlah == 0) {
echo "Username Belum Terdaftar!";
echo '<a href="sign in.php">? Back</a>';
} else {
if($password < $hasil['password']) {
echo "Password Salah!
";
echo '<a href="sign in.php">&amp;amp;laquo; Back</a>';
} else {
$_SESSION['email'] = $hasil['email'];
header('location:index.php');
}
}
?>