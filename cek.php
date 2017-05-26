
 <?php 
require 'koneksi.php';
$idmobil = $_GET['idmobil'];
$dres       = mysqli_query($koneksi, "select * from mobil where kode = '$idmobil'");

while ($drow=mysqli_fetch_array($dres))
		{ 
		  $lama             = $drow['tglkeluar'];
		  
		  if (isset($lama)) { $today=$lama; }
		  else { $today=date("Y-m-d"); }
		  
		}
header("location:output.php");
?>
