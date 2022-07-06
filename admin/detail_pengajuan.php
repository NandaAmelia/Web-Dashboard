<div class=" bg-light p-3 rounded-3 bg-opacity-75" style="width: 1100px;">
          <div class="table-responsive m-3">
<span class="fs-4 ps-2 text-primary"><strong>Detail Pengajuan Data</strong></span>
            <hr>
<div class="p-3">
           

<?php
$id = $_GET['id'];
    $ambilpengajuan=$koneksi->query("SELECT * FROM pengajuan WHERE id= '$id'");
    $pengajuan= mysqli_fetch_array($ambilpengajuan);
    ?>
  <br>
  <form method="post">
    <table class="table table-border table-striped">
      <tr class="m-3">
        <th><h6>NE IP</h6></th>
        <td><?php echo $pengajuan['ne_ip']; ?></td>
        
      </tr>
      <tr>
    <th><h6>Hostname</h6></th>
        <td><?php echo $pengajuan['namehost']; ?></td>
      </tr>
      <tr>
    <th><h6>NE Type</h6></th>
    <?php
    $id_tipe = $pengajuan['id_type'];
    $ambiltipe=$koneksi->query("SELECT * FROM tipe WHERE id_type = '$id_tipe'");
    $tipene= mysqli_fetch_array($ambiltipe);
    ?>
    <td><?php echo $tipene['tipe_ne']; ?></td> 
      </tr>
      <tr>
    <th><h6>Software Version</h6></th>
    <?php
    $id_soft = $pengajuan['id_software'];
    $ambilsoft=$koneksi->query("SELECT * FROM software WHERE id_software = '$id_soft'");
    $softne= mysqli_fetch_array($ambilsoft);
    ?>
    <td><?php echo $softne['software_version']; ?></td>
      </tr>
      <tr>
    <th><h6>WITEL</h6></th>
        <td><?php echo $pengajuan['witel']; ?></td>
      </tr>
      <tr>
    <th><h6>STO</h6></th>
          <td><?php echo $pengajuan['sto']; ?></td>
      </tr>
      <tr>
    <th><h6>System Config Modul Control</h6></th>
        <td><?php echo $pengajuan['config']; ?></td>
      </tr>
  <tr>
    <th><h6>Kebutuhan ONT ALARM PLN</h6></th>
      <td><?php echo $pengajuan['kebutuhan_pln']; ?></td>
      </tr>
      <tr>
  <th><h6>Source Power</h6></th>
        <td><?php echo $pengajuan['source_power']; ?></td>
      </tr>
      <tr>
    <th><h6>Colocation</h6></th>
        <td><?php echo $pengajuan['colocation']; ?></td>
      </tr>
      <tr>
      <th><h6>Tanggal Integrasi</h6></th>
      <td><?php echo $pengajuan['tanggal_integrasi']; ?></td>
      </tr>
      <tr>
    <th><h6>Tanggal Bast</h6></th>
      <td><?php echo $pengajuan['tanggal_bast']; ?></td>
      </tr>
      <tr>
        <th><h6>Alamat</h6></th>
 <?php
    $id_lok = $pengajuan['id_lokasi'];
    $ambillok=$koneksi->query("SELECT * FROM lokasi WHERE id_lokasi = '$id_lok'");
    $lok= mysqli_fetch_array($ambillok);
    ?>
    <td><?php echo $lok['alamat_lokasi']; ?></td>  
      </tr>
      <tr>
    <th><h6>Lantai (Tingkat Bangunan )</h6></th>
        <td><?php echo $pengajuan['lantai']; ?></td>
      </tr>
      <tr>
      <th><h6>Ruangan</h6></th>
      <td><?php echo $pengajuan['ruangan']; ?></td>
      </tr>
      <tr>
        <th><h6>Rack</h6></th>
        <td><?php echo $pengajuan['rack']; ?></td>
      </tr>
      
      <tr>
        <th><h6>Shelf</h6></th>
        <td><?php echo $pengajuan['shelf']; ?></td>
      </tr> 
      <tr>
        <th><h6>Status Pengajuan</h6></th>
        <td><?php echo $pengajuan['status_pengajuan']; ?></td>
    </table>
  </form>

        </div>

</div>
</div>
<div class="p-5"></div>