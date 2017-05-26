<?php
session_start(); //deklarasi variable sementara yang diletakkan diserver, php bisa mengambil nilai yang tersimpan di server walaupun kita membuka halaman baru.
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$login    = mysqli_query($konek, "select * from admin where username='$username' and password='$password'"); //mengirimkan perintah dari isi varibel sql ke server mysql
$result   = mysqli_num_rows($login); //menampilkan jumlah baris dari isi tabel
if($result){
    $user = mysqli_fetch_array($login); //pengambilan data mysql
    $_SESSION['username'] = $user['username'];
    header("location:inputmobil.php");
}else{
    header("location:admin.php");
}
?>
