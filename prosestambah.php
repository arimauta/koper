<?php
include 'koneksi.php';

session_start();
if ($_SESSION['status'] != "login") {
    header("location:index.php");
}

$nama = $_POST["nama"];
$email = $_POST["email"];
$tabel = mysqli_query($koneksi,"INSERT INTO anggota VALUE('','$nama','$email')");

if($tabel){
    echo "<script>alert('ubah berhasil');window.location='adminkoperasi.php'</script>";
}else{
    echo "<script>alert('ubah gagal');window.location='adminkoperasi.php'</script>";

}

?>