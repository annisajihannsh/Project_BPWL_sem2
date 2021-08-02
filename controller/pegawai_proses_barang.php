<?php
include "../model/pegawai_database_barang.php";
$db = new database();

$aksi = $_GET['aksi'];

if ($aksi == "tambah") {
	$db->input($_POST['id'], $_POST['nama_produk'], $_POST['jenis'], $_POST['harga']);
	header("location:../view/pegawai_tampil_barang.php");
} elseif ($aksi == "hapus") {
	$db->hapus($_GET['id']);
	header("location:../view/pegawai_tampil_barang.php");
} elseif ($aksi == "update") {
	$db->update($_POST['id'], $_POST['nama_produk'], $_POST['jenis'], $_POST['harga']);
	header("location:../view/pegawai_tampil_barang.php");
}
