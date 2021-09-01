<?php
include '../koneksi/koneksi.php';

$batas = 10;
$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	

$previous = $halaman - 1;
$next = $halaman + 1;

$no = 1;
$data = mysqli_query($koneksi,"select * from anggota order by id");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

if(isset($_POST["cari"])){
    $search = $_POST['keyword'];
    $data_anggota = mysqli_query($koneksi,"select * from anggota WHERE nama LIKE '%$search%' limit $halaman_awal, $batas");
} else {
    $data_anggota = mysqli_query($koneksi,"select * from anggota limit $halaman_awal, $batas");
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
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark text-white bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Ilibrary</a>
                <!-- <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
        </div>
            <h4 class="icon-navbar"><i class="fas fa-envelope" data-bs-toggle="tooltip" data-bs-placement="top" title="inbox"></i></h4>
            <h4 class="icon-navbar"><i class="fas fa-bell" data-bs-toggle="tooltip" data-bs-placement="top" title="notifications"></i></h4>
            <h4 class="icon-navbar"><i class="fas fa-sign-out-alt" data-bs-toggle="tooltip" data-bs-placement="top" title="sign out"></i></h4>
        <!-- </div> -->
    </nav>

    <!-- CONTENT -->
    <div class="row g-0 mt-5 content">
        <!-- Side Bar -->
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ms-3 mb-3">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="../home/index.php">
                        <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                    </a>
                    <hr class="bg-secondary ms-2" size="4px">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="data_anggota.php">
                        <i class="fas fa-users me-2"></i>Data Anggota
                    </a>
                    <hr class="bg-secondary ms-2" size="4px">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../buku/data_buku.php">
                        <i class="fas fa-book me-2"></i>Data Buku
                    </a>
                    <hr class="bg-secondary ms-2" size="4px">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../transaksi/data_transaksi_pinjam.php">
                    <i class="fas fa-sign-in-alt me-2"></i>Transaksi Pinjam
                    </a>
                    <hr class="bg-secondary ms-2" size="4px">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../transaksi/data_transaksi_kembali.php">
                    <i class="fas fa-outdent me-2"></i>Transaksi Kembali
                    </a>
                    <hr class="bg-secondary ms-2" size="4px">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../transaksi/laporan.php">
                    <i class="fas fa-flag me-2"></i>Laporan
                    </a>
                    <hr class="bg-secondary ms-2" size="4px">
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="col-md-10 mt-4">

          <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ms-3">
                <li class="breadcrumb-item"><a href="#">Anggota</a></li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </nav>
            <hr width="100%">

          <!-- Header -->
            <div class="row g-0 ms-3 me-3">
                <div class="card text-white" style="background-color: brown;">
                    <div class="card-body g-0">
                        <div class="row g-0">
                            <div class="col-md-10 g-0">
                                <h5>Anggota</h5>
                                <p>Lakukan Filter untuk mempermudah pencarian</p>
                            </div>
                            <div class="col-md-2 g-0 d-flex justify-content-end align-items-center">
                                <a href="form_tambah.php"><i class="far fa-plus-square fa-3x me-3 icon-plus text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0 ms-3 me-3">
                <div class="card" style="border-color: brown;">
                    <div class="card-body g-0">
                        <!-- FILTER -->
                        <!-- <?php 
                            include '../koneksi/koneksi/.php';
                        ?> -->

                            <form method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-10">
                                        <label for="exampleDataList" class="form-label">Cari Nama</label>
                                        <input class="form-control input-filter form-control-sm" type="text" name="keyword" id="exampleDataList" placeholder="Type to search...">
                                    </div>
                                    <div class="col-md-2 d-flex align-items-end">
                                        <button type="submit" name="cari" class="btn btn-success me-3 btn-sm" style="width: 100px">Cari</button>
                                        <button type="submit" class="btn btn-warning btn-sm" style="width: 100px">Reset</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="row g-0 ms-3 me-3 mt-4">
                <div class="card" style="border-color: brown;">
                    <div class="card-body">
                        <table class="table table-striped table-hover table-bordered">
                            <thead class="bg-secondary">
                                <tr>
                                  <th scope="col" class="text-center">No</th>
                                  <th scope="col">Nama</th>
                                  <th scope="col">Jenis Kelamin</th>
                                  <th scope="col">Agama</th>
                                  <!-- <th scope="col">No Hp</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">Foto</th> -->
                                  <th scope="col">Alamat</th>
                                  <th colspan="3" scope="col" class="text-center">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                  
                                <?php 
                                while($d = mysqli_fetch_assoc($data_anggota)) {
                                ?>
                                    <tr>
                                        <th scope="row" class="text-center"><?php echo $no++ ?></th>
                                        <td><?php echo $d['nama'] ?></td>
                                        <td><?php echo $d['jk'] ?></td>
                                        <td><?php echo $d['agama'] ?></td>
                                        <td><?php echo $d['alamat'] ?></td>
                                        <td class="text-center text-white">
                                            <a href="detail.php?id=<?php echo $d['id'] ?>">
                                                <i class="fas fa-info-circle bg-primary p-2 rounded icon-action text-white" data-bs-toggle="tooltip" title="detail"></i>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="form_edit.php?id=<?php echo $d['id'] ?>">
                                                <i class="fas fa-edit bg-success p-2 rounded icon-action text-white" data-bs-toggle="tooltip" title="edit"></i>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="hapus_aksi.php?id=<?php echo $d['id'] ?>" onclick="return confirm('Yakin Hapus ?')">
                                                <i class="fas fa-trash-alt bg-danger p-2 rounded icon-action text-white" data-bs-toggle="tooltip" title="delete" onClick="handleDelete()" id="demo"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php 
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Pagination -->
                <nav>
                    <ul class="pagination justify-content-end mt-2">
                        <li class="page-item">
                            <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
                        </li>
                        <?php 
                        for($x=1;$x<=$total_halaman;$x++){
                            ?> 
                            <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                            <?php
                        }
                        ?>				
                        <li class="page-item">
                            <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
                        </li>
                    </ul>
                </nav>
                <p class="text-center fst-italic">Copyright @BUDI SANTOSO Junior Web Development DTS - Kominfo, Stikom Bali</p>
            </div>
        </div>
    </div>

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