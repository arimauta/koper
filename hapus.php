<?php
include 'koneksi.php';

session_start();
if ($_SESSION['status'] != "login") {
    header("location:index.php");
}
$id=$_GET["id"];
$tabel = mysqli_query($koneksi,"DELETE FROM anggota WHERE id='$id'");

if($tabel){
    echo "<script>alert('hapus berhasil');window.location='adminkoperasi.php'</script>";
}else{
    echo "<script>alert('hapus gagal');window.location='adminkoperasi.php'</script>";
}

?>