<title>SUM PLN</title>
<div class="container">
<div class="nav-scroller p-3 m-3 bg-light bg-opacity-75 rounded-pill">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-dark" href="index.php?halaman=sum_all">ALL OLT</a>
      <a class="p-2 link-dark" href="index.php?halaman=sum_active">OLTACTIVE</a>
      <a class="p-2 link-primary" href="index.php?halaman=sum_pln"><b>ALARM PLN</b></a>
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
        <span class="fs-4 ps-2 text-primary"><strong>Progress Pemasangan Alarm PLN OLT</strong></span>
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
    <div class="p-5"></div>