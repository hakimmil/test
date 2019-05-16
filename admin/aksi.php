<?php 
error_reporting(E_ALL);

include '../config/koneksi.php';
ob_start();
session_start();

$module = $_GET['module'];
$act = $_GET['act'];

if (isset($_SESSION['id'])) {
	$id = $_SESSION['id'];
}
else {
	$id = '';
}

if ($module=='resume' AND $act=='edit') {
	$id_biodata 			= $_POST['id_biodata'];	
	$nama 					= $_POST['nama'];	
	$tanggal_lahir 			= $_POST['tanggal_lahir'];	
	$kota 					= $_POST['kota'];	
	$panggilan 				= $_POST['panggilan'];	
	$alamat 				= $_POST['alamat'];	
	$email 					= $_POST['email'];	
	$no_telp 				= $_POST['no_telp'];		
	$resume 				= $_POST['resume'];	


	$foto 					= $_FILES['foto']['name'];	
	$tmp 					=$_FILES['foto']['tmp_name'];
	$tmp_ext 				= explode(".", $_FILES['foto']['name']);
	$ext 					= end($tmp_ext);
	$fotobaru 				= crypt($foto,"hakimmil").".".$ext;
	$path 					= "../img/".$fotobaru;

	if(move_uploaded_file($tmp, $path)){
		$un = mysqli_query($conn,"SELECT foto FROM biodata WHERE id_biodata = '$_POST[id_biodata]'");
		$rw=mysqli_fetch_array($un,MYSQLI_ASSOC);
		$file = "../img/".$rw['foto'];
		@unlink($file);

		$edit = "UPDATE `biodata` SET `nama`='$nama',`tanggal_lahir`='$tanggal_lahir',`kota`='$kota',`panggilan`='$panggilan',`alamat`='$alamat',`email`='$email',`no_telp`='$no_telp',`resume`='$resume',`foto`='$fotobaru' WHERE `id_biodata`='$id_biodata'";
	}
	else {
		$edit = "UPDATE `biodata` SET `nama`='$nama',`tanggal_lahir`='$tanggal_lahir',`kota`='$kota',`panggilan`='$panggilan',`alamat`='$alamat',`email`='$email',`no_telp`='$no_telp',`resume`='$resume' WHERE `id_biodata`='$id_biodata'";
	}

	$update = mysqli_query($conn, $edit);
	if ($update) {
		header("Location: resume");
		exit;
	}
	
}

elseif ($module=='kemampuan' AND $act=='tambah') {
	$id_kemampuan 			= $_POST['id_kemampuan'];	
	$nama 					= $_POST['nama'];	
	$persentasi 			= $_POST['kemampuan'];	

    $kemampuan = "INSERT INTO `kemampuan`(`nama`, `persentasi`) VALUES ('$nama', '$persentasi')";

	$tambah = mysqli_query($conn, $kemampuan);
	if ($tambah) {
		header("Location: resume");
		exit;
	}
	
}

elseif ($module=='kemampuan' AND $act=='edit') {
	$id_kemampuan 			= $_POST['id_kemampuan'];	
	$nama 					= $_POST['nama'];	
	$persentasi 			= $_POST['persentasi'];	

    $kemampuan = "UPDATE `kemampuan` SET `nama`='$nama',`persentasi`='$persentasi' WHERE `id_kemampuan`='$id_kemampuan'";

	$edit = mysqli_query($conn, $kemampuan);
	if ($edit) {
		header("Location: resume");
		exit;
	}
	
}

elseif ($module=='kemampuan' AND $act=='hapus') {
	$id_kemampuan 			= $_POST['id_kemampuan'];	
	$nama 					= $_POST['nama'];	
	$persentasi 			= $_POST['persentasi'];	

    $hapus = mysqli_query($conn, "DELETE FROM `kemampuan` WHERE `id_kemampuan`='$id_kemampuan'");

	if ($hapus) {
		header("Location: resume");
		exit;
	}
	
}

elseif ($module=='pendidikan' AND $act=='tambah') {
	$id_pendidikan 			= $_POST['id_pendidikan'];	
	$nama 					= $_POST['nama'];	
	$tahun_masuk 			= $_POST['tahun_masuk'];	
	$tahun_lulus 			= $_POST['tahun_lulus'];	
	$prodi 					= $_POST['prodi'];	

    $edu = "INSERT INTO `pendidikan`(`nama_instansi`, `tahun_masuk`, `tahun_lulus`, `prodi`) VALUES ('$nama', '$tahun_masuk', '$tahun_lulus', '$prodi')";
	// echo $edu;
  	$tambah = mysqli_query($conn,$edu);

	if ($tambah) {
		header("Location: resume");
		exit;
	}
	
}

elseif ($module=='pendidikan' AND $act=='edit') {
	$id_pendidikan 			= $_POST['id_pendidikan'];	
	$nama 					= $_POST['nama'];	
	$tahun_masuk 			= $_POST['tahun_masuk'];	
	$tahun_lulus 			= $_POST['tahun_lulus'];	
	$prodi 					= $_POST['prodi'];	

    $pendidikan = "UPDATE `pendidikan` SET `nama_instansi`='$nama',`tahun_masuk`='$tahun_masuk',`tahun_lulus`='$tahun_lulus',`prodi`='$prodi' WHERE `id_pendidikan`='$id_pendidikan'";


	$edit = mysqli_query($conn, $pendidikan);
	if ($edit) {
		header("Location: resume");
		exit;
	}
	
}

elseif ($module=='pendidikan' AND $act=='hapus') {
	$id_pendidikan 			= $_POST['id_pendidikan'];	
	$nama 					= $_POST['nama'];	
	$tahun_masuk 			= $_POST['tahun_masuk'];	
	$tahun_lulus 			= $_POST['tahun_lulus'];	
	$prodi 					= $_POST['prodi'];	

    $hapus = mysqli_query($conn, "DELETE FROM `pendidikan` WHERE `id_pendidikan`='$id_pendidikan'");

	if ($hapus) {
		header("Location: resume");
		exit;
	}
	
}

elseif ($module=='pengalaman' AND $act=='tambah') {
	$id_pengalaman 			= $_POST['id_pengalaman'];	
	$nama 					= $_POST['nama'];	
	$tahun_masuk 			= $_POST['tahun_masuk'];	
	$tahun_selesai 			= $_POST['tahun_selesai'];	
	$tempat 				= $_POST['tempat'];	
	$keterangan				= $_POST['keterangan'];	


    $exp = "INSERT INTO `pengalaman`(`nama`, `tahun_masuk`, `tahun_selesai`, `tempat`, `keterangan`) VALUES ('$nama', '$tahun_masuk', '$tahun_selesai', '$tempat', '$keterangan')";
	// echo $edu;
  	$tambah = mysqli_query($conn,$exp);

	if ($tambah) {
		header("Location: resume");
		exit;
	}
	
}

elseif ($module=='pengalaman' AND $act=='edit') {
	$id_pengalaman 			= $_POST['id_pengalaman'];	
	$nama 					= $_POST['nama'];	
	$tahun_masuk 			= $_POST['tahun_masuk'];	
	$tahun_selesai 			= $_POST['tahun_selesai'];	
	$tempat 				= $_POST['tempat'];	
	$keterangan				= $_POST['keterangan'];	

    $exp = "UPDATE `pengalaman` SET `nama`='$nama',`tahun_masuk`='$tahun_masuk',`tahun_selesai`='$tahun_selesai',`tempat`='$tempat',`keterangan`='$keterangan' WHERE `id_pengalaman`='$id_pengalaman'";


	$edit = mysqli_query($conn, $exp);
	if ($edit) {
		header("Location: resume");
		exit;
	}
	
}

elseif ($module=='pengalaman' AND $act=='hapus') {
	$id_pengalaman 			= $_POST['id_pengalaman'];	
	$nama 					= $_POST['nama'];	
	$tahun_masuk 			= $_POST['tahun_masuk'];	
	$tahun_selesai 			= $_POST['tahun_selesai'];	
	$tempat 				= $_POST['tempat'];	
	$keterangan				= $_POST['keterangan'];	

    $hapus = mysqli_query($conn, "DELETE FROM `pengalaman` WHERE `id_pengalaman`='$id_pengalaman'");

	if ($hapus) {
		header("Location: resume");
		exit;
	}
	
}


elseif ($module=='portofolio' AND $act=='tambah'){
	$id_portofolio 			= $_POST['id_portofolio'];	
	$nama 					= $_POST['nama'];	
	$keterangan 			= $_POST['keterangan'];	
	$waktu 					= $_POST['waktu'];	


	$foto 					= $_FILES['foto']['name'];	
	$tmp 					= $_FILES['foto']['tmp_name'];
	$tmp_ext 				= explode(".", $_FILES['foto']['name']);
	$ext 					= end($tmp_ext);
	$fotobaru 				= crypt($foto,"hakimmil").".".$ext;
	$path 					= "../img/".$fotobaru;

	if(move_uploaded_file($tmp, $path)){

		$port = "INSERT INTO `portofolio`(`nama`, `keterangan`, `waktu`, `foto`) VALUES ('$nama', '$keterangan', '$waktu', '$fotobaru')";
	}

	$tambah = mysqli_query($conn, $port);
	if ($tambah) {
		header("Location: portofolio");
		exit;
	}

}

elseif ($module=='portofolio' AND $act=='edit'){
	$id_portofolio 			= $_POST['id_portofolio'];	
	$nama 					= $_POST['nama'];	
	$keterangan 			= $_POST['keterangan'];	
	$waktu 					= $_POST['waktu'];	


	$foto 					= $_FILES['foto']['name'];	
	$tmp 					= $_FILES['foto']['tmp_name'];
	$tmp_ext 				= explode(".", $_FILES['foto']['name']);
	$ext 					= end($tmp_ext);
	$fotobaru 				= crypt($foto,"hakimmil").".".$ext;
	$path 					= "../img/".$fotobaru;

	if(move_uploaded_file($tmp, $path)){
		$un = mysqli_query($conn,"SELECT foto FROM portofolio WHERE id_portofolio = '$_POST[id_portofolio]'");
		$rw=mysqli_fetch_array($un,MYSQLI_ASSOC);
		$file = "../img/".$rw['foto'];
		@unlink($file);

		$edit = "UPDATE `portofolio` SET `nama`='$nama',`keterangan`='$keterangan',`waktu`='$waktu',`foto`='$fotobaru' WHERE `id_portofolio`='$id_portofolio'";
	}
	else {
		$edit = "UPDATE `portofolio` SET `nama`='$nama',`keterangan`='$keterangan',`waktu`='$waktu' WHERE `id_portofolio`='$id_portofolio'";
	}

	$update = mysqli_query($conn, $edit);
	if ($update) {
		header("Location: portofolio");
		exit;
	}
}


elseif ($module=='portofolio' AND $act=='hapus'){
	$id_portofolio 			= $_POST['id_portofolio'];

    $hapus = mysqli_query($conn, "DELETE FROM `portofolio` WHERE `id_portofolio`='$id_portofolio'");

	if ($hapus) {
		header("Location: portofolio");
		exit;
	}
}


elseif ($module=='services' AND $act=='tambah'){
	$id_services 			= $_POST['id_services'];	
	$nama 					= $_POST['nama'];	
	$keterangan 			= $_POST['keterangan'];	
	$icon 					= $_POST['icon'];	



    $serv = "INSERT INTO `services`(`nama`, `keterangan`, `icon`) VALUES ('$nama', '$keterangan', '$icon')";
	// echo $edu;
  	$tambah = mysqli_query($conn,$serv);

	if ($tambah) {
		header("Location: services");
		exit;
	}
}

elseif ($module=='services' AND $act=='edit'){
	$id_services 			= $_POST['id_services'];	
	$nama 					= $_POST['nama'];	
	$keterangan 			= $_POST['keterangan'];	
	$icon 					= $_POST['icon'];	

    $serv = "UPDATE `services` SET `nama`='$nama',`keterangan`='$keterangan',`icon`='$icon' WHERE `id_services`='$id_services'";


	$edit = mysqli_query($conn, $serv);
	if ($edit) {
		header("Location: services");
		exit;
	}
	
}
elseif ($module=='services' AND $act=='hapus'){
	$id_services 			= $_POST['id_services'];

    $hapus = mysqli_query($conn, "DELETE FROM `services` WHERE `id_services`='$id_services'");

	if ($hapus) {
		header("Location: services");
		exit;
	}
}

elseif ($module=='sosmed' AND $act=='tambah'){
	$id_sosmed 				= $_POST['id_sosmed'];	
	$nama 					= $_POST['nama'];	
	$link 					= $_POST['link'];	
	$icon 					= $_POST['icon'];	



    $serv = "INSERT INTO `sosmed`(`nama`, `link`, `icon`) VALUES ('$nama', '$link', '$icon')";
	// echo $edu;
  	$tambah = mysqli_query($conn,$serv);

	if ($tambah) {
		header("Location: sosmed");
		exit;
	}
}
elseif ($module=='sosmed' AND $act=='edit'){
	$id_sosmed 				= $_POST['id_sosmed'];	
	$nama 					= $_POST['nama'];	
	$link 					= $_POST['link'];	
	$icon 					= $_POST['icon'];	

    $serv = "UPDATE `sosmed` SET `nama`='$nama',`link`='$link',`icon`='$icon' WHERE `id_sosmed`='$id_sosmed'";


	$edit = mysqli_query($conn, $serv);
	if ($edit) {
		header("Location: sosmed");
		exit;
	}
}
elseif ($module=='sosmed' AND $act=='hapus'){
	$id_sosmed 			= $_POST['id_sosmed'];

    $hapus = mysqli_query($conn, "DELETE FROM `sosmed` WHERE `id_sosmed`='$id_sosmed'");

	if ($hapus) {
		header("Location: sosmed");
		exit;
	}
}
else {
	header("Location: logout");
	exit;
}
?>