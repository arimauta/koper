<?php 
include 'koneksi.php';

session_start();
if ($_SESSION['status'] != "login") {
    header("location:index.php");
}

$tabel = mysqli_query($koneksi,"SELECT * FROM anggota");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Koperasi</title>
</head>
<body>
    <h1>Selamat Datang Di Koperasi</h1>
    <h2>Hai Pelanggan</h2>
    <br>
    <table border="1">
        <tr>
            <td>Nama Anggota</td>
            <td>Email</td>
        </tr>
        <?php foreach($tabel as $a){?>
        <tr>
            <td><?=$a["nama_anggota"]?></td>
            <td><?=$a["email"]?></td>
        </tr>
        <?php } ?>
    </table>
    <a href="logout.php">Logout</a>
</body>
</html>