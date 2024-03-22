<?php
//koneksi ke database
$sname = "localhost";
$unmae = "root";
$password = "";

$db_name = "alfaruk";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);
//apabila koneksi gagal
if (!$conn) {
	echo "Connection failed!";
}
