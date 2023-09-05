<?php 
include 'koneksi.php';

session_start();
if ($_SESSION['status'] != "login") {
    header("location:index.php");
}

session_start();
session_destroy();
header('location:index.php');

?>