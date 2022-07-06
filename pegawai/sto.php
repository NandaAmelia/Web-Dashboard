<!DOCTYPE html>
<html>
<head>
  <title>STO</title>
  <?php
  include 'koneksi.php';
include 'sc.php';
session_start();

if (isset($_SESSION['admin'])){
    header("location:../admin/index.php");
  }
  elseif (!isset($_SESSION['pekerja']) || empty($_SESSION['pekerja'])) {
    echo "<script>alert('Silakan Login terlebih dahulu!');</script>";
        echo "<script>location='../index.php';</script>";
  }
  ?>
</head>
<body>
  <div class="p-fix">
  <?php
include "navbar.php";
?>
</div>
<div class="pb-5 pt-5"></div>
<div class="container pt-5 ms-2">
<div class="row mb-3 mt-5">
      <div class="col-md-4 themed-grid-col" style="width: 300px;">
         <div class=" flex-column flex-shrink-0 p-2 bg-light rounded-3" style="width: 250px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4 text-danger"><b>DASHBOARD</b></span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto"> 
      <li class="nav-item">
        <a href="sum_all.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><img src="../media/img/file-text-fill.svg"/></svg>
          ALL OLT
        </a>
      </li>
      <li>
        <a href="sum_active.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><img src="../media/img/file-text-fill.svg"/></svg>
          OLT ACTIVE
        </a>
      </li>
      <li>
        <a href="sum_pln.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><img src="../media/img/file-text-fill.svg"/></svg>
          ALARM PLN
        </a>
      </li>
      <li>
        <a href="sum_uplink.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><img src="../media/img/file-text-fill.svg"/></svg>
          UPLINK
        </a>
      </li>
      <li>
        <a href="sum_power.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><img src="../media/img/file-text-fill.svg"/></svg>
          POWER
        </a>
      </li>
      <li>
        <a href="sum_valdat.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><img src="../media/img/file-text-fill.svg"/></svg>
          VALDAT
        </a>
      </li>
    </ul>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li>
        <a href="sto.php" class="nav-link link-danger">
          <svg class="bi me-2" width="16" height="16"><img src="../media/img/folder.svg"/></svg>
          STO
        </a>
      </li>
      <li>
        <a href="cardcontrol.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><img src="../media/img/folder.svg"/></svg>
          CARD CONTROL
        </a>
      </li>
    </ul>
  </div>
  </div>
      <div class="col-md-8 themed-grid-col">
        <div class=" bg-light p-3 rounded-3" style="width: 1100px;">
          <div class="table-responsive m-3">
            <span class="fs-4 ps-2 text-danger"><strong>STO</strong></span>
            <hr>

<table class="table table-bordered table-sm table-striped" style="font-size: .8rem;">
<thead class="text-center">
  <tr>
    <?php
    $batas=10;
    $halaman=isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
    $halaman_awal= ($halaman >1) ? ($halaman*$batas) - $batas : 0;

    $mundur =$halaman-1;
    $maju = $halaman +1;

    $data = $koneksi->query("SELECT * FROM sto");
    $jumlah_data = mysqli_num_rows($data);
    $jumlah_halaman = ceil($jumlah_data/$batas);

    $no=$halaman_awal+1;
    $ambil = $koneksi->query("SELECT * FROM sto LIMIT $halaman_awal,$batas");
    ?>
    <th>No</th>
    <th>Nama STO</th>
    <th>WITEL</th>
    <th>Singkatan STO</th>
  </tr>
</thead>
<?php

    while ($datasto=mysqli_fetch_array($ambil)) {
    ?>
  <tr>
    <td><?php echo $no++;?></td>
    <td><?php echo $datasto['nama_sto']; ?></td>
    <td><?php echo $datasto['witel']; ?></td>
    <td><?php echo $datasto['sto']; ?></td>
  </tr>
  <?php 
}
  ?>
</table>
<h5 class="text-danger">Jumlah data <?php echo $jumlah_data ?></h5>
</div>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$mundur'";}?> aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><div class="page-link"><?php echo $halaman; ?> dari <?php echo $jumlah_halaman; ?></div></li>
    <li class="page-item">
      <a class="page-link" <?php if($halaman < $jumlah_halaman){ echo "href='?halaman=$maju'";}?> aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
        </div>
        
  </div>
    </div>

  </div>
  <?php
include 'footer.php'
?>
</body>

</html>
