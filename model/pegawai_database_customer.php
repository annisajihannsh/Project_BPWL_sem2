<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'coffeshop');
class database
{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "coffeshop";
	var $con;

	function __construct()
	{
		$this->con = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		mysqli_select_db($this->con, $this->db);
	}


	function tampil_data()
	{
		$data = mysqli_query($this->con, "select  * from customer");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}
	function input($kode_customer, $nama_customer, $usia_customer, $alamat_customer)
	{
		mysqli_query($this->con, "insert into customer values('$kode_customer','$nama_customer', '$usia_customer','$alamat_customer')");
	}
	function hapus($kode_customer)
	{
		mysqli_query($this->con, "delete from customer where kode_customer = '$kode_customer'");
	}
	function edit($kode_customer)
	{
		$data = mysqli_query($this->con, "select * from customer where kode_customer = '$kode_customer'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}
	function update($kode_customer, $nama_customer, $usia_customer, $alamat_customer)
	{
		mysqli_query($this->con, "update customer set kode_customer='$kode_customer',nama_customer='$nama_customer', usia_customer='$usia_customer', alamat_customer='$alamat_customer' where kode_customer='$kode_customer'");
	}
}
