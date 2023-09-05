<?php
include 'koneksi.php';

session_start();
if ($_SESSION['status'] != "login") {
    header("location:index.php");
}
$tabel = mysqli_query($koneksi, "SELECT * FROM anggota");

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Cek Koperasi</title>
</head>

<body>
    <h1>Selamat Datang Di Koperasi</h1>
    <h2>Hai Admin</h2>
    <br>
    <a href="tambah.php">Tambah</a>
    <table border="1">
        <tr>
            <td>Nama Anggota</td>
            <td>Email</td>
            <td>Aksi</td>
        </tr>
        <?php foreach ($tabel as $a) { ?>
            <tr>
                <td><?= $a["nama_anggota"] ?></td>
                <td><?= $a["email"] ?></td>
                <td>
                    <a href="ubah.php?id=<?= $a["id"]; ?>">Update</a>
                    <a href="hapus.php?id=<?= $a["id"]; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <a href="adminindex.php">Kembali</a>
</body>

</html>