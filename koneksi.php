<?php

$hostname ="Localhost";
$userDatabase = "root";
$passwordUser = "";
$databaseName = "datamahasiswa";

$koneksi = mysqli_connect($hostname, $userDatabase, $passwordUser, $databaseName) or die (mysqli_error());

if($koneksi){
    echo "koneksi berhasil";
}
else{
    echo "gagal";
}

?>