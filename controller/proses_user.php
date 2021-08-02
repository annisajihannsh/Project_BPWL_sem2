<?php
include "../model/database_user.php";
$db = new database();

$aksi = $_GET['aksi'];

if ($aksi == "tambah") {
	$db->input($_POST['id'], $_POST['nama'], $_POST['username'], $_POST['password'], $_POST['level']);
	header("location:../view/tampil_user.php");
} elseif ($aksi == "hapus") {
	$db->hapus($_GET['id']);
	header("location:../view/tampil_user.php");
} elseif ($aksi == "update") {
	$db->update($_POST['id'], $_POST['nama'], $_POST['username'], $_POST['password'], $_POST['level']);
	header("location:../view/tampil_user.php");
}
