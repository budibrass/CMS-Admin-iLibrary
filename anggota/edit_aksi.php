<?php 
// koneksi database
include '../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = htmlentities($_POST['nama']);
$jk = htmlentities($_POST['jk']);
$agama = htmlentities($_POST['agama']);
$hp = htmlentities($_POST['hp']);
$status = htmlentities($_POST['status']);
$foto = htmlentities($_POST['foto']);
$alamat = htmlentities($_POST['alamat']);
$pekerjaan = htmlentities($_POST['pekerjaan']);
 
// update data ke database
mysqli_query($koneksi,"update anggota set nama='$nama', jk='$jk', agama='$agama', hp='$hp', status='$status', foto='$foto', alamat='$alamat', pekerjaan='$pekerjaan' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:data_anggota.php");
 
?>