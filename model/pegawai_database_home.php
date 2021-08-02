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


    function tampil_barang()
    {
        $data = mysqli_query($this->con, "select COUNT(id) as jumlah from produk");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }
    function tampil_jual()
    {
        $data = mysqli_query($this->con, "select COUNT(id_order) as jumlah from `order`");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }
}
