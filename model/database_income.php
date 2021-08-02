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


    function tampil_income()
    {
        $data = mysqli_query($this->con, "select CONCAT(YEAR(tgl_transaksi)) AS tahun, (MONTH(tgl_transaksi)) AS bulan, SUM(total_bayar) AS total_pendapatan FROM `order` GROUP BY YEAR(tgl_transaksi),MONTH(tgl_transaksi)");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }
}
