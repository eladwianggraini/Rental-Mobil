<!DOCTYPE html>
<html lang="en">

<head>

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

    <script type="text/javascript">
                               function cekData()
                               {
                               // Cek isi kotak teks namacustomer
                               if (login.namacustomer.value == "")
                               {
                               alert("Nama Harus Di Isi");
                               login.namacustomer.focus();
                               return false;
                               }
                               // Cek isi kotak teks email
                               if (login.email.value == "")
                               {
                               alert("Email Harus Di Isi");
                               login.email.focus();
                               return false;
                               }
                               // Cek isi kotak teks notelp
                               if (login.notelp.value == "")
                               {
                               alert("No Telepon Harus Di Isi");
                               login.notelp.focus();
                               return false;
                               }
                               else
                               return true;
                               }
    </script>

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
    
		<?php //menampilkan id dari mobil
			$idmobil = $_POST['id'];
			$jenis = $_POST['jenis'];
			$harga = $_POST['harga'];
			$tgltersedia = $_POST['tgltersedia'];
			$tglkosong = $_POST['tglkosong'];	
		?>
      
		<form id="login" action="simpancustomer.php" method="POST" onsubmit="return cekData();">
			<h1>Pesan</h1><center>
	      <table>
	      	<tr>
	          <td>Id Mobil</td>
	          <td>:</td>
	          <td><input type="text" name="idmobil" value="<?php echo $idmobil ?>"></td>
	        </tr>
	        <tr>
	          <td>Mobil</td>
	          <td>:</td>
	          <td><input type="text" name="jenis" value="<?php echo $jenis ?>"></td>
	        </tr>
	        <tr>
	          <td>Harga</td>
	          <td>:</td>
	          <td><input type="text" name="harga" value="<?php echo $harga ?>"></td>
	        </tr>
	        <tr>
	        <tr>
	          <td>Nama</td>
	          <td>:</td>
	          <td><input type="text" name="namacustomer"></td>
	        </tr>
	        <tr>
	          <td>Email</td>
	          <td>:</td>
	          <td><input type="text" name="email" ></td>
	        </tr>
	        <tr>
	          <td>No Telp</td>
	          <td>:</td>
	          <td><input type="text" name="notelp"></td>
	        </tr>
	        <tr>
	          <td>Tgl pinjam</td>
	          <td>:</td>
	          <td><input type="date" name="tgltersedia" ></td>
	        </tr>
	        <tr>
	          <td>Tgl kembali</td>
	          <td>:</td>
	          <td><input type="date" name="tglkosong" ></td>
	        </tr>
	        <tr>
	          <td colspan="2"></td>
	          <td><button type="submit" class="btn btn-primary">Submit</button></td>
	        </tr>
	      </table>
	    </form>
</script>
	</body>
</html>