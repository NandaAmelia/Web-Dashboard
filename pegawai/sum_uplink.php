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
<!DOCTYPE html>
<html>
<head>
  <title>SUM UPLINK</title>

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
        <a href="sum_uplink.php" class="nav-link link-danger">
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
            <span class="fs-4 ps-2 text-danger"><strong>NE-ACTIVE ALL</strong></span>
            <hr>

<table class="table table-bordered table-sm text-center" style="font-size: .8rem;">
<thead>
  <tr class="text-center">
    <th rowspan="2">WITEL</th>
    <th colspan="4">LOKASI OLT DENGAN METRO/DWDM</th>
  </tr>
  <tr style="font-size: .75rem;">
    <th>Colocation</th>
    <th>Non-Colocation</th>
    <th>Other/Blank</th>
    <th>Grand Total</th>
  </tr>
</thead>
  <tr>
    <th>ACEH</th>
    <?php while($up_aceh = $aceh_uplink->fetch_assoc()){
        ?>
    <td><?php echo $up_aceh['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>BABEL</th>
    <?php while($up_babel = $babel_uplink->fetch_assoc()){
        ?>
    <td><?php echo $up_babel['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>BENGKULU</th>
    <?php while($up_bengkulu = $bengkulu_uplink->fetch_assoc()){
        ?>
    <td><?php echo $up_bengkulu['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>JAMBI</th>
    <?php while($up_jambi = $jambi_uplink->fetch_assoc()){
        ?>
    <td><?php echo $up_jambi['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>LAMPUNG</th>
    <?php while($up_lampung = $lampung_uplink->fetch_assoc()){
        ?>
    <td><?php echo $up_lampung['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>MEDAN</th>
    <?php while($up_medan = $medan_uplink->fetch_assoc()){
        ?>
    <td><?php echo $up_medan['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>RIDAR</th>
    <?php while($up_ridar = $ridar_uplink->fetch_assoc()){
        ?>
    <td><?php echo $up_ridar['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>RIKEP</th>
    <?php while($up_rikep = $rikep_uplink->fetch_assoc()){
        ?>
    <td><?php echo $up_rikep['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>SUMBAR</th>
    <?php while($up_sumbar = $sumbar_uplink->fetch_assoc()){
        ?>
    <td><?php echo $up_sumbar['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>SUMSEL</th>
    <?php while($up_sumsel = $sumsel_uplink->fetch_assoc()){
        ?>
    <td><?php echo $up_sumsel['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>SUMUT</th>
    <?php while($up_sumut = $sumut_uplink->fetch_assoc()){
        ?>
    <td><?php echo $up_sumut['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>LAIN-LAIN</th>
    <?php while($up_lain = $lain_uplink->fetch_assoc()){
        ?>
    <td><?php echo $up_lain['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>GRAND TOTAL</th>
    <?php while($up_total = $total_uplink->fetch_assoc()){
        ?>
    <td><?php echo $up_total['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
</table>
<span class="fs-4 ps-2 text-danger"><strong>OLT TIDAK 1 LOKASI DENGAN METRO/DWDM (Non-Colocation)</strong></span>
            <hr>
<table class="table table-bordered table-sm text-center" style="font-size: .8rem;">
<thead>
  <tr class="text-center">
    <th rowspan="3">WITEL</th>
    <th colspan="6">DUALHOMING/DUALTRACK UPLINK</th>
  </tr>
  <tr>
    <th rowspan="2">NOK</th>
    <th rowspan="2">PROGRESS</th>
    <th colspan="2">OK</th>
    <th rowspan="2">Grand Total</th>
    <th rowspan="2">%PENC</th>
  </tr>
  <tr>
    <th>DUALTRACK</th>
    <th>DUALHOMING</th>
  </tr>
</thead>
  <tr>
    <th>ACEH</th>
    <?php while($non_aceh = $aceh_noncol->fetch_assoc()){
        ?>
    <td><?php echo $non_aceh['COUNT(ne_ip)']; ?></td>
<?php }; ?>
<td></td>
  </tr>
  <tr>
    <th>BABEL</th>
    <?php while($non_babel = $babel_noncol->fetch_assoc()){
        ?>
    <td><?php echo $non_babel['COUNT(ne_ip)']; ?></td>
<?php }; ?>
    <td></td>
  </tr>
  <tr>
    <th>BENGKULU</th>
    <?php while($non_bengkulu = $bengkulu_noncol->fetch_assoc()){
        ?>
    <td><?php echo $non_bengkulu['COUNT(ne_ip)']; ?></td>
<?php }; ?>
    <td></td>
  </tr>
  <tr>
    <th>JAMBI</th>
    <?php while($non_jambi = $jambi_noncol->fetch_assoc()){
        ?>
    <td><?php echo $non_jambi['COUNT(ne_ip)']; ?></td>
<?php }; ?>
    <td></td>
  </tr>
  <tr>
    <th>LAMPUNG</th>
    <?php while($non_lampung = $lampung_noncol->fetch_assoc()){
        ?>
    <td><?php echo $non_lampung['COUNT(ne_ip)']; ?></td>
<?php }; ?>
    <td></td>
  </tr>
  <tr>
    <th>MEDAN</th>
    <?php while($non_medan = $medan_noncol->fetch_assoc()){
        ?>
    <td><?php echo $non_medan['COUNT(ne_ip)']; ?></td>
<?php }; ?>
    <td></td>
  </tr>
  <tr>
    <th>RIDAR</th>
    <?php while($non_ridar = $ridar_noncol->fetch_assoc()){
        ?>
    <td><?php echo $non_ridar['COUNT(ne_ip)']; ?></td>
<?php }; ?>
    <td></td>
  </tr>
  <tr>
    <th>RIKEP</th>
    <?php while($non_rikep = $rikep_noncol->fetch_assoc()){
        ?>
    <td><?php echo $non_rikep['COUNT(ne_ip)']; ?></td>
<?php }; ?>
    <td></td>
  </tr>
  <tr>
    <th>SUMBAR</th>
    <?php while($non_sumbar = $sumbar_noncol->fetch_assoc()){
        ?>
    <td><?php echo $non_sumbar['COUNT(ne_ip)']; ?></td>
<?php }; ?>
    <td></td>
  </tr>
  <tr>
    <th>SUMSEL</th>
    <?php while($non_sumsel = $sumsel_noncol->fetch_assoc()){
        ?>
    <td><?php echo $non_sumsel['COUNT(ne_ip)']; ?></td>
<?php }; ?>
    <td></td>
  </tr>
  <tr>
    <th>SUMUT</th>
    <?php while($non_sumut = $sumut_noncol->fetch_assoc()){
        ?>
    <td><?php echo $non_sumut['COUNT(ne_ip)']; ?></td>
<?php }; ?>
    <td></td>
  </tr>
  <tr>
    <th>LAIN-LAIN</th>
    <?php while($non_lain = $lain_noncol->fetch_assoc()){
        ?>
    <td><?php echo $non_lain['COUNT(ne_ip)']; ?></td>
<?php }; ?>
    <td></td>
  </tr>
  <tr>
    <th>GRAND TOTAL</th>
    <?php while($non_total = $total_noncol->fetch_assoc()){
        ?>
    <td><?php echo $non_total['COUNT(ne_ip)']; ?></td>
<?php }; ?>
    <td></td>
  </tr>
</table>
<span class="fs-4 ps-2 text-danger"><strong>JENIS KABEL</strong></span>
            <hr>
<table class="table table-bordered table-sm" style="font-size: .8rem;">
<thead>
  <tr class="text-center">
    <th rowspan="2">WITEL</th>
    <th colspan="12">JENIS KABEL</th>
  </tr>
  <tr>
    <th>PATHCORD</th>
    <th>AKSES</th>
    <th>AKSES+CHEVRON</th>
    <th>FEEDER</th>
    <th>RMJ</th>
    <th>BACKBONE</th>
    <th>SKKL</th>
    <th>IKK</th>
    <th>G652</th>
    <th>G655+G652</th>
    <th>BLANK</th>
    <th>TOTAL</th>
  </tr>
</thead>
  <tr>
   <th>ACEH</th>
    <?php while($kabel_aceh = $aceh_kabel->fetch_assoc()){
        ?>
    <td><?php echo $kabel_aceh['COUNT(ne_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>BABEL</th>
    <?php while($kabel_babel = $babel_kabel->fetch_assoc()){
        ?>
    <td><?php echo $kabel_babel['COUNT(ne_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>BENGKULU</th>
    <?php while($kabel_bengkulu = $bengkulu_kabel->fetch_assoc()){
        ?>
    <td><?php echo $kabel_bengkulu['COUNT(ne_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>JAMBI</th>
    <?php while($kabel_jambi = $jambi_kabel->fetch_assoc()){
        ?>
    <td><?php echo $kabel_jambi['COUNT(ne_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>LAMPUNG</th>
    <?php while($kabel_lampung = $lampung_kabel->fetch_assoc()){
        ?>
    <td><?php echo $kabel_lampung['COUNT(ne_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>MEDAN</th>
    <?php while($kabel_medan = $medan_kabel->fetch_assoc()){
        ?>
    <td><?php echo $kabel_medan['COUNT(ne_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>RIDAR</th>
    <?php while($kabel_ridar = $ridar_kabel->fetch_assoc()){
        ?>
    <td><?php echo $kabel_ridar['COUNT(ne_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>RIKEP</th>
    <?php while($kabel_rikep = $rikep_kabel->fetch_assoc()){
        ?>
    <td><?php echo $kabel_rikep['COUNT(ne_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>SUMBAR</th>
    <?php while($kabel_sumbar = $sumbar_kabel->fetch_assoc()){
        ?>
    <td><?php echo $kabel_sumbar['COUNT(ne_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>SUMSEL</th>
    <?php while($kabel_sumsel = $sumsel_kabel->fetch_assoc()){
        ?>
    <td><?php echo $kabel_sumsel['COUNT(ne_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>SUMUT</th>
    <?php while($kabel_sumut = $sumut_kabel->fetch_assoc()){
        ?>
    <td><?php echo $kabel_sumut['COUNT(ne_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>LAIN-LAIN</th>
    <?php while($kabel_lain = $lain_kabel->fetch_assoc()){
        ?>
    <td><?php echo $kabel_lain['COUNT(ne_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>GRAND TOTAL</th>
    <?php while($kabel_total = $total_kabel->fetch_assoc()){
        ?>
    <td><?php echo $kabel_total['COUNT(ne_ip)']; ?></td>
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
