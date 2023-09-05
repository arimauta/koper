<?php
include 'koneksi.php';
session_start();
if ($_SESSION['status'] != "login") {
    header("location:index.php");
}

$id = $_POST["id"];
$nama = $_POST["nama"];
$email = $_POST["email"];
$tabel = mysqli_query($koneksi,"UPDATE anggota SET nama_anggota='$nama' , email='$email' WHERE id='$id'");

if($tabel){
    echo "<script>alert('ubah berhasil');window.location='adminkoperasi.php'</script>";
}else{
    echo "<script>alert('ubah gagal');window.location='adminkoperasi.php'</script>";
}

?>