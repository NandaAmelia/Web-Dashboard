<title>SUM ALL</title>
<div class="container">
<div class="nav-scroller p-3 m-3 bg-light bg-opacity-75 rounded-pill">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-dark" href="index.php?halaman=sum_all">ALL OLT</a>
      <a class="p-2 link-primary" href="index.php?halaman=sum_active"><b>OLT ACTIVE</b></a>
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
<span class="fs-4 ps-2 text-primary"><strong>Software Version</strong></span>

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