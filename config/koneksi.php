<?php  
date_default_timezone_set('Asia/Jakarta');

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'profile';

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

//check connection 
if (mysqli_connect_errno()) {
	echo 'Koneksi database gagal : ' . mysqli_connect_errno();
}