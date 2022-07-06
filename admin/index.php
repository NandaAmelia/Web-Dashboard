<?php
include 'sc.php';
include 'koneksi.php';


session_start();

if (isset($_SESSION['pekerja'])){
    header("location:../pegawai/index.php");
  }
  elseif (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
    echo "<script>alert('Silakan Login terlebih dahulu!');</script>";
        echo "<script>location='../index.php';</script>";
  }
include 'tabel.php';
?>
<!doctype html>
<html lang="en">
<title>Halaman Admin</title>
  <head>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      body{
        background-image: url("../media/img/bg-blue.jpg");
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-secondary flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 bg-light"><img src="../media/img/logo_telkom.png" width="150"></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="index.php?halaman=signout">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column" style="font-size: 1.025rem;">
          <li class="nav-item pt-3">
            <a class="nav-link" href="index.php?halaman=sum_all">
              <svg class="bi" width="16" height="16"><img src="../media/img/speedometer2.svg"/></svg>
              Dashboard
            </a>
          </li>
          <li class="nav-item pt-3">
            <a class="nav-link" href="index.php?halaman=pegawai">
              <svg class="bi" width="16" height="16"><img src="../media/img/file-person.svg"/></svg>
              Kelola Pegawai
            </a>
          </li>
          <li class="nav-item pt-3">
            <a class="nav-link" href="index.php?halaman=pengajuan">
              <svg class="bi" width="16" height="16"><img src="../media/img/folder.svg"/></svg>
              Pengajuan
            </a>
          </li>
          <li class="nav-item pt-3">
            <a class="nav-link" href="index.php?halaman=kelola_data">
              <svg class="bi" width="16" height="16"><img src="../media/img/hourglass.svg"/></svg>
              Kelola Data
            </a>
          </li>
          <li class="nav-item pt-3">
            <a class="nav-link" href="index.php?halaman=admin">
              <svg class="bi" width="16" height="16"><img src="../media/img/file-person.svg"/></svg>
              Kelola Admin
            </a>
          </li>
          <li class="nav-item pt-3">
            <a class="nav-link" href="index.php?halaman=cari">
              <svg class="bi" width="16" height="16"><img src="../media/img/search.svg"/></svg>
              Search
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <?php
                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="sum_all")
                    {
                        include 'sum_all.php';
                    }
                    elseif ($_GET['halaman']=="sum_active")
                    {
                        include 'sum_active.php';
                    }
                    elseif ($_GET['halaman']=="sum_pln")
                    {
                        include 'sum_pln.php';
                    }
                    elseif ($_GET['halaman']=="sum_power")
                    {
                        include 'sum_power.php';
                    }
                    elseif ($_GET['halaman']=="sum_uplink")
                    {
                        include 'sum_uplink.php';
                    }
                    elseif ($_GET['halaman']=="sum_valdat")
                    {
                        include 'sum_valdat.php';
                    }
                    elseif ($_GET['halaman']=="sto")
                    {
                        include 'sto.php';
                    }
                    elseif ($_GET['halaman']=="cardcontrol")
                    {
                        include 'cardcontrol.php';
                    }
                    elseif ($_GET['halaman']=="pegawai")
                    {
                        include 'pegawai.php';
                    }
                    elseif ($_GET['halaman']=="kelola_data")
                    {
                        include 'data.php';
                    }
                    elseif ($_GET['halaman']=="signout")
                    {
                        include 'signout.php';
                    }
                    elseif ($_GET['halaman']=="admin")
                    {
                        include 'admin.php';
                    }
                    elseif ($_GET['halaman']=="aktif") 
                    {
                        include 'ubahaktif.php';
                    }
                    elseif ($_GET['halaman']=="tidakaktif") 
                    {
                        include 'ubahtidakaktif.php';
                    }
                    elseif ($_GET['halaman']=="tambahadmin")
                    {
                        include 'tambahadmin.php';
                    }
                    elseif ($_GET['halaman']=="tambahpegawai")
                    {
                        include 'tambahpegawai.php';
                    }
                    elseif ($_GET['halaman']=="cari")
                    {
                        include 'cari.php';
                    }
                    elseif ($_GET['halaman']=="pengajuan")
                    {
                        include 'pengajuan.php';
                    }
                    elseif ($_GET['halaman']=="tambahlokasi")
                    {
                        include 'tambah_lokasi.php';
                    }
                    elseif ($_GET['halaman']=="detail")
                    {
                        include 'detail.php';
                    }
                    elseif ($_GET['halaman']=="tambahhostname")
                    {
                        include 'tambahhostname.php';
                    }
                    elseif ($_GET['halaman']=="input_lokasi")
                    {
                        include 'input_lokasi.php';
                    }
                    elseif ($_GET['halaman']=="masukanhostname")
                    {
                        include 'masukanhostname.php';
                    }
                    elseif ($_GET['halaman']=="ulang")
                    {
                        include 'ulang.php';
                    }
                    elseif ($_GET['halaman']=="periksa")
                    {
                        include 'periksa.php';
                    }
                    elseif ($_GET['halaman']=="detail_pengajuan")
                    {
                        include 'detail_pengajuan.php';
                    }
                    elseif ($_GET['halaman']=="edit_lokasi")
                    {
                        include 'edit_lokasi.php';
                    }
                    elseif ($_GET['halaman']=="edit_lokasi2")
                    {
                        include 'edit_lokasi2.php';
                    }
                    elseif ($_GET['halaman']=="edit_hostname")
                    {
                        include 'edit_hostname.php';
                    }
                    elseif ($_GET['halaman']=="edit_keamanan")
                    {
                        include 'edit_keamanan.php';
                    }
                    elseif ($_GET['halaman']=="edit_kelistrikan")
                    {
                        include 'edit_kelistrikan.php';
                    }
                    elseif ($_GET['halaman']=="edit_non_sto")
                    {
                        include 'edit_non_sto.php';
                    }
                    elseif ($_GET['halaman']=="edit_ont")
                    {
                        include 'edit_ont.php';
                    }
                    elseif ($_GET['halaman']=="edit_source")
                    {
                        include 'edit_source.php';
                    }
                    elseif ($_GET['halaman']=="edit_uplink")
                    {
                        include 'edit_uplink.php';
                    }
                    elseif ($_GET['halaman']=="hapus_hostname")
                    {
                        include 'hapus_hostname.php';
                    }

                    
                }
                else
                {
                    include 'cari.php';
                }
                ?>
    </main>
  </div>
</div>
<div class="p-5"></div>
  </body>
</html>
