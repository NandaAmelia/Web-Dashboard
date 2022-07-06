<title>SUM ALL</title>
<div class="container">
<div class="nav-scroller p-3 m-3 bg-light bg-opacity-75 rounded-pill">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-primary" href="index.php?halaman=sum_all"><b>ALL OLT</b></a>
      <a class="p-2 link-dark" href="index.php?halaman=sum_active">OLT ACTIVE</a>
      <a class="p-2 link-dark" href="index.php?halaman=sum_pln">ALARM PLN</a>
      <a class="p-2 link-dark" href="index.php?halaman=sum_uplink">UPLINK</a>
      <a class="p-2 link-dark" href="index.php?halaman=sum_power">POWER</a>
      <a class="p-2 link-dark" href="index.php?halaman=sum_valdat">VALDAT</a>
      <a class="p-2 link-dark" href="index.php?halaman=sto">STO</a>
      <a class="p-2 link-dark" href="index.php?halaman=cardcontrol">CARD CONTROL</a>
    </nav>
  </div>
</div>
      <div class="bg-light bg-opacity-75 rounded-3 p-3">
      <div class="table-responsive m-3">
        <span class="fs-4 ps-2 text-primary"><strong>Type NE</strong></span>
<hr>
        <table class="table table-bordered table-striped table-sm text-center" style="font-size: .8rem;">
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
    <?php while($all_aceh_tipe = $all_aceh_1->fetch_assoc()){
        ?>
    <td><?php echo $all_aceh_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>BABEL</th>
    <?php while($all_babel_tipe = $all_babel_1->fetch_assoc()){
        ?>
    <td><?php echo $all_babel_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>BENGKULU</th>
    <?php while($all_bengkulu_tipe = $all_bengkulu_1->fetch_assoc()){
        ?>
    <td><?php echo $all_bengkulu_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>JAMBI</th>
    <?php while($all_jambi_tipe = $all_jambi_1->fetch_assoc()){
        ?>
    <td><?php echo $all_jambi_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>LAMPUNG</th>
    <?php while($all_lampung_tipe = $all_lampung_1->fetch_assoc()){
        ?>
    <td><?php echo $all_lampung_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>MEDAN</th>
    <?php while($all_medan_tipe = $all_medan_1->fetch_assoc()){
        ?>
    <td><?php echo $all_medan_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>RIDAR</th>
    <?php while($all_ridar_tipe = $all_ridar_1->fetch_assoc()){
        ?>
    <td><?php echo $all_ridar_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>RIKEP</th>
    <?php while($all_rikep_tipe = $all_rikep_1->fetch_assoc()){
        ?>
    <td><?php echo $all_rikep_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>SUMBAR</th>
    <?php while($all_sumbar_tipe = $all_sumbar_1->fetch_assoc()){
        ?>
    <td><?php echo $all_sumbar_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>SUMSEL</th>
    <?php while($all_sumsel_tipe = $all_sumsel_1->fetch_assoc()){
        ?>
    <td><?php echo $all_sumsel_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>SUMUT</th>
    <?php while($all_sumut_tipe = $all_sumut_1->fetch_assoc()){
        ?>
    <td><?php echo $all_sumut_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>LAIN-LAIN</th>
    <?php while($all_lain_tipe = $all_lain_1->fetch_assoc()){
        ?>
    <td><?php echo $all_lain_tipe['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>GRAND TOTAL</th>
    <?php while($all_type = $all_tipe->fetch_assoc()){
        ?>
    <td><?php echo $all_type['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
</table>
<span class="fs-4 ps-2 text-primary"><strong>Software Version</strong></span>
<hr>

<table class="table table-bordered table-striped table-sm text-center" style="font-size: .8rem;">
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
    <?php while($all_aceh_soft = $all_aceh_2->fetch_assoc()){
        ?>
    <td><?php echo $all_aceh_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>BABEL</th>
    <?php while($all_babel_soft = $all_babel_2->fetch_assoc()){
        ?>
    <td><?php echo $all_babel_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>BENGKULU</th>
    <?php while($all_bengkulu_soft = $all_bengkulu_2->fetch_assoc()){
        ?>
    <td><?php echo $all_bengkulu_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>JAMBI</th>
    <?php while($all_jambi_soft = $all_jambi_2->fetch_assoc()){
        ?>
    <td><?php echo $all_jambi_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>LAMPUNG</th>
    <?php while($all_lampung_soft = $all_lampung_2->fetch_assoc()){
        ?>
    <td><?php echo $all_lampung_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>MEDAN</th>
    <?php while($all_medan_soft = $all_medan_2->fetch_assoc()){
        ?>
    <td><?php echo $all_medan_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>RIDAR</th>
    <?php while($all_ridar_soft = $all_ridar_2->fetch_assoc()){
        ?>
    <td><?php echo $all_ridar_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>RIKEP</th>
    <?php while($all_rikep_soft = $all_rikep_2->fetch_assoc()){
        ?>
    <td><?php echo $all_rikep_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>SUMBAR</th>
   <?php while($all_sumbar_soft = $all_sumbar_2->fetch_assoc()){
        ?>
    <td><?php echo $all_sumbar_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>SUMSEL</th>
    <?php while($all_sumsel_soft = $all_sumsel_2->fetch_assoc()){
        ?>
    <td><?php echo $all_sumsel_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>SUMUT</th>
    <?php while($all_sumut_soft = $all_sumut_2->fetch_assoc()){
        ?>
    <td><?php echo $all_sumut_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>LAIN-LAIN</th>
    <?php while($all_lain_soft = $all_lain_2->fetch_assoc()){
        ?>
    <td><?php echo $all_lain_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
  <tr>
    <th>GRAND TOTAL</th>
    <?php while($all_total_soft = $all_total_2->fetch_assoc()){
        ?>
    <td><?php echo $all_total_soft['COUNT(id_ip)']; ?></td>
<?php }; ?>
  </tr>
</table>
      </div>
    </div>
    <div class="p-5"></div>