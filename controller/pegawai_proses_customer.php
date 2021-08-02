<?php
include "../model/pegawai_database_customer.php";
$db = new database();

$aksi = $_GET['aksi'];

if ($aksi == "tambah") {
	$db->input($_POST['kode_customer'], $_POST['nama_customer'], $_POST['usia_customer'], $_POST['alamat_customer']);
	header("location:../view/pegawai_tampil_customer.php");
} elseif ($aksi == "hapus") {
	$db->hapus($_GET['kode_customer']);
	header("location:../view/pegawai_tampil_customer.php");
} elseif ($aksi == "update") {
	$db->update($_POST['kode_customer'], $_POST['nama_customer'], $_POST['usia_customer'], $_POST['alamat_customer']);
	header("location:../view/pegawai_tampil_customer.php");
}
