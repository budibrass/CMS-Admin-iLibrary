<?php
include '../koneksi/koneksi.php';

$batas = 10;
$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	

$previous = $halaman - 1;
$next = $halaman + 1;

$no = 1;
$data = mysqli_query($koneksi,"select * from transaksi order by id");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

if(isset($_POST["cari"])){
    $search = $_POST['keyword'];
    $data_transaksi = mysqli_query($koneksi,"select * from transaksi join anggota on anggota.id=transaksi.id_anggota join buku on buku.id=transaksi.id_buku WHERE nama LIKE '%$search%' limit $halaman_awal, $batas");
} else {
    $data_transaksi = mysqli_query($koneksi,"select * from transaksi join anggota on anggota.id=transaksi.id_anggota join buku on buku.id=transaksi.id_buku limit $halaman_awal, $batas");
}

$nomor = $halaman_awal+1;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../style/style.css">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Ilibrary</title>
  </head>
  <body>
    <!-- CONTENT -->
    <div class="row g-0 mt-5 content">
        <!-- Main Content -->
        <div class="col-md-10 mt-4">
            <!-- Content -->
            <div class="row g-0 ms-3 me-3 mt-4">
                <div class="card" style="border-color: brown;">
                    <div class="card-body">
                        <table class="table table-striped table-hover table-bordered">
                            <thead class="bg-secondary">
                                <tr>
                                  <th scope="col" class="text-center">No</th>
                                  <th scope="col">Nama</th>
                                  <th scope="col">Nama Buku</th>
                                  <th scope="col">Tanggal Pinjam</th>
                                  <th scope="col">Tanggal Kembali</th>
                                  <th scope="col">Status Pinjam</th>
                                </tr>
                              </thead>
                              <tbody>
                                  
                                <?php 
                                while($d = mysqli_fetch_assoc($data_transaksi)) {
                                ?>
                                    <tr>
                                        <th scope="row" class="text-center"><?php echo $no++ ?></th>
                                        <td><?php echo $d['nama'] ?></td>
                                        <td><?php echo $d['nama_buku'] ?></td>
                                        <td><?php echo $d['tanggal_pinjam'] ?></td>
                                        <td><?php echo $d['tanggal_kembali'] ?></td>
                                        <td><?php echo $d['status_pinjam'] ?></td>
                                    </tr>
                                <?php 
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <p class="text-center fst-italic">Copyright @BUDI SANTOSO Junior Web Development DTS - Kominfo, Stikom Bali</p>
            </div>
        </div>
    </div>

    <script>
		window.print();
	</script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

   
    <!-- Tooltips -->
    <script src="../script/script.js"></script>
  </body>
</html>