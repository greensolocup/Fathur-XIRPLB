<?php
// file koneksi php -> MySQL
$host="localhost";
$user="root";
$pass="";//kosong
$db="ta";
// koneksi ke MySQL
$conn = mysqli_connect($host,$user,$pass,$db);

if (!$conn) {
    die("<script>alert('Gagal dalam menyambungkan database.')</script>");
}
?>