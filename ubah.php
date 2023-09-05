<?php
include 'koneksi.php';

session_start();
if ($_SESSION['status'] != "login") {
    header("location:index.php");
}

$id = $_GET["id"];
$tabel = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id='$id'");
foreach ($tabel as $b) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Ubah Koperasi</title>
    </head>

    <body>
        <form action="prosesubah.php" method="post">
            <label for="nama">Nama Anggota</label>
            <input type="text" id="nama" value="<?= $b["nama_anggota"] ?>" name="nama">
            <input type="hidden" id="id" value="<?= $b["id"] ?>" name="id">
            <br>
            <label for="email">email</label>
            <input type="text" id="email" value="<?= $b["email"] ?>" name="email">
            <br>
            <button type="submit">ubah</button>
        </form>
        <br>
        <a href="adminkoperasi.php">Kembali</a>
    </body>

    </html>
<?php } ?>