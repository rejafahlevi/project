<?php
// konfigurasi database
$host       =   "localhost";
$user       =   "root";
$password   =   "";
$database   =   "projek1";
// perintah php untuk akses ke database
$koneksi = mysqli_connect($host, $user, $password, $database);

if ($koneksi){
    echo "";
}else {
    echo"";
}
?>