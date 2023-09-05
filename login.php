<?php 
include 'koneksi.php';

session_start();
if ($_SESSION['status'] != "login") {
    header("location:index.php");
}

$username = $_POST["username"];
$password = $_POST["password"];

$login = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
$role = mysqli_fetch_array($login);

if($cek = "1"){
    if($role["role"] == 1){
        session_start();
        $_SESSION['username'] = $login;
        $_SESSION['status'] = "login";
        header('location:adminindex.php');
    }elseif($role["role"] == 0){
            session_start();
            $_SESSION['username'] = $login;
            $_SESSION['status'] = "login";
            header('location:userindex.php');
            }
}else{
    echo "<script>alert('yah gagal');window.location='index.php'</script>";
}
