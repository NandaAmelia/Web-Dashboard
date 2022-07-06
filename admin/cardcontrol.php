<title>SUM ALL</title>
<div class="container">
<div class="nav-scroller p-3 m-3 bg-light bg-opacity-75 rounded-pill">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-dark" href="index.php?halaman=sum_all">ALL OLT</a>
      <a class="p-2 link-dark" href="index.php?halaman=sum_active">OLT ACTIVE</a>
      <a class="p-2 link-dark" href="index.php?halaman=sum_pln">ALARM PLN</a>
      <a class="p-2 link-dark" href="index.php?halaman=sum_uplink">UPLINK</a>
      <a class="p-2 link-dark" href="index.php?halaman=sum_power">POWER</a>
      <a class="p-2 link-dark" href="index.php?halaman=sum_valdat">VALDAT</a>
      <a class="p-2 link-dark" href="index.php?halaman=sto">STO</a>
      <a class="p-2 link-primary" href="index.php?halaman=cardcontrol"><b>CARD CONTROL</b></a>
    </nav>
  </div>
</div>
      <div class="bg-light bg-opacity-75 rounded-3 p-3">
      <div class="table-responsive m-3">

<span class="fs-4 ps-2 text-primary"><strong>System Module Control "Active/Standby"</strong></span>
<hr>

<table class="table table-bordered table-sm table-striped" style="font-size: .8rem;">
<thead>
  <tr class="text-center">
    <th rowspan="2">WITEL</th>
    <th colspan="7">HUAWEI</th>
    <th colspan="9">ZTE</th>
    <th>FIBERHOME</th>
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
    <?php while($active_aceh_tipe = $stand_aceh->fetch_assoc()){
        ?>
    <td><?php echo $active_aceh_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>BABEL</th>
    <?php while($active_babel_tipe = $stand_babel->fetch_assoc()){
        ?>
    <td><?php echo $active_babel_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>BENGKULU</th>
    <?php while($active_bengkulu_tipe = $stand_bengkulu->fetch_assoc()){
        ?>
    <td><?php echo $active_bengkulu_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>JAMBI</th>
    <?php while($active_jambi_tipe = $stand_jambi->fetch_assoc()){
        ?>
    <td><?php echo $active_jambi_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>LAMPUNG</th>
    <?php while($active_lampung_tipe = $stand_lampung->fetch_assoc()){
        ?>
    <td><?php echo $active_lampung_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>  </tr>
  <tr>
    <th>MEDAN</th>
   <?php while($active_medan_tipe = $stand_medan->fetch_assoc()){
        ?>
    <td><?php echo $active_medan_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>RIDAR</th>
    <?php while($active_ridar_tipe = $stand_ridar->fetch_assoc()){
        ?>
    <td><?php echo $active_ridar_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>RIKEP</th>
    <?php while($active_rikep_tipe = $stand_rikep->fetch_assoc()){
        ?>
    <td><?php echo $active_rikep_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>SUMBAR</th>
    <?php while($active_sumbar_tipe = $stand_sumbar->fetch_assoc()){
        ?>
    <td><?php echo $active_sumbar_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>SUMSEL</th>
    <?php while($active_sumsel_tipe = $stand_sumsel->fetch_assoc()){
        ?>
    <td><?php echo $active_sumsel_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>SUMUT</th>
    <?php while($active_sumut_tipe = $stand_sumut->fetch_assoc()){
        ?>
    <td><?php echo $active_sumut_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>LAIN-LAIN</th>
    <?php while($active_lain_tipe = $stand_lain->fetch_assoc()){
        ?>
    <td><?php echo $active_lain_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>GRAND TOTAL</th>
    <?php while($active_total_tipe = $stand_tipe->fetch_assoc()){
        ?>
    <td><?php echo $active_total_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
</table>
<span class="fs-4 ps-2 text-primary"><strong>System Module Control "Load Sharing"</strong></span>
<hr>

<table class="table table-bordered table-sm table-striped" style="font-size: .8rem;">
<thead>
  <tr class="text-center">
    <th rowspan="2">WITEL</th>
    <th colspan="7">HUAWEI</th>
    <th colspan="9">ZTE</th>
    <th>FIBERHOME</th>
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
    <?php while($aceh_load = $load_aceh->fetch_assoc()){
        ?>
    <td><?php echo $aceh_load['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>BABEL</th>
    <?php while($babel_load = $load_babel->fetch_assoc()){
        ?>
    <td><?php echo $babel_load['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>BENGKULU</th>
    <?php while($bengkulu_load = $load_bengkulu->fetch_assoc()){
        ?>
    <td><?php echo $bengkulu_load['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>JAMBI</th>
    <?php while($jambi_load = $load_jambi->fetch_assoc()){
        ?>
    <td><?php echo $jambi_load['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>LAMPUNG</th>
    <?php while($lampung_load = $load_lampung->fetch_assoc()){
        ?>
    <td><?php echo $lampung_load['COUNT(id_ip)']; ?></td>
<?php }; ?>  </tr>
  <tr>
    <th>MEDAN</th>
   <?php while($medan_load = $load_medan->fetch_assoc()){
        ?>
    <td><?php echo $medan_load['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>RIDAR</th>
    <?php while($ridar_load = $load_ridar->fetch_assoc()){
        ?>
    <td><?php echo $ridar_load['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>RIKEP</th>
    <?php while($rikep_load = $load_rikep->fetch_assoc()){
        ?>
    <td><?php echo $rikep_load['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>SUMBAR</th>
    <?php while($sumbar_load = $load_sumbar->fetch_assoc()){
        ?>
    <td><?php echo $sumbar_load['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>SUMSEL</th>
    <?php while($sumsel_load = $load_sumsel->fetch_assoc()){
        ?>
    <td><?php echo $sumsel_load['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>SUMUT</th>
    <?php while($sumut_load = $load_sumut->fetch_assoc()){
        ?>
    <td><?php echo $sumut_load['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>LAIN-LAIN</th>
    <?php while($lain_load = $load_lain->fetch_assoc()){
        ?>
    <td><?php echo $lain_load['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>GRAND TOTAL</th>
    <?php while($tipe_load = $load_tipe->fetch_assoc()){
        ?>
    <td><?php echo $tipe_load['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
</table>
      </div>
    </div>