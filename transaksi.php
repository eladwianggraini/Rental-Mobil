<?php
include 'k.php';

$idmobil = $_GET["idmobil"];
//$idcustomer = $_GET["idcustomer"];

$query = mysql_query("UPDATE mobil SET status = 'Terpakai' WHERE idmobil = '$idmobil'");
//$query1 = mysql_query("UPDATE booking SET 'status' = 'Terpakai' WHERE idmobil = '$idmobil'");


if($query){
	header("location:status.php");
}else
	echo "GAGAL";
?>