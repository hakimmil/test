<?php 

if (!isset($_GET['module'])) {
	header('Location: logout');
}

elseif ($_GET['module']=='resume') {
	include 'resume.php';
}

elseif ($_GET['module']=='tambah_kemampuan') {
	include 'tambah_kemampuan.php';
}
elseif ($_GET['module']=='edit_kemampuan') {
	include 'edit_kemampuan.php';
}
elseif ($_GET['module']=='hapus_kemampuan') {
	include 'hapus_kemampuan.php';
}

elseif ($_GET['module']=='tambah_pendidikan') {
	include 'tambah_pendidikan.php';
}
elseif ($_GET['module']=='edit_pendidikan') {
	include 'edit_pendidikan.php';
}
elseif ($_GET['module']=='hapus_pendidikan') {
	include 'hapus_pendidikan.php';
}

elseif ($_GET['module']=='tambah_pengalaman') {
	include 'tambah_pengalaman.php';
}
elseif ($_GET['module']=='edit_pengalaman') {
	include 'edit_pengalaman.php';
}
elseif ($_GET['module']=='hapus_pengalaman') {
	include 'hapus_pengalaman.php';
}

elseif ($_GET['module']=='portofolio') {
	include 'portofolio.php';
}

elseif ($_GET['module']=='tambah_portofolio') {
	include 'tambah_portofolio.php';
}
elseif ($_GET['module']=='edit_portofolio') {
	include 'edit_portofolio.php';
}
elseif ($_GET['module']=='hapus_portofolio') {
	include 'hapus_portofolio.php';
}

elseif ($_GET['module']=='services') {
	include 'services.php';
}
elseif ($_GET['module']=='tambah_services') {
	include 'tambah_services.php';
}
elseif ($_GET['module']=='edit_services') {
	include 'edit_services.php';
}
elseif ($_GET['module']=='hapus_services') {
	include 'hapus_services.php';
}

elseif ($_GET['module']=='sosmed') {
	include 'sosmed.php';
}
elseif ($_GET['module']=='tambah_sosmed') {
	include 'tambah_sosmed.php';
}
elseif ($_GET['module']=='edit_sosmed') {
	include 'edit_sosmed.php';
}
elseif ($_GET['module']=='hapus_sosmed') {
	include 'hapus_sosmed.php';
}
else {
	header('Location: logout');
}
?>