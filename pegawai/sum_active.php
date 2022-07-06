<!DOCTYPE html>
<html>
<head>
  <title>SUM ACTIVE</title>
  <?php
  include 'koneksi.php';
  include 'tabel.php';
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
    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
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
        <a href="sum_active.php" class="nav-link link-danger">
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
        <a href="sto.php" class="nav-link link-dark">
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
            <span class="fs-4 ps-2 text-danger"><strong>Type OLT</strong></span>
            <hr>

<table class="table table-bordered table-sm text-center table-striped" style="font-size: .8rem;">
<thead>
  <tr class="text-center">
    <th rowspan="2">WITEL</th>
    <th colspan="7">HUAWEI</th>
    <th colspan="9">ZTE</th>
    <th>FIBERHOME</th>
    <th rowspan="2">GRAND TOTAL</th>
  </tr>
  <tr style="font-size: .75rem;">
    <th>MA5600T</th>
    <th>MA5608T</th>
    <th>MA5680T</th>
    <th>MA5800-X17</th>
    <th>MA5800-X15</th>
    <th>MA5800-X2</th>
    <th>TOTAL</th>
    <th>C220v1.2</th>
    <th>C300</th>
    <th>C300v2</th>
    <th>C300v210</th>
    <th>C320v2</th>
    <th>C320v210</th>
    <th>C600v1</th>
    <th>C620v1</th>
    <th>TOTAL</th>
    <th>AN6000-17</th>
  </tr>
</thead>
  <tr>
    <th>ACEH</th>
    <?php while($active_aceh_tipe = $active_aceh_1->fetch_assoc()){
        ?>
    <td><?php echo $active_aceh_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>BABEL</th>
    <?php while($active_babel_tipe = $active_babel_1->fetch_assoc()){
        ?>
    <td><?php echo $active_babel_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>BENGKULU</th>
    <?php while($active_bengkulu_tipe = $active_bengkulu_1->fetch_assoc()){
        ?>
    <td><?php echo $active_bengkulu_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>JAMBI</th>
    <?php while($active_jambi_tipe = $active_jambi_1->fetch_assoc()){
        ?>
    <td><?php echo $active_jambi_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>LAMPUNG</th>
    <?php while($active_lampung_tipe = $active_lampung_1->fetch_assoc()){
        ?>
    <td><?php echo $active_lampung_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>  </tr>
  <tr>
    <th>MEDAN</th>
   <?php while($active_medan_tipe = $active_medan_1->fetch_assoc()){
        ?>
    <td><?php echo $active_medan_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>RIDAR</th>
    <?php while($active_ridar_tipe = $active_ridar_1->fetch_assoc()){
        ?>
    <td><?php echo $active_ridar_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>RIKEP</th>
    <?php while($active_rikep_tipe = $active_rikep_1->fetch_assoc()){
        ?>
    <td><?php echo $active_rikep_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>SUMBAR</th>
    <?php while($active_sumbar_tipe = $active_sumbar_1->fetch_assoc()){
        ?>
    <td><?php echo $active_sumbar_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>SUMSEL</th>
    <?php while($active_sumsel_tipe = $active_sumsel_1->fetch_assoc()){
        ?>
    <td><?php echo $active_sumsel_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>SUMUT</th>
    <?php while($active_sumut_tipe = $active_sumut_1->fetch_assoc()){
        ?>
    <td><?php echo $active_sumut_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>LAIN-LAIN</th>
    <?php while($active_lain_tipe = $active_lain_1->fetch_assoc()){
        ?>
    <td><?php echo $active_lain_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>GRAND TOTAL</th>
    <?php while($active_total_tipe = $active_tipe->fetch_assoc()){
        ?>
    <td><?php echo $active_total_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
</table>
<span class="fs-4 ps-2"><strong>Software Version</strong></span>

<table class="table table-bordered table-sm text-center table-striped" style="font-size: .8rem;">
<thead>
  <tr class="text-center">
    <th rowspan="2">WITEL</th>
    <th colspan="7">HUAWEI</th>
    <th colspan="10">ZTE</th>
    <th>FIBERHOME</th>
    <th rowspan="2">GRAND TOTAL</th>
  </tr>
  <tr style="font-size: .75rem;">
    <th>MA5600V800R012C00</th>
    <th>MA5600V800R013C00</th>
    <th>MA5600V800R013C10</th>
    <th>MA5600V800R018C10</th>
    <th>MA5800V100R018C10</th>
    <th>MA5800V100R019C10</th>
    <th>TOTAL</th>
    <th>V1.2.1P1</th>
    <th>V1.2.3P1</th>
    <th>V1.2.5P1</th>
    <th>V2.0.1P2</th>
    <th>V2.1.0</th>
    <th>V1.0.24</th>
    <th>V1.1</th>
    <th>V1.2.1</th>
    <th>V1.2</th>
    <th>TOTAL</th>
    <th>AN6000-17</th>
  </tr>
</thead>
  <tr>
    <th>ACEH</th>
    <?php while($active_aceh_soft = $active_aceh_2->fetch_assoc()){
        ?>
    <td><?php echo $active_aceh_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>BABEL</th>
    <?php while($active_babel_soft = $active_babel_2->fetch_assoc()){
        ?>
    <td><?php echo $active_babel_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>BENGKULU</th>
    <?php while($active_bengkulu_soft = $active_bengkulu_2->fetch_assoc()){
        ?>
    <td><?php echo $active_bengkulu_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>JAMBI</th>
    <?php while($active_jambi_soft = $active_jambi_2->fetch_assoc()){
        ?>
    <td><?php echo $active_jambi_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>LAMPUNG</th>
    <?php while($active_lampung_soft = $active_lampung_2->fetch_assoc()){
        ?>
    <td><?php echo $active_lampung_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>  </tr>
  <tr>
    <th>MEDAN</th>
   <?php while($active_medan_soft = $active_medan_2->fetch_assoc()){
        ?>
    <td><?php echo $active_medan_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>RIDAR</th>
    <?php while($active_ridar_soft = $active_ridar_2->fetch_assoc()){
        ?>
    <td><?php echo $active_ridar_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>RIKEP</th>
    <?php while($active_rikep_soft = $active_rikep_2->fetch_assoc()){
        ?>
    <td><?php echo $active_rikep_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>SUMBAR</th>
    <?php while($active_sumbar_soft = $active_sumbar_2->fetch_assoc()){
        ?>
    <td><?php echo $active_sumbar_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>SUMSEL</th>
    <?php while($active_sumsel_soft = $active_sumsel_2->fetch_assoc()){
        ?>
    <td><?php echo $active_sumsel_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>SUMUT</th>
    <?php while($active_sumut_soft = $active_sumut_2->fetch_assoc()){
        ?>
    <td><?php echo $active_sumut_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>LAIN-LAIN</th>
    <?php while($active_lain_soft = $active_lain_2->fetch_assoc()){
        ?>
    <td><?php echo $active_lain_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>GRAND TOTAL</th>
    <?php while($active_total_soft = $active_soft->fetch_assoc()){
        ?>
    <td><?php echo $active_total_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
</table>
</div>
        </div>
        
  </div>
    </div>

  </div>
  <?php
include 'footer.php'
?>
</body>

</html>
