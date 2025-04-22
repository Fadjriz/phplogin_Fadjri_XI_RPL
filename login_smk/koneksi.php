<?php 
$koneksi = new mysqli("localhost","root","","db_pengguna");
if($koneksi->connect_error) {
    die("koneksi gagal:" . $koneksi->connect_error);
}
?>