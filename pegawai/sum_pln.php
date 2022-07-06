<!DOCTYPE html>
<html>
<head>
  <title>SUM PLN</title>
  <?php
  include 'koneksi.php';
include 'sc.php';
include 'tabel.php';
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
        <a href="sum_pln.php" class="nav-link link-danger">
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
            <span class="fs-4 ps-2 text-danger"><strong>Progress Pemasangan Alarm PLN OLT</strong></span>
            <hr>

<table class="table table-bordered table-sm table-striped text-center" style="font-size: .8rem;">
<thead>
  <tr >
    <th>WITEL</th>
    <th>NOK</th>
    <th>PROGRESS</th>
    <th>OK</th>
    <th>OSASE</th>
    <th>KENDALA</th>
    <th>TOTAL</th>
    <th>%Penc</th>
  </tr>
</thead>
  <tr>
    <th>ACEH</th>
    <?php while($pln_aceh = $aceh_pln->fetch_assoc()){
        ?>
    <td><?php echo $pln_aceh['COUNT(id_ip)']; ?></td>
<?php }; ?>
<td><?php echo round($persen,2) ?>%</td>
  </tr>
  <tr>
    <th>BABEL</th>
    <?php while($pln_babel = $babel_pln->fetch_assoc()){
        ?>
    <td><?php echo $pln_babel['COUNT(id_ip)']; ?></td>
<?php }; ?>
<td>%</td>
  </tr>
  <tr>
    <th>BENGKULU</th>
    <?php while($pln_bengkulu = $bengkulu_pln->fetch_assoc()){
        ?>
    <td><?php echo $pln_bengkulu['COUNT(id_ip)']; ?></td>
<?php }; ?>
<td>%</td>
  </tr>
  <tr>
    <th>JAMBI</th>
    <?php while($pln_jambi = $jambi_pln->fetch_assoc()){
        ?>
    <td><?php echo $pln_jambi['COUNT(id_ip)']; ?></td>
<?php }; ?>
<td>%</td>
  </tr>
  <tr>
    <th>LAMPUNG</th>
    <?php while($pln_lampung = $lampung_pln->fetch_assoc()){
        ?>
    <td><?php echo $pln_lampung['COUNT(id_ip)']; ?></td>
<?php }; ?>
<td><?php echo round($persen,2) ?>%</td>
  </tr>
  <tr>
    <th>MEDAN</th>
    <?php while($pln_medan = $medan_pln->fetch_assoc()){
        ?>
    <td><?php echo $pln_medan['COUNT(id_ip)']; ?></td>
<?php }; ?>
<td>%</td>
  </tr>
  <tr>
    <th>RIDAR</th>
    <?php while($pln_ridar = $ridar_pln->fetch_assoc()){
        ?>
    <td><?php echo $pln_ridar['COUNT(id_ip)']; ?></td>
<?php }; ?>
<td>%</td>
  </tr>
  <tr>
    <th>RIKEP</th>
    <?php while($pln_rikep = $rikep_pln->fetch_assoc()){
        ?>
    <td><?php echo $pln_rikep['COUNT(id_ip)']; ?></td>
<?php }; ?>
<td>%</td>
  </tr>
  <tr>
    <th>SUMBAR</th>
    <?php while($pln_sumbar = $sumbar_pln->fetch_assoc()){
        ?>
    <td><?php echo $pln_sumbar['COUNT(id_ip)']; ?></td>
<?php }; ?>
<td>%</td>
  </tr>
  <tr>
    <th>SUMSEL</th>
    <?php while($pln_sumsel = $sumsel_pln->fetch_assoc()){
        ?>
    <td><?php echo $pln_sumsel['COUNT(id_ip)']; ?></td>
<?php }; ?>
<td>%</td>
  </tr>
  <tr>
    <th>SUMUT</th>
    <?php while($pln_sumut = $sumut_pln->fetch_assoc()){
        ?>
    <td><?php echo $pln_sumut['COUNT(id_ip)']; ?></td>
<?php }; ?>
<td>%</td>
  </tr>
  <tr>
    <th>LAIN-LAIN</th>
    <?php while($pln_lain = $lain_pln->fetch_assoc()){
        ?>
    <td><?php echo $pln_lain['COUNT(id_ip)']; ?></td>
<?php }; ?>
<td>%</td>
  </tr>
  <tr>
    <th>GRAND TOTAL</th>
    <?php while($pln_total = $total_pln->fetch_assoc()){
        ?>
    <td><?php echo $pln_total['COUNT(id_ip)']; ?></td>
<?php }; ?>
<td>%</td>
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
