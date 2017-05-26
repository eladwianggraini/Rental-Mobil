<!DOCTYPE html>
<html lang="en">

<head>
  <script type="text/javascript">
                                 function cekData()
                                 {
                                 // Cek isi kotak teks idmobil
                                 if (login.idmobil.value == "")
                                 {
                                 alert("Idmobil Harus Di Isi");
                                 login.idmobil.focus();
                                 return false;
                                 }
                                 // Cek isi kotak teks jenis
                                 if (login.jenis.value == "")
                                 {
                                 alert("Nama Mobil Harus Di Isi");
                                 login.jenis.focus();
                                 return false;
                                 }
                                 // Cek isi kotak teks harga
                                 if (login.harga.value == "")
                                 {
                                 alert("Harga Harus Di Isi");
                                 login.harga.focus();
                                 return false;
                                 }
                                 // Cek isi kotak teks gambar
                                 if (login.gambar.value == "")
                                 {
                                 alert("Gambar Harus Di Isi");
                                 login.gambar.focus();
                                 return false;
                                 }
                                 else
                                 return true;
                                 }
  </script>
  
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
		
	<body bgcolor="#A9A9A9">
		<form id="login" action="simpanmobil.php" method="post" onsubmit="return cekData();">
			<h1>Input Mobil</h1><center>
	      <table>
	      	<tr>
	          <td>Id Mobil</td>
	          <td>:</td>
	          <td><input type="text" name="idmobil"></td>
	        </tr>
	        <tr>
	          <td>jenis</td>
	          <td>:</td>
	          <td><input type="text" name="jenis"></td>
	        </tr>
	        <tr>
	          <td>harga</td>
	          <td>:</td>
	          <td><input type="text" name="harga" ></td>
	        </tr>
	        <tr>
	          <td>gambar</td>
	          <td>:</td>
	          <td><input type="text" name="gambar"></td>
	        </tr>
	        <tr>
	          <td colspan="2"></td>
	          <td><button type="submit" class="btn btn-primary">Submit</button></td>
	        </tr>
	      </table>
	    </form>
	</body>
</html>