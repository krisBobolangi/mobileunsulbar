<?php

$server = "localhost";
$user = "root";
$pasword = "kopi";
$nama_database = "pendaftaran_siswa";

$db = mysql_connect($server, $user, $pasword, $nama_database);

if( !$db){
    die ("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>