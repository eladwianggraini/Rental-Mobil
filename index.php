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
                        <a href="http://localhost/ela/admin.php">Admin</a>
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

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer" >
            <img src="rental-mobil-jogja-murah1.jpg" width="1024" height="300">
        </header>

            <marquee bgcolor="black" style="color: white">Selamat Datang di Website Rental Mobil Yogyakarta</marquee>
        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Features</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">
            <?php 
        // membuat koneksi
        include 'koneksi.php';
        // mengecek koneksi
        $sql = "select * from mobil";
        if($konek->query($sql)){ 
            $data = $konek->query($sql); 
        ?>
        <div class="main">
            <div class="list-mobil" >
                <?php if ($data->num_rows > 0) { ?> <!-- jika data ada dan lebih dari nol -->
                <ul>
                    <?php //untuk membedakan idmobil tiap jenis mobil
                    while ($row = $data->fetch_assoc()) { //perulangan untuk memanggil data mobil di database
                    ?>
                    <li style="list-style:none !important;"> <!-- membuat list agar tidak terlihat -->
                        

                            <div class="col-md-3 col-sm-6 hero-feature">

                                <div class="thumbnail">
                                    <img src=foto/<?php echo $row['gambar']; ?>  alt="">
                                    <div class="caption">
                                        <form action="customer.php" method="post">
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
                                        <h3>Mobil</h3>
                                        <p> <?php echo $row['jenis']?>
                                            Kode Mobil :<?php echo $row['idmobil']?><br>
                                            Harga Perhari :<?php echo $row['harga']?><br>
                                            Status :<?php echo $row['status']?><br>
                                        </p>
                                        <p>
                                            <input type="submit" value="pesan" class="btn btn-primary">
                                        </p>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        
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


            

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
