<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "dbbem";
 
$koneksi = mysqli_connect($host, $user, $pass, $name) or die("Koneksi ke database gagal!");
// mysqli_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>