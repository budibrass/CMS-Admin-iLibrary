<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
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
                  <a href="../anggota/data_anggota.php">
                    <button class="btn btn-danger">Log out</button>
                  </a>
                </form> -->
            </div>
            <h4 class="icon-navbar"><i class="fas fa-envelope" data-bs-toggle="tooltip" title="inbox"></i></h4>
            <h4 class="icon-navbar"><i class="fas fa-bell" data-bs-toggle="tooltip" title="notifications"></i></h4>
            <a href="logout.php">
              <h4 class="icon-navbar"><i class="fas fa-sign-out-alt" data-bs-toggle="tooltip" title="sign out"></i></h4>
            </a>
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="row g-0 mt-5 content">
        <!-- Side Bar -->
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ms-3 mb-3">
                <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="index.php">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                  </a>
                  <hr class="bg-secondary ms-2" size="4px">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="../anggota/data_anggota.php">
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
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
          </nav>
          <hr width="100%">

          <!-- Header Main Content -->

          <!-- Header -->
          <div class="row g-0 ms-3 me-3">
              <div class="card text-white" style="background-color: brown;">
                  <div class="card-body g-0">
                      <div class="row g-0">
                          <div class="col-md-10 g-0">
                              <h5>DASHBOARD</h5>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row ms-3 me-3 g-0 mt-1">
            <div class="col-md-12 card mr-3 g-0" style="border-color: darkolivegreen">
              <div class="card-body">
                
                <!-- Display Data -->
                <div class="row g-0">
                  <!-- Buku -->
                  <div class="col-md-4 g-0 d-flex justify-content-center">
                    <div class="card bg-primary text-white" style="width: 18rem;">
                      <div class="card-body">
                        <div class="card-body-icon">
                          <i class="fas fa-book"></i>
                        </div>
                        <h5 class="card-title text-center">JUMLAH BUKU</h5>
                        <div class="display-4">
                          224
                        </div>
                        <a href="" class="link-card-body"><p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ms-2"></i></p></a>
                      </div>
                    </div>
                  </div>
      
                  <!-- Konsumer -->
                  <div class="col-md-4 g-0 d-flex justify-content-center">
                    <div class="card bg-success text-white" style="width: 18rem;">
                      <div class="card-body">
                        <div class="card-body-icon">
                          <i class="fas fa-users"></i>
                        </div>
                        <h5 class="card-title text-center">JUMLAH KONSUMER</h5>
                        <div class="display-4">
                          224
                        </div>
                        <a href="" class="link-card-body"><p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ms-2"></i></p></a>
                      </div>
                    </div>
                  </div>
      
                  <!-- Peminjaman -->
                  <div class="col-md-4 g-0 d-flex justify-content-center">
                    <div class="card bg-warning text-white" style="width: 18rem;">
                      <div class="card-body">
                        <div class="card-body-icon">
                          <i class="fas fa-boxes"></i>
                        </div>
                        <h5 class="card-title text-center">JUMLAH PEMINJAMAN</h5>
                        <div class="display-4">
                          356
                        </div>
                        <a href="" class="link-card-body"><p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ms-2"></i></p></a>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Icon Sosmed -->
                <div class="row g-0 mt-4 text-center">

                  <!-- Instagram -->
                  <div class="col-md-4 g-0 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                      <div class="card-header text-white" style="background-color: #e56969;">
                        <i class="fab fa-instagram display-4 mt-3 mb-3"></i>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title mb-3" style="color: #e56969;">INSTAGRAM</h5>
                        <a href="#" class="btn btn-primary btn-outline-light" style="background-color: #e56969;">
                          Follow <i class="far fa-user ms-2"></i>
                        </a>
                      </div>
                    </div>
                  </div>

                  <!-- Facebook -->
                  <div class="col-md-4 g-0 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                      <div class="card-header text-white bg-primary">
                        <i class="fab fa-facebook-square display-4 mt-3 mb-3"></i>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title text-primary mb-3">FACEBOOK</h5>
                        <a href="#" class="btn btn-primary btn-outline-light">
                          Like<i class="far fa-heart ms-2"></i>
                        </a>
                      </div>
                    </div>
                  </div>

                  <!-- Twitter -->
                  <div class="col-md-4 g-0 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                      <div class="card-header text-white bg-info">
                        <i class="fab fa-twitter-square display-4 mt-3 mb-3"></i>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title text-info mb-3">TWITTER</h5>
                        <a href="#" class="btn btn-info btn-outline-light">
                          Like<i class="far fa-heart ms-2"></i>
                        </a>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
    <!-- Tooltips -->
    <script src="./script/script.js"></script>
  </body>
</html>