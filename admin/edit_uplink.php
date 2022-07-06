<body>

	<?php
	$id = $_GET['id'];

  $query =$koneksi->query("SELECT * FROM hostname WHERE id_ip = '$id'");
  $detail = $query ->fetch_assoc();
 

$querysingle =$koneksi->query("SELECT * FROM uplink WHERE id_ip = '$id'");
  $detailsingle = $querysingle ->fetch_assoc();
  $hitungsingle = $querysingle->num_rows;
   $status = $detailsingle['status'];

  $querydual =$koneksi->query("SELECT * FROM uplink_b WHERE id_ip = '$id'");
  $detaildual = $querydual ->fetch_assoc();
  $hitungdual = $querydual->num_rows;
	?>
  

<div class="bg-light container col-5 p-5 mt-5 rounded-3 bg-opacity-75"> 
   <div align="center pt-5">
		<h5 class="pt-3"><b>Ubah Uplink</b></h5>
   </div>
	<hr class="my-2">
	<br>
	<form method="post">
		<table class="table table-borderless">
			<?php if($hitungsingle==1){ ?>
			<tr class="m-3">
				<h6>Status</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="status">
  <option value="<?php echo $detailsingle['status']; ?>" selected><?php echo $detailsingle['status']; ?></option>
  <option value="DUALHOMING">DUALHOMING</option>
  <option value="DUALTRACK">DUALTRACK</option>
  <option value="NOK">NOK</option>
  <option value="PROGRESS">PROGRESS</option>
  <option value="Tidak Perlu">Tidak Perlu</option>
</select>
      </tr>
      <tr>
        <h6>Tanggal Realisasi</h6>
        <input class="form-control form-control-md mb-3" type="date" id="date" value="<?php echo $detailsingle['tanggal_realisasi']; ?>"  name="tanggal_realisasi">
      </tr>
      <tr>
        <h6 class="pt-3">Metro A</h6>
        <input class="form-control form-control-md mb-3" type="text" name="metro_a" placeholder="Masukan Metro" value="<?php echo $detailsingle['metro_a']; ?>" aria-label=".form-control-lg example">
      </tr>
			<tr>
				<h6>Jenis Kabel Uplink A</h6>
      	<select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="jenis_kabel">
  <option value="<?php echo $detailsingle['jenis_kabel']; ?>" selected><?php echo $detailsingle['jenis_kabel']; ?></option>
  <option value="Patchcord">PATCHCORD</option>
  <option value="Akses">AKSES</option>
  <option value="Akses + Chevron">AKSES + CHEVRON</option>
  <option value="Feeder">FEEDER</option>
  <option value="RMJ">RMJ</option>
  <option value="Backbone">BACKBONE</option>
  <option value="SKKL">SKKL</option>
  <option value="IKK">IKK</option>
  <option value="G652">G652</option>
  <option value="G655 + G652">G655 + G652</option>
</select>
			</tr>
      <tr>
        <h6>Jarak A (KM)</h6>
        <input class="form-control form-control-md mb-3" type="number" name="jarak_a" placeholder="Masukan Jarak" value="<?php echo $detailsingle['jarak_a']; ?>" aria-label=".form-control-lg example">
      </tr>
      <tr>
        <h6>Kapasitas A (Gb)</h6>
        <input class="form-control form-control-md mb-3" type="number" name="kapasitas_a" placeholder="Masukan Kapasitas" value="<?php echo $detailsingle['kapasitas_a']; ?>" aria-label=".form-control-lg example">
      </tr>
      <tr>
        <h6>Catatan</h6>
        <textarea class="form-control form-control-md" rows="5" name="catatan"  placeholder="Masukan Catatan" value="<?php echo $detailsingle['catatan']; ?>" aria-label=".form-control-lg example"></textarea>
      </tr>
      <tr>
        <h6>Panjang Kabel A</h6>
        <input class="form-control form-control-md mb-3" type="text" name="panjang_kabel" placeholder="Masukan Panjang Kabel " value="<?php echo $detailsingle['panjang_kabel']; ?>" aria-label=".form-control-lg example">
      </tr>
			 <?php }elseif ($hitungsingle==0) {
              ?>
              <tr class="m-3">
        <h6>Status</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="status2">
  <option value="DUALHOMING">DUALHOMING</option>
  <option value="DUALTRACK">DUALTRACK</option>
  <option value="NOK">NOK</option>
  <option value="PROGRESS">PROGRESS</option>
  <option value="Tidak Perlu" selected>Tidak Perlu</option>
</select>
      </tr>
      <tr>
        <h6>Tanggal Realisasi</h6>
        <input class="form-control form-control-md mb-3" type="date" id="date"  name="tanggal_realisasi2">
      </tr>
      <tr>
        <h6 class="pt-3">Metro A</h6>
        <input class="form-control form-control-md mb-3" type="text" name="metro_a2" placeholder="Masukan Metro" aria-label=".form-control-lg example">
      </tr>
      <tr>
        <h6>Jenis Kabel Uplink A</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="jenis_kabel2">
  <option value="Patchcord" selected>PATCHCORD</option>
  <option value="Akses">AKSES</option>
  <option value="Akses + Chevron">AKSES + CHEVRON</option>
  <option value="Feeder">FEEDER</option>
  <option value="RMJ">RMJ</option>
  <option value="Backbone">BACKBONE</option>
  <option value="SKKL">SKKL</option>
  <option value="IKK">IKK</option>
  <option value="G652">G652</option>
  <option value="G655 + G652">G655 + G652</option>
</select>
      </tr>
      <tr>
        <h6>Jarak A (KM)</h6>
        <input class="form-control form-control-md mb-3" type="number" name="jarak_a2" placeholder="Masukan Jarak" aria-label=".form-control-lg example">
      </tr>
      <tr>
        <h6>Kapasitas A (Gb)</h6>
        <input class="form-control form-control-md mb-3" type="number" name="kapasitas_a2" placeholder="Masukan Kapasitas" aria-label=".form-control-lg example">
      </tr>
      <tr>
        <h6>Catatan</h6>
        <textarea class="form-control form-control-md" rows="5" name="catatan2"  placeholder="Masukan Catatan" aria-label=".form-control-lg example"></textarea>
      </tr>
      <tr>
        <h6>Panjang Kabel A</h6>
        <input class="form-control form-control-md mb-3" type="text" name="panjang_kabel2" placeholder="Masukan Panjang Kabel " aria-label=".form-control-lg example">
      </tr>
    <?php } ?>
			<?php if ($status == 'DUALHOMING' || $status== 'DUALTRACK' || $status== 'NOK'): ?>
        <?php if($hitungdual==1){ ?>
              <tr class="m-3">
        <h6 class="pt-3">Metro B</h6>
        <input class="form-control form-control-md mb-3" type="text" name="metro_b" placeholder="Masukan Source" value="<?php echo $detaildual['metro_b']; ?>" aria-label=".form-control-lg example">
      </tr>
      <tr>
        <h6>Jenis Kabel Uplink B</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="jenis_kabelb">
          <option value="<?php echo $detaildual['jenis_kabel']; ?>" selected><?php echo $detaildual['jenis_kabel']; ?></option>
  <option value="Patchcord">PATCHCORD</option>
  <option value="Akses">AKSES</option>
  <option value="Akses + Chevron">AKSES + CHEVRON</option>
  <option value="Feeder">FEEDER</option>
  <option value="RMJ">RMJ</option>
  <option value="Backbone">BACKBONE</option>
  <option value="SKKL">SKKL</option>
  <option value="IKK">IKK</option>
  <option value="G652">G652</option>
  <option value="G655 + G652">G655 + G652</option>
</select>
      </tr>
      <tr>
        <h6>Jarak B (KM)</h6>
        <input class="form-control form-control-md mb-3" type="text" name="jarak_b" placeholder="Masukan Jarak" value="<?php echo $detaildual['jarak_b']; ?>" aria-label=".form-control-lg example">
      </tr>
      <tr>
        <h6>Kapasitas B (Gb)</h6>
        <input class="form-control form-control-md mb-3" type="text" name="kapasitas_b" placeholder="Masukan Kapasitas" value="<?php echo $detaildual['kapasitas_b']; ?>" aria-label=".form-control-lg example">
      </tr>
       <?php }
       elseif ($hitungdual==0) {
              ?>
              <tr class="m-3">
        <h6 class="pt-3">Metro B</h6>
        <input class="form-control form-control-md mb-3" type="text" name="metro_b2" placeholder="Masukan Source" aria-label=".form-control-lg example">
      </tr>
      <tr>
        <h6>Jenis Kabel Uplink B</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="jenis_kabelb2">
  <option value="Patchcord" selected>PATCHCORD</option>
  <option value="Akses">AKSES</option>
  <option value="Akses + Chevron">AKSES + CHEVRON</option>
  <option value="Feeder">FEEDER</option>
  <option value="RMJ">RMJ</option>
  <option value="Backbone">BACKBONE</option>
  <option value="SKKL">SKKL</option>
  <option value="IKK">IKK</option>
  <option value="G652">G652</option>
  <option value="G655 + G652">G655 + G652</option>
</select>
      </tr>
      <tr>
        <h6>Jarak B (KM)</h6>
        <input class="form-control form-control-md mb-3" type="text" name="jarak_b2" placeholder="Masukan Jarak" aria-label=".form-control-lg example">
      </tr>
      <tr>
        <h6>Kapasitas B (Gb)</h6>
        <input class="form-control form-control-md mb-3" type="text" name="kapasitas_b2" placeholder="Masukan Kapasitas" aria-label=".form-control-lg example">
      </tr>
    <?php } ?>
    <?php else : ?>
  <?php endif ?>
			
		</table>
          <button class="btn btn-primary"  type="submit" name="ubah">Ubah</button>

	</form>

<?php
if (isset($_POST['ubah'])) {

    if($hitungsingle==1){
      $koneksi-> query("UPDATE uplink SET
              status = '$_POST[status]',
              tanggal_realisasi = '$_POST[tanggal_realisasi]',
              metro_a = '$_POST[metro_a]',
              jenis_kabel ='$_POST[jenis_kabel]', 
              jarak_a = '$_POST[jarak_a]',
              kapasitas_a = '$_POST[kapasitas_a]',
              catatan = '$_POST[catatan]',
              panjang_kabel = '$_POST[panjang_kabel]'
              WHERE id_ip='$id'");
    }
    elseif ($hitungsingle==0) {
      if(empty($_POST['metro_a2']) || empty($_POST['status2'])){
      echo "<script>location='detail.php?id=$id';</script>";  
    }else{
      $koneksi->query("INSERT INTO uplink(id_ip,status,tanggal_realisasi,metro_a,jenis_kabel, jarak_a, kapasitas_a,catatan,panjang_kabel) 
                                    VALUES('$id','$_POST[status2]','$_POST[tanggal_realisasi2]','$_POST[metro_a2]','$_POST[jenis_kabel2]','$_POST[jarak_a2]','$_POST[kapasitas_a2]','$_POST[catatan2]','$_POST[panjang_kabel2]')");
    }
    }
    if($hitungdual==1){
      $koneksi-> query("UPDATE uplink_b SET
              metro_b = '$_POST[metro_b]',
              jenis_kabel = '$_POST[jenis_kabelb]',
              kapasitas_b = '$_POST[kapasitas_b]',
              jarak_b ='$_POST[jarak_b]'
              WHERE id_ip='$id'");
    }
    elseif ($hitungdual==0) {
     if(empty($_POST['metro_b2'])){
      echo "<script>location='detail.php?id=$id';</script>";  
    }else{
      $koneksi->query("INSERT INTO uplink_b(id_ip,metro_b,jenis_kabel,kapasitas_b,jarak_b) 
                                    VALUES('$id','$_POST[metro_b2]','$_POST[jenis_kabelb2]','$_POST[kapasitas_b2]','$_POST[jarak_b2]')");
    }
}
    echo "<script>location='detail.php?id=$id';</script>";  
}
?>
	
</div>

</body>