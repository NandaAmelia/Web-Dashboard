  <?php if (empty($_SESSION['namehost']) OR empty($_SESSION['id_lokasi']))
  {
  echo "<script>alert('Data Tidak lengkap!');</script>";
  echo "<script>location='index.php?halaman=tambahhostname';</script>"; 
} ?>
<div class="bg-light container col-6 p-5 mt-5 rounded-3 bg-opacity-75">
  <nav>
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link disabled" >Formulir Hostname</a>
  </li>
   <li class="nav-item">
    <a class="nav-link disabled" >Lokasi Hostname</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active">Data Masuk</a>
  </li>
</ul>

  </nav>
   <div align="center pt-5">
    <h5 class="pt-3"><b>Konfirmai Hostname</b></h5>
   </div>
  <hr class="my-2">
  <br>
  <form method="post">
    <table class="table table-border table-striped">
      <?php

  $ne_ip = $_SESSION['ne_ip'];
    $namehost = $_SESSION['namehost'];
    $id_type = $_SESSION['id_type'];
    $id_software = $_SESSION['id_software'];
    $witel = $_SESSION['witel'];
    $sto = $_SESSION['sto'];
    $config = $_SESSION['config'];
    $kebutuhan_pln = $_SESSION['kebutuhan_pln'];
    $source = $_SESSION['source'];
    $colocation = $_SESSION['colocation'];
    $tanggal_bast =  $_SESSION['tanggal_bast'];
    $tanggal_integrasi =  $_SESSION['tanggal_integrasi'];
    $id_lokasi =  $_SESSION['id_lokasi'];
    $lantai =  $_SESSION['lantai'];
    $ruangan =  $_SESSION['ruangan'];
    $rack =  $_SESSION['rack'];
    $shelf =  $_SESSION['shelf'];

      ?>
      <tr class="m-3">
        <th><h6>NE IP</h6></th>
        <td><?php echo $ne_ip; ?></td>
        
      </tr>
      <tr>
    <th><h6>Hostname</h6></th>
        <td><?php echo $namehost; ?></td>
      </tr>
      <tr>
    <th><h6>NE Type</h6></th>
    <?php
    $ambiltipe=$koneksi->query("SELECT tipe_ne FROM tipe WHERE id_type= '$id_type'");
    $tipene= mysqli_fetch_array($ambiltipe);
    ?>
    <td><?php echo $tipene['tipe_ne'] ?></td> 
      </tr>
      <tr>
    <th><h6>Software Version</h6></th>
    <?php
    $ambilsoft=$koneksi->query("SELECT software_version FROM software WHERE id_software= '$id_software'");
    $softne= mysqli_fetch_array($ambilsoft);
    ?>
    <td><?php echo $softne['software_version'] ?></td>
      </tr>
      <tr>
    <th><h6>WITEL</h6></th>
        <td><?php echo $witel; ?></td>
      </tr>
      <tr>
    <th><h6>STO</h6></th>
          <td><?php echo $sto; ?></td>
      </tr>
      <tr>
    <th><h6>System Config Modul Control</h6></th>
        <td><?php echo $config; ?></td>
      </tr>
  <tr>
    <th><h6>Kebutuhan ONT ALARM PLN</h6></th>
      <td><?php echo $kebutuhan_pln; ?></td>
      </tr>
      <tr>
  <th><h6>Source Power</h6></th>
        <td><?php echo $source; ?></td>
      </tr>
      <tr>
    <th><h6>Colocation</h6></th>
        <td><?php echo $colocation; ?></td>
      </tr>
      <tr>
      <th><h6>Tanggal Integrasi</h6></th>
      <td><?php echo $tanggal_integrasi; ?></td>
      </tr>
      <tr>
    <th><h6>Tanggal Bast</h6></th>
      <td><?php echo $tanggal_bast; ?></td>
      </tr>
      <tr>
        <th><h6>Alamat</h6></th>
        <?php
    $ambillok=$koneksi->query("SELECT alamat_lokasi FROM lokasi WHERE id_lokasi= '$id_lokasi'");
    $lok= mysqli_fetch_array($ambillok);
    ?>
    <td><?php echo $lok['alamat_lokasi'] ?></td>  
      </tr>
      <tr>
    <th><h6>Lantai (Tingkat Bangunan )</h6></th>
        <td><?php echo $lantai; ?></td>
      </tr>
      <tr>
      <th><h6>Ruangan</h6></th>
      <td><?php echo $ruangan; ?></td>
      </tr>
      <tr>
        <th><h6>Rack</h6></th>
        <td><?php echo $rack; ?></td>
      </tr>
      
      <tr>
        <th><h6>Shelf</h6></th>
        <td><?php echo $shelf; ?></td>
      </tr> 
    </table>
    <div class="alert alert-danger text-center" role="alert">
  Periksa Kembali Data Yang Akan Diinpt ke database.
</div>

          <a href="index.php?halaman=ulang" class="btn btn-danger btn-xs">Ulang</a>
          <button class="btn btn-primary" name="kirim">Tambah Hostname</button>

  </form>

<?php
if (isset($_POST['kirim'])) {
    
  $cekdata=$koneksi->query("SELECT ne_ip, namehost FROM pengajuan WHERE namehost='$namehost' OR ne_ip= '$ne_ip'");
    $hitungcocok = $cekdata->num_rows;
    $ambildata = $cekdata->fetch_assoc();
          if($hitungcocok==1) {?>
      <div class="alert alert-danger text-center" role="alert">Namehost atau IP sudah Diajukan.</div>

            <?php 
            }elseif($hitungcocok==0) {
              $koneksi->query("INSERT INTO hostname(ne_ip,namehost,id_type,id_software,config,kebutuhan_pln,source_power,colocation,tanggal_integrasi,tanggal_bast,witel) 
                                    VALUES('$ne_ip','$namehost','$id_type','$id_software','$config','$kebutuhan_pln','$source','$colocation','$tanggal_integrasi','$tanggal_bast','$witel')");
              $id_baru = $koneksi->insert_id;
              $koneksi->query("INSERT INTO lokasi_hostname(id_lokasi,id_ip,lantai,ruangan,rack,shelf,witel) 
                                    VALUES('$id_lokasi','$id_baru','$lantai','$ruangan','$rack','$shelf','$witel')");

unset($_SESSION['ne_ip']);
unset($_SESSION['namehost']);
unset($_SESSION['id_type']);
unset($_SESSION['id_software']);
unset($_SESSION['witel']);
unset($_SESSION['sto']);
unset($_SESSION['config']);
unset($_SESSION['kebutuhan_pln']);
unset($_SESSION['source']);
unset($_SESSION['colocation']);
unset($_SESSION['tanggal_bast']);
unset($_SESSION['tanggal_integrasi']);
unset($_SESSION['id_lokasi']);
unset($_SESSION['lantai']);
unset($_SESSION['ruangan']);
unset($_SESSION['rack']);
unset($_SESSION['shelf']);

    echo "<script>alert('Data Berhasil diinput');</script>";
    echo "<script>location='index.php?halaman=cari';</script>";
                    
              
}
}

?>
  
</div>