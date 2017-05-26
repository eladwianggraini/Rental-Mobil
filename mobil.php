<html lang="en">
  <head>
    <title>Rental Mobil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <ul class="nav navbar-nav">
          <li class="active"><a href="http://localhost/ela/">Home</a></li>
          <li class="active"><a href="http://localhost/ela/admin.php">Input Mobil</a></li>
          <li class="active"><a href="http://localhost/ela/mobil.php">Data Mobil</a></li>
        </ul>
      </div>
    </nav>
  </body>
</html>
<html>
	<title>Data Mobil</title>
	<head>
	</head>
	<body bgcolor="#A9A9A9" >
		<?php 
		// membuat koneksi
		include 'koneksi.php';
		// mengecek koneksi
		$sql = "select * from mobil";
		if($konek->query($sql)){ 
			$data = $konek->query($sql); 
		?>
		<div class="main">
			<h1>Data Mobil</h1><center>
			<div class="list-mobil" >
				<?php if ($data->num_rows > 0) { ?> <!-- jika data ada dan lebih dari nol -->
				<ul>
					<?php //untuk membedakan idmobil tiap jenis mobil
					while ($row = $data->fetch_assoc()) { //perulangan untuk memanggil data mobil di database
					?>
					<li style="list-style:none !important;"> <!-- membuat list agar tidak terlihat -->
						<form action="customer.php" method="post">
							<table border="1">
								<tr>
									<td>
										<?php $id = $row['idmobil']; ?> 
										<input type="hidden" name="id" value="<?php echo $id; ?>">

										<?php $jenis = $row['jenis']; ?> 
										<input type="hidden" name="jenis" value="<?php echo $jenis; ?>">

										<?php $harga = $row['harga']; ?> 
										<input type="hidden" name="harga" value="<?php echo $harga; ?>">

										<?php $tgltersedia = $row['tgltersedia']; ?> 
										<input type="hidden" name="tgltersedia" value="<?php echo $tgltersedia; ?>">

										<?php $tglkosong = $row['tglkosong']; ?> 
										<input type="hidden" name="tglkosong" value="<?php echo $tglkosong; ?>">
									</td>
								</tr>
								<tr>
									<img src="foto/<?php echo $row['gambar']; ?> " height="100" width="100">
									<td><?php echo $row['jenis']?></td>
									<td><?php echo $row['idmobil']?></td>
									<td><?php echo $row['harga']?></td>
									<td><?php echo $row['status']?></td>
									
									<td><input type="submit" value="pesan"></td>
								</tr>
							</table>
						</form>
					</li>
					<?php 
						}
					?>
				</ul>
				<?php 
				} else{
					echo "Data Kosong!";
				}
				?>
			</div>
		</div>
		<?php 
		} else {
			$konek->error;
		}
		?>
	</body>
</html>