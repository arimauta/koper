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
    <title>Admin Koperasi</title>
</head>

<body>
    <div>

        <h1>Selamat Datang Di Koperasi</h1>
        <h2>Hai Admin</h2>
        <br>
        <a href="adminkoperasi.php">Cek Koperasi</a><br>
        <a href="logout.php">Logout</a>
    </div>
</body>

</html>