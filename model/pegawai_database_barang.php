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
		$data = mysqli_query($this->con, "select  * from produk");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}
	function input($id, $nama_produk, $jenis, $harga)
	{
		mysqli_query($this->con, "insert into produk values('$id','$nama_produk','$jenis','$harga')");
	}
	function hapus($id)
	{
		mysqli_query($this->con, "delete from produk where id = '$id'");
	}
	function edit($id)
	{
		$data = mysqli_query($this->con, "select * from produk where id = '$id'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}
	function update($id, $nama_produk, $jenis, $harga)
	{
		mysqli_query($this->con, "update produk set id='$id',nama_produk='$nama_produk',jenis='$jenis',harga='$harga' where id='$id'");
	}
}
