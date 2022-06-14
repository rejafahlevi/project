<?php
//Include file koneksi ke database
include "config.php";

//menerima nilai dari kiriman form input-barang 
$username=$_POST["username"];
$password=$_POST["password"];

//Query input menginput data kedalam tabel barang
  $sql="insert into user (username,password) values
		('$username','$password')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi, $sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	header('location: login.php?status=sukses');
	exit;
  }
else {
	header('location: registrasi.php?status=gagal');
	exit;
}  

?>
                