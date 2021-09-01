<?php 
// koneksi database
include '../koneksi/koneksi.php';
 
/// menangkap data yang di kirim dari form
$nama = htmlentities($_POST['nama']);
$jk = htmlentities($_POST['jk']);
$agama = htmlentities($_POST['agama']);
$hp = htmlentities($_POST['hp']);
$status = htmlentities($_POST['status']);
$foto = htmlentities($_POST['foto']);
$alamat = htmlentities($_POST['alamat']);
$pekerjaan = htmlentities($_POST['pekerjaan']);
 
// insert data ke database
mysqli_query($koneksi, "INSERT INTO anggota VALUES('','$nama','$jk','$agama','$hp','$status','$foto','$alamat','$pekerjaan')");
 
// mengalihkan halaman kembali ke index.php
header("location:data_anggota.php");
 
?>