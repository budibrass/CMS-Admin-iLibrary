<?php
if(isset($_POST['Submit'])) {
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$agama = $_POST['agama'];
	$hp = $_POST['hp'];
	$status = $_POST['status'];
	$foto = $_POST['foto'];
	$alamat = $_POST['alamat'];
	$pekerjaan = $_POST['pekerjaan'];
	
	// include database connection file
	include_once("../koneksi/koneksi.php");
			
	// Insert user data into table
	$result = mysqli_query($koneksi, "INSERT INTO anggota(nama, jk, agama, hp, status, foto, alamat, pekerjaan) VALUES('','$nama','$jk','$agama','$hp','$status','$foto','$alamat','$pekerjaan')");
	
	// mengalihkan halaman kembali ke index.php
	header("location:data_anggota.php");
}
?>