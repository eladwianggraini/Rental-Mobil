<!DOCTYPE html>
<html lang="en">

<head>
	<title>Pesan Mobil</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rental Mobil Ela Dwi Anggraini</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 </head>

<body>


    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Rental Mobil</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="http://localhost/ela/">Data Mobil</a>
                    </li>
                    <li>
                        <a href="#">Admin</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	


		<?php 
		// membuat koneksi
		include 'koneksi.php';
		// mengecek koneksi
		$sql = "select * from booking ORDER BY idcustomer DESC LIMIT 1";
		
		if($konek->query($sql)){ 
			$data = $konek->query($sql); 
		?>
		<div class="main">
			<div class="list-customer" >
				<?php if ($data->num_rows > 0) { ?> <!-- jika data ada dan lebih dari nol -->
				<ul>
					<?php //untuk membedakan idmobil tiap jenis mobil
					while ($row = $data->fetch_assoc()) { //perulangan untuk memanggil data mobil di database
						$idmobil = $row['idmobil'];
					?>
					<li style="list-style:none !important;"> <!-- membuat list agar tidak terlihat -->
						
							<table border="1", style="background-color: yellow;">
							<h1>Transaksi Pesan</h1>
							<tr>
								<td>
								<form action="transaksi.php" method="get">
									<table>
										<h1>Rental Mobil Yogyakarta</h1>
										<tr>
											<td>Id Customer</td>
											<td>:</td>
											<td><?php echo $row['idcustomer']?></td>
											
										</tr>
										<tr>
											<td>Id Mobil</td>
											<td>:</td>
											<td><?php echo $row['idmobil']?></td>
										</tr>
										<tr>
											<td>Nama Customer</td>
											<td>:</td>
											<td><?php echo $row['namacustomer']?></td>
										</tr>
										<tr>
											<td>Tanggal Pinjam</td>
											<td>:</td>
											<td><?php echo $row['tglpinjam']?></td>
										</tr>
										<tr>
											<td>Tanggal Kembali</td>
											<td>:</td>
											<td><?php echo $row['tglkeluar']?></td>
										</tr>
										<tr>
											<td>Harga</td>
											<td>:</td>
											<td><?php echo $row['harga']?></td>
										</tr>
										<tr>
								        	<td colspan="2"></td>
								         	<td><?php echo '<td> <a href="transaksi.php?idmobil='.$row['idmobil'].'">Bayar</a></td>';?></td> <!--menunjuk databasenya -->
								        </tr>		
									</table>
								</form>
								</td>
							</tr>
						</table>
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