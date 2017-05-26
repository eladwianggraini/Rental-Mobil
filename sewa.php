



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title></title>
	 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/1-col-portfolio.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
   <script type="text/javascript">
                               function cekData()
                               {
                               // Cek isi kotak teks username
                               if (login.nama.value == "")
                               {
                               alert("Nama Harus Di Isi");
                               login.nama.focus();
                               return false;
                               }
                               // Cek isi kotak teks password
                               if (login.alamat.value == "")
                               {
                               alert("Alamat Harus Di Isi");
                               login.alamat.focus();
                               return false;
                               }
                                if (login.alamat.value == "")
                               {
                               alert("Tglbalik Harus Di Isi");
                               login.tglbalik.focus();
                               return false;
                               }
                               else
                               return true;
                               }
               </script>
</head>
<body>
	<?php
		include("conector.php");
    $namamobil=$_GET['namamobil'];
    $tglbalik = $_GET['tglbalik'];
    $query    =mysqli_query($connect, "select * from mobil where namamobil='$namamobil'");

     while($x=mysqli_fetch_array($query)){
      $harga=$x['harga_sewa'];
      $lama= $dx['tglbalik'];
    } 
      
      if (isset($lama)) { $today=$lama; }
      else { $today=date("Y-m-d"); }
      
	?>
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
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <br>
    <br>


    <div class="container">
				<form id="login" action="sewa_simpan.php" method="post" onsubmit="return cekData();">
				<div class="content">
					<div class="artikel">
				<form class="form-horizontal">
			<form action="sewa_simpan" method="post">
  <div class="form-group">
    <label for="nama" class="col-sm-2 control-label">NAMA</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="nama" name="nama" placeholder="NAMA ANDA">
    </div>
  </div>
  <div class="form-group">
    <label for="alamat" class="col-sm-2 control-label">ALAMAT</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat ANDA">
    </div>
  </div>
  <div class="form-group">
   <label for="namamobil" class="col-sm-2 control-label">Mobil</label>
    <div class="col-sm-9">
    <input type="text" class="form-control"  id="mobil" name="mobil" value="<?php echo $namamobil; ?>" readonly/>
    </div>
  </div>
  <div class="form-group">
    <label for="tglsewa" class="col-sm-2 control-label">Tglsewa</label>
    <div class="col-sm-9">
      <input type="date" class="form-control" id="inputCalendre1" name="tglsewa" min="<?php echo ($today); ?>" value="<?php if(isset($_GET['tglbalik'])) echo $_GET['tglbalik']; ?>" onchange="hitung()" required>
    </div>
  </div>
  <div class="form-group">
    <label for="tglbalik" class="col-sm-2 control-label">Tglbalik</label>
    <div class="col-sm-9">
      <input type="date" class="form-control" id="inputCalendre2" name="tglbalik" min="<?php echo ($today); ?> " placeholder="tanggal balik" onchange="hitung()" requaired>
    </div>
  </div>
   <div class="form-group">
    <label for="mobil" class="col-sm-2 control-label">No KTP</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="mobil" name="noktp" placeholder="No KTP Anda">
    </div>
    </div>
    <div class="form-group">

    <label for="mobil" class="col-sm-2 control-label">Harga</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="harga" name="harga_sewa" value="<?php echo $harga; ?>">
    </div>
  </div>
     <div class="form-group">
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</form>
</div>
</div>
</div>
<script>
function hitung()
  { var ambil = new Date(document.getElementById("inputCalendre1").value); 
    document.getElementById("inputCalendre2").setAttribute("min", document.getElementById("inputCalendre1").value);
      var kembali = new Date(document.getElementById("inputCalendre2").value);
        if (ambil>kembali) 
          { document.getElementById("inputCalendre2").value = document.getElementById("inputCalendre1").value;
            kembali = new Date(document.getElementById("inputCalendre2").value); }
    }
</script>
</body>
</html>