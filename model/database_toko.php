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
        $data = mysqli_query($this->con, "select  * from toko");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }
    function input($id_toko, $nama_toko, $alamat_toko, $telp)
    {
        mysqli_query($this->con, "insert into toko values('$id_toko','$nama_toko', '$alamat_toko','$telp')");
    }
    function hapus($id_toko)
    {
        mysqli_query($this->con, "delete from toko where id_toko = '$id_toko'");
    }
    function edit($id_toko)
    {
        $data = mysqli_query($this->con, "select * from toko where id_toko = '$id_toko'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }
    function update($id_toko, $nama_toko, $alamat_toko, $telp)
    {
        mysqli_query($this->con, "update toko set id_toko='$id_toko',nama_toko='$nama_toko', alamat_toko='$alamat_toko', telp='$telp' where id_toko='$id_toko'");
    }
}
