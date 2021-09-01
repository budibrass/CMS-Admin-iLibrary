<?php 
// koneksi database
include '../koneksi/koneksi.php';
 
/// menangkap data yang di kirim dari form
$nama = htmlentities($_POST['nama_buku']);
$jenis = htmlentities($_POST['jenis']);
$pengarang = htmlentities($_POST['pengarang']);
$penerbit = htmlentities($_POST['penerbit']);
$stok_keseluruhan = htmlentities($_POST['stok_keseluruhan']);
$sisa_stok = htmlentities($_POST['sisa_stok']);
 
// insert data ke database
mysqli_query($koneksi, "INSERT INTO buku VALUES('','$nama','$jenis','$pengarang','$penerbit','$stok_keseluruhan','$sisa_stok')");
 
// mengalihkan halaman kembali ke index.php
header("location:data_buku.php");
 
?>