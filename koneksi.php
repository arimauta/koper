<?php 
$koneksi = mysqli_connect("localhost","root","","crud6");

if(mysqli_connect_errno()){
    echo "koneksi gagal :" . mysqli_connect_error();
}

?>