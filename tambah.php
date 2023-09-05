<?php 
include 'koneksi.php';
session_start();
if ($_SESSION['status'] != "login") {
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Tambah Koperasi</title>
</head>
<body>
    
<div>
    <h1>tambah</h1>
    <form action="prosestambah.php" method="post">
        <label for="nama">Nama Anggota</label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="email">email</label>
        <input type="text" name="email" id="email">
        <br>
        <button type="submit">tambah</button>
    </form>
    <br>
    <a href="adminkoperasi.php">Kembali</a>
</div>
</body>
</html>