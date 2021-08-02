<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../model/koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if ($data['level'] == "Admin") {

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Admin";
		// alihkan ke halaman dashboard admin
		header("location:../view/dashboard_admin.php");

		// cek jika user login sebagai pegawai
	} else if ($data['level'] == "Pegawai") {
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Pegawai";
		// alihkan ke halaman dashboard pegawai
		header("location:../view/dashboard_pegawai.php");

		// cek jika user login sebagai pengurus
	} else if ($data['level'] == "pengurus") {
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pengurus";
		// alihkan ke halaman dashboard pengurus
		header("location:../view/halaman_pengurus.php");
	} else {

		// alihkan ke halaman login kembali
		header("location:../view/index.php?pesan=gagal1");
	}
} else {
	header("location:../view/index.php?pesan=gagal2");
}
