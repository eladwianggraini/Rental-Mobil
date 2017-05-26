<?php

// membuat koneksi
include 'koneksi.php';

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}
	$namacustomer = $_POST['namacustomer'];
	$email = $_POST['email'];
	$notelp = $_POST['notelp'];
	$idmobil = $_POST['idmobil'];
	$tglpinjam = $_POST['tgltersedia'];							
	$tglkeluar = $_POST['tglkosong'];
	$harga = $_POST['harga'];
	$selisih = ((abs(strtotime($tglkeluar)-strtotime($tglpinjam)))/(60*60*24)); //absolut agar hasil tidak negatif, 
	$totalbayar = ($harga*$selisih);
	
	$sqll = "INSERT INTO booking (idcustomer, namacustomer, email, notelp, idmobil, tglpinjam, tglkeluar, harga) 
	VALUES (NULL, '$namacustomer', '$email', '$notelp', '$idmobil','$tglpinjam','$tglkeluar', '$totalbayar')";
	if($konek->query($sqll)){
			echo "data berhasil ditambah";
			header("location:cek.php");
	}else{
	  echo "Data Customer GAGAL ditambah : ".$konek->error."<br/>";
	}
	


//if($konek->query($sql)){
//		echo "sudah dipesan";
//	}
//	else{
//	  
//	  echo "data berhasil ditambah";
//		header("location:output.php");
//	}
//
	$konek->close();
	?>
