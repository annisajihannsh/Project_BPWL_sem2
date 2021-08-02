<?php
include "../model/database_toko.php";
$db = new database();

$aksi = $_GET['aksi'];

if ($aksi == "tambah") {
    $db->input($_POST['id_toko'], $_POST['nama_toko'], $_POST['alamat_toko'], $_POST['telp']);
    header("location:../view/toko.php");
} elseif ($aksi == "hapus") {
    $db->hapus($_GET['id_toko']);
    header("location:../view/toko.php");
} elseif ($aksi == "update") {
    $db->update($_POST['id_toko'], $_POST['nama_toko'], $_POST['alamat_toko'], $_POST['telp']);
    header("location:../view/toko.php");
}
