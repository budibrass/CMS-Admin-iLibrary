<?php 
// koneksi database
include '../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = htmlentities($_POST['nama_buku']);
$jenis = htmlentities($_POST['jenis']);
$pengarang = htmlentities($_POST['pengarang']);
$penerbit = htmlentities($_POST['penerbit']);
$stok_keseluruhan = htmlentities($_POST['stok_keseluruhan']);
$sisa_stok = htmlentities($_POST['sisa_stok']);
 
// update data ke database
mysqli_query($koneksi,"update buku set nama='$nama', jenis='$jenis', pengarang='$pengarang', penerbit='$penerbit', stok_keseluruhan='$stok_keseluruhan', sisa_stok='$sisa_stok' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:data_buku.php");
 
?>