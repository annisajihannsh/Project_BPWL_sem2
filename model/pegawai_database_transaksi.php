<?php

$conn = mysqli_connect('localhost', 'root', '', 'coffeshop');

if (!$conn) {
    die("Koneksi gagal. " . mysqli_connect_error()); // close koneksi
}
