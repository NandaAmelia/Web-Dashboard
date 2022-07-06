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
        <td><select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="status_pengajuan" required>
  <option value="" selected disabled>Pilih Status</option>
  <option value="Disetujui">Setujui</option>
  <option value="Invalid">Minta Revisi</option>
</select></td>
      </tr>
      <tr>
        <th><h6>Keterangan Penjelasan</h6></th>
        <td>
          <textarea class="form-control form-control-md" rows="5" name="keterangan_pengajuan" placeholder="Masukan Penjelasan" aria-label=".form-control-lg example" required=""></textarea>
        </td>
      </tr> 
    </table>
    <button class="btn btn-primary"  type="submit" name="kirim">Kirim</button>
  </form>

  <?php
if (isset($_POST['kirim'])) {
  $status_pengajuan = $_POST['status_pengajuan'];
  $keterangan_pengajuan = $_POST['keterangan_pengajuan'];
  $ne_ip= $pengajuan['ne_ip'];
$namehost =$pengajuan['namehost'];
$config =$pengajuan['config'];
$kebutuhan_pln =$pengajuan['kebutuhan_pln'];
$source =$pengajuan['source_power'];
$colocation =$pengajuan['colocation'];
$tanggal_bast =$pengajuan['tanggal_bast'];
$tanggal_integrasi =$pengajuan['tanggal_integrasi'];
$witel =$pengajuan['witel'];
$lantai =$pengajuan['lantai'];
$ruangan =$pengajuan['ruangan'];
$rack =$pengajuan['rack'];
$shelf =$pengajuan['shelf'];

  $tanggal_pemeriksaan = date("d-m-Y");
if($status_pengajuan=="Disetujui"){
  $koneksi->query("UPDATE pengajuan SET tanggal_pemeriksaan = '$tanggal_pemeriksaan', keterangan_pengajuan = '$keterangan_pengajuan', status_pengajuan ='$status_pengajuan'  WHERE id = '$id';");



   $koneksi->query("INSERT INTO hostname(ne_ip,namehost,id_type,id_software,config,kebutuhan_pln,source_power,colocation,tanggal_integrasi,tanggal_bast,witel) 
                                    VALUES('$ne_ip','$namehost','$id_tipe','$id_soft','$config','$kebutuhan_pln','$source','$colocation','$tanggal_integrasi','$tanggal_bast','$witel')");
              $id_baru = $koneksi->insert_id;
              $koneksi->query("INSERT INTO lokasi_hostname(id_lokasi,id_ip,lantai,ruangan,rack,shelf,witel) 
                                    VALUES('$id_lok','$id_baru','$lantai','$ruangan','$rack','$shelf','$witel')");
              echo "<script>alert('Berhasil Dikirim!');</script>";
  echo "<script>location='index.php?halaman=pengajuan';</script>";

}elseif($status_pengajuan=="Invalid")
               $koneksi->query("UPDATE pengajuan SET tanggal_pemeriksaan = '$tanggal_pemeriksaan', keterangan_pengajuan = '$keterangan_pengajuan', status_pengajuan ='$status_pengajuan'  WHERE id = '$id';");
               echo "<script>alert('Berhasil Dikirim!');</script>";
  echo "<script>location='index.php?halaman=pengajuan';</script>";
}

?>
        </div>

</div>
</div>
<div class="p-5"></div>
