<?php

// membuat koneksi
include 'koneksi.php';

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}
	$idmobil = $_POST['idmobil'];
	$jenis = $_POST['jenis'];
	$harga = $_POST['harga'];
	$gambar = $_POST['gambar'];
	
	$sql = "INSERT INTO mobil (idmobil, jenis, harga, gambar) 
	VALUES ('$idmobil', '$jenis', '$harga', '$gambar')";
	if($konek->query($sql)){
		echo "data berhasil ditambah";
		header("location:index.php");
}else{
  echo "Data Customer GAGAL ditambah : ".$konek->error."<br/>";
}

$konek->close();
?>