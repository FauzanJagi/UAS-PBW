<?php

    include "koneksi.php";

    $id = $_POST['id'];
    $nama_mhs = $_POST['nama'];
    $prodi_mhs = $_POST['prodi'];
    $npm_mhs = $_POST['npm'];
    $alamat_mhs = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $perulangan = $_POST['ulangi'];

    $proses = mysqli_query($koneksi, "INSERT INTO mahasiswa (nama_mahasiswa, prodi, npm, alamat) VALUES ('".$nama_mhs."', '".$prodi_mhs."', '".$npm_mhs."', '".$alamat_mhs."')") or die (mysqli_error($koneksi));

    if($proses){
        echo "<script>
             alert('Data Berhasil disimpan');
             window.location.href='uas.php';
        </script>";
    }
    else{
        echo "<script>alert('Data gagal disimpan')
        window.location.href='uas.php';</script>";
    }


?>
