<?php
error_reporting(E_ALL);
include "config/koneksi.php";
ob_start();
session_start();

$module=$_GET['module'];
$act=$_GET['act'];

if (isset($_SESSION['id_petugas'])) {
	$id_petugas = $_SESSION['id_petugas'];
}else{
	$id_petugas = '';
}

if ($module=='kontrol' AND $act=='tgl'){	
	$id 				= $_POST['id_paket'];	
	$judul 				= $_POST['judul'];	
	$judul_en 			= $_POST['judul_en'];	
	$tujuan 			= $_POST['tujuan'];	
	$kuota 				= $_POST['kuota'];	
	$meeting_point 		= $_POST['meeting_point'];	
	$meeting_point_en 	= $_POST['meeting_point_en'];	
	$waktu 				= $_POST['waktu'];		
	$spot_tujuan 		= $_POST['spot_tujuan'];		
	$spot_tujuan_en 	= $_POST['spot_tujuan_en'];		
	$fasilitas 			= $_POST['fasilitas'];		
	$fasilitas_en 		= $_POST['fasilitas_en'];		
	$harga 				= $_POST['harga'];		
	$aktif 				= $_POST['aktif'];	

	$gambar 	= $_FILES['gambar']['name'];
	$tmp 		= $_FILES['gambar']['tmp_name'];
	$tmp_ext    = explode(".", $_FILES['gambar']['name']);
	$ext        = end($tmp_ext);
	$gambarbaru = crypt($gambar,"dianpw")."_.".$ext;
	$path 		= "../assets/img/".$gambarbaru;

	if(move_uploaded_file($tmp, $path)){
		$un = mysqli_query($koneksi, "SELECT `gambar` FROM `paket` WHERE `id_paket`='$_POST[id_paket]'");
		$rw=mysqli_fetch_array($un,MYSQLI_ASSOC);
		$file = "../assets/img/".$rw['gambar'];
		@unlink($file);

		$epaket = "UPDATE `paket` SET `judul`='$judul',`judul_en`='$judul_en',`tujuan`='$tujuan',`kuota`='$kuota',`meeting_point`='$meeting_point',`meeting_point_en`='$meeting_point_en',`waktu`='$waktu',`spot_tujuan`='$spot_tujuan',`spot_tujuan_en`='$spot_tujuan_en',`fasilitas`='$fasilitas',`fasilitas_en`='$fasilitas_en',`harga`='$harga',`gambar`='$gambarbaru',`aktif`='$aktif' WHERE `id_paket`='$id'";
	}else{
		$epaket = "UPDATE `paket` SET `judul`='$judul',`judul_en`='$judul_en',`tujuan`='$tujuan',`kuota`='$kuota',`meeting_point`='$meeting_point',`meeting_point_en`='$meeting_point_en',`waktu`='$waktu',`spot_tujuan`='$spot_tujuan',`spot_tujuan_en`='$spot_tujuan_en',`fasilitas`='$fasilitas',`fasilitas_en`='$fasilitas_en',`harga`='$harga',`aktif`='$aktif' WHERE `id_paket`='$id'";
	}
	$updatepaket = mysqli_query($koneksi, $epaket);
	if ($updatepaket) {
		header('Location: admin');
		exit;
	}

}elseif ($module=='kontrol' AND $act=='tambahtrip') {
		
	$judul 				= $_POST['judul'];	
	$judul_en 			= $_POST['judul_en'];	
	$tujuan 			= $_POST['tujuan'];	
	$kuota 				= $_POST['kuota'];	
	$meeting_point 		= $_POST['meeting_point'];	
	$meeting_point_en 	= $_POST['meeting_point_en'];	
	$waktu 				= $_POST['waktu'];		
	$spot_tujuan 		= $_POST['spot_tujuan'];		
	$spot_tujuan_en 	= $_POST['spot_tujuan_en'];		
	$fasilitas 			= $_POST['fasilitas'];		
	$fasilitas_en 		= $_POST['fasilitas_en'];		
	$harga 				= $_POST['harga'];		
	$aktif 				= $_POST['aktif'];	
    


	$gambar 	= $_FILES['gambar']['name'];
	$tmp 		= $_FILES['gambar']['tmp_name'];
	$tmp_ext    = explode(".", $_FILES['gambar']['name']);
	$ext        = end($tmp_ext);
	$gambarbaru = crypt($gambar,"dianpw")."_.".$ext;
	$path 		= "../assets/img/".$gambarbaru;
    
	if(move_uploaded_file($tmp, $path)){
		
		$tpaket = "INSERT INTO `paket`(`judul`, `judul_en`, `tujuan`, `kuota`, `meeting_point`, `meeting_point_en`, `waktu`, `spot_tujuan`, `spot_tujuan_en`, `fasilitas`, `fasilitas_en`, `harga`, `gambar`, `aktif`) VALUES ('$judul', '$judul_en', '$tujuan', '$kuota', '$meeting_point', '$meeting_point_en', '$waktu', '$spot_tujuan', '$spot_tujuan_en', '$fasilitas', '$fasilitas_en', '$harga', '$gambarbaru', '$aktif')";
	}
	$tambahpaket = mysqli_query($koneksi, $tpaket);
	if ($tambahpaket) {
		header('Location: admin');
		exit;
	}

}elseif ($module=='galeri' AND $act=='tambah') {
	$url_ig = $_POST['url_ig'];

	$tambah = mysqli_query($koneksi, "INSERT INTO `galeri`(`url_ig`) VALUES ('$url_ig')");
	
	if ($tambah) {
		header('Location: galeri');
		exit;
	}
	
}elseif ($module=='galeri' AND $act=='edit') {
	$id_galeri 	= $_POST['id_galeri'];
	$url_ig 	= $_POST['url_ig'];

	$edit = mysqli_query($koneksi, "UPDATE `galeri` SET `url_ig`='$url_ig' WHERE `id_galeri`='$id_galeri'");
	
	if ($edit) {
		header('Location: galeri');
		exit;
	}
	
}elseif ($module=='galeri' AND $act=='hapus') {
	$id_galeri = $_POST['id_galeri'];
	$hapus = mysqli_query($koneksi, "DELETE FROM `galeri` WHERE `id_galeri`='$id_galeri'");

	if ($hapus) {
		header('Location: galeri');
		exit;
	}
}elseif ($module=='info' AND $act=='edit') {
	$id_info 		= $_POST['id_info'];	
	$judul 			= $_POST['judul'];	
	$judul_en 		= $_POST['judul_en'];	
	$tgl_1 			= $_POST['tgl_1'];	
	$tgl_1_en 		= $_POST['tgl_1_en'];	
	$tgl_1_sisa 	= $_POST['tgl_1_sisa'];	
	$tgl_2 			= $_POST['tgl_2'];		
	$tgl_2_en 		= $_POST['tgl_2_en'];		
	$tgl_2_sisa 	= $_POST['tgl_2_sisa'];		
	$harga 			= $_POST['harga'];		
	$aktif 			= $_POST['aktif'];		
    
	$hapus = mysqli_query($koneksi, "UPDATE `info` SET `judul`='$judul',`judul_en`='$judul_en',`tgl_1`='$tgl_1',`tgl_1_en`='$tgl_1_en',`tgl_1_sisa`='$tgl_1_sisa',`tgl_2`='$tgl_2',`tgl_2_en`='$tgl_2_en',`tgl_2_sisa`='$tgl_2_sisa',`harga`='$harga',`aktif`='$aktif' WHERE `id_info`='$id_info'");

	if ($hapus) {
		header('Location: info');
		exit;
	}
}
