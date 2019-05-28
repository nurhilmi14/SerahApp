<?php
require_once("../koneksi.php");

$username		= $_POST['username'];
$nama		= $_POST['nama'];
$katasandi		= $_POST['katasandi'];
$email	= $_POST['email'];
$akses	= $_POST['akses'];
 
if($nama && $username && $katasandi){
	$insert = mysql_query("Insert into tbakun(username,nama,katasandi,email,akses) 
    values('$username','$nama','$katasandi','$email','$akses')");
	if($insert){
		echo 'Data berhasil disimpan!';
	}else{
		echo 'Gagal menyimpan data!';
	}
}else{
	echo 'Masukkan data dengan benar!';
}
?>