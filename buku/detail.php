<?php
    if(isset($_GET['id'])){
        $id= $_GET['id'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    include "../koneksi/koneksi.php";
    $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE id='$id'");
    $result = mysqli_fetch_array($query);
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
            <h4 class="icon-navbar"><i class="fas fa-envelope" data-bs-toggle="tooltip" title="inbox"></i></h4>
            <h4 class="icon-navbar"><i class="fas fa-bell" data-bs-toggle="tooltip" title="notifications"></i></h4>
            <h4 class="icon-navbar"><i class="fas fa-sign-out-alt" data-bs-toggle="tooltip" title="sign out"></i></h4>
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
                  <a class="nav-link text-white" href="../anggota/data_anggota.php">
                    <i class="fas fa-users me-2"></i>Data Anggota
                  </a>
                  <hr class="bg-secondary ms-2" size="4px">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="data_buku.php">
                    <i class="fas fa-book me-2"></i>Data Buku
                  </a>
                  <hr class="bg-secondary ms-2" size="4px">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">
                    <i class="fas fa-boxes me-2"></i>Data Peminjaman
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
                <li class="breadcrumb-item"><a href="data_buku.php">Buku</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Buku</li>
                </ol>
            </nav>
            <hr width="100%">

            <!-- Header -->
            <div class="row g-0 ms-3 me-3">
                <div class="card text-white" style="background-color: brown;">
                    <div class="card-body g-0">
                        <div class="row g-0">
                            <div class="col-md-10 g-0">
                                <h5>Detail Buku </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Form Content Detail -->
            <div class="row g-0 ms-3 me-3 mt-1">
                <div class="card" style="border-color: brown;">
                    <div class="card-body">
                        
                        <!-- Bagian Atas -->
                        <div class="row g-0">
                            <div class="col-md-12 mt-2">
                                <div class="card">
                                    <div class="card-header">
                                        Info Buku <?php echo $result['nama_buku']; ?>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p class="font-monospace">Nama</p>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <p class="font-monospace">:</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" disabled class="form-control form-control-sm input-add" value="<?php echo $result['nama']; ?>" name="nama" id="exampleFormControlInput1">
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p class="font-monospace">Jenis</p>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <p class="font-monospace">:</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" disabled class="form-control form-control-sm input-add" value="<?php echo $result['jenis']; ?>" name="jenis" id="exampleFormControlInput1">
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p class="font-monospace">Pengarang</p>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <p class="font-monospace">:</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p class="font-monospace">
                                                        <input type="text" disabled class="form-control form-control-sm input-add" value="<?php echo $result['pengarang']; ?>" name="pengarang" id="exampleFormControlInput1">
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p class="font-monospace">Penerbit</p>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <p class="font-monospace">:</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <input type="text" disabled class="form-control form-control-sm input-add" value="<?php echo $result['penerbit']; ?>" name="penerbit" id="exampleFormControlInput1">
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p class="font-monospace">Semua Stok</p>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <p class="font-monospace">:</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p class="font-monospace">
                                                        <input type="text" disabled class="form-control form-control-sm input-add" value="<?php echo $result['stok_keseluruhan']; ?>" name="stok_keseluruhan" id="exampleFormControlInput1">
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p class="font-monospace">Sisa Stok</p>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <p class="font-monospace">:</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <input type="text" disabled class="form-control form-control-sm input-add" value="<?php echo $result['sisa_stok']; ?>" name="sisa_stok" id="exampleFormControlInput1">
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    <script src="script.js"></script>
  </body>
</html>