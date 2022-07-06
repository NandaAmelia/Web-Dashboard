<!DOCTYPE html>
<html>
<head>
	<?php
	session_start();

if (isset($_SESSION['admin'])){
    header("location:../admin/index.php");
  }
  elseif (!isset($_SESSION['pekerja']) || empty($_SESSION['pekerja'])) {
    echo "<script>alert('Silakan Login terlebih dahulu!');</script>";
        echo "<script>location='../index.php';</script>";
  }
	include 'sc.php';
	include 'koneksi.php';
	?>
	<title>Edit</title>
</head>
<body>

	<?php
	include 'navbar.php';
	$id = $_GET['id'];
	$ambil=$koneksi->query("SELECT * FROM hostname,tipe, software WHERE tipe.id_type=hostname.id_type && software.id_software=hostname.id_software && hostname.id_ip ='$id'");
    $hostname= mysqli_fetch_array($ambil);
	?>
  

<div class="bg-light container col-5 p-5 mt-5 rounded-3 bg-opacity-75"> 
   <div align="center pt-5">
		<h5 class="pt-3"><b>Ubah Informasi Hostname</b></h5>
   </div>
	<hr class="my-2">
	<br>
	<form method="post">
		<table class="table table-borderless">
			<tr class="m-3">
				<h6 class="pt-3">NE IP</h6>
      	<input class="form-control form-control-md mb-3" type="text" name="ne_ip" placeholder="Masukan NE IP" value="<?php echo $hostname['ne_ip']; ?>" aria-label=".form-control-lg example" required>
      </tr>
			<tr>
				<h6>Hostname</h6>
      	<input class="form-control form-control-md mb-3" type="text" name="hostname" placeholder="Masukan Hostname"  value="<?php echo $hostname['namehost']; ?>" aria-label=".form-control-lg example" required>
			</tr>
			<tr>
				<h6>Status</h6>
      	<select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="status" required>
  <option value="<?php echo $hostname['status']; ?>" selected><?php echo $hostname['status']; ?></option>
  <option value="ACTIVE">Active</option>
  <option value="SHUTDOWN">Shutdown</option>
  <option value="RELOKASI">Relokasi</option>
  <option value="OFF">Off</option>
</select>
			</tr>
			<tr>
				<h6>Eviden Foto</h6>
      	<select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="eviden_foto" required>
  <option value="<?php echo $hostname['eviden_foto']; ?>" selected><?php echo $hostname['eviden_foto']; ?></option>
  <option value="OK">OK</option>
  <option value="SHUTDOWN">Shutdown</option>
</select>
			</tr>
			<tr>
				<h6>NE Type</h6>
				<select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="ne_tipe" required>
					<option value="<?php echo $hostname['id_type']; ?>" selected><?php echo $hostname['tipe_ne']; ?></option>
				<?php
				$ambiltipe=$koneksi->query("SELECT * FROM tipe");
				$resulttipe= mysqli_num_rows($ambiltipe);
				?>
				<?php
				if($resulttipe > 0){
					while($pil_tipe = mysqli_fetch_array($ambiltipe)){
						?>
						<option value="<?php echo $pil_tipe['id_type'] ?>"><?php echo $pil_tipe['tipe_ne'] ?></option> 
						<?php
					}
				}
				?>
				</select>	
			</tr>
			<tr>
				<h6>Software Version</h6>
		<select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="soft_ver" required>
  <option value="<?php echo $hostname['id_software']; ?>" selected><?php echo $hostname['software_version']; ?></option>
  <?php
				$ambilsoft=$koneksi->query("SELECT * FROM software");
				$resultsoft= mysqli_num_rows($ambilsoft);
				if($resultsoft > 0){
					while($pil_soft = mysqli_fetch_array($ambilsoft)){
						?>
						<option value="<?php echo $pil_soft['id_software'] ?>"><?php echo $pil_soft['software_version'] ?></option> 
						<?php
					}
				}
				?>
</select>
			</tr>
			<tr>
				<h6>System Config Modul Control</h6>
      	<select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="config" required>
  <option value="<?php echo $hostname['config']; ?>" selected><?php echo $hostname['config']; ?></option>
  <option value="Active/Standby">Active/Standby</option>
  <option value="Load Sharing">Load Sharing</option>
</select>
			</tr>
			<tr>
				<h6>Kebutuhan ONT ALARM PLN</h6>
      <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="kebutuhan_pln" required>
  <option value="<?php echo $hostname['kebutuhan_pln']; ?>" selected><?php echo $hostname['kebutuhan_pln']; ?></option>
  <option value="KENDALA">KENDALA</option>
  <option value="NOK">NOK</option>
  <option value="OK">OK</option>
  <option value="OSASE">OSASE</option>
  <option value="PROGRESS">PROGRESS</option>
  <option value="TIDAK PERLU">TIDAK PERLU</option>
</select>
			</tr>
			<tr>
				<h6>Source Power</h6>
      	<select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="source" required>
  <option value="<?php echo $hostname['source_power']; ?>" selected><?php echo $hostname['source_power']; ?></option>
  <option value="SINGLE SOURCE">Single Source</option>
  <option value="DUAL SOURCE">Dual Source</option>
</select>
			</tr>
			<tr>
				<h6>Colocation</h6>
      	<select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="colocation" required>
  <option value="<?php echo $hostname['colocation']; ?>" selected><?php echo $hostname['colocation']; ?></option>
  <option value="Colocation">Colocation</option>
  <option value="Non-Colocation">Non-Colocation</option>
</select>
			</tr>
			<tr>
			<h6>Tanggal Integrasi</h6>
      <input class="form-control form-control-md mb-3" type="date" id="date" value="<?php echo $hostname['tanggal_integrasi']; ?>" name="tanggal_integrasi" required>
			</tr>
			<tr>
			<h6>Tanggal Bast</h6>
      <input class="form-control form-control-md mb-3" type="date" id="date" value="<?php echo $hostname['tanggal_bast']; ?>" name="tanggal_bast" required>
			</tr>
			<tr>
        <th><h6>Keterangan</h6></th>
        <td>
          <textarea class="form-control form-control-md" rows="5" name="keterangan" placeholder="Masukan Keterangan" aria-label=".form-control-lg example" ></textarea>
        </td>
      </tr> 
		</table>
          <button class="btn btn-primary"  type="submit" name="ubah">Ubah</button>

	</form>

<?php
if (isset($_POST['ubah'])) {
	$ne_ip = $_POST['ne_ip'];
    $namehost = $_POST['hostname'];
    $id_type = $_POST['ne_tipe'];
    $id_software = $_POST['soft_ver'];
    $status = $_POST['status'];
    $eviden_foto = $_POST['eviden_foto'];
    $config = $_POST['config'];
    $kebutuhan_pln = $_POST['kebutuhan_pln'];
    $keterangan = $_POST['keterangan'];
    $source = $_POST['source'];
    $colocation = $_POST['colocation'];
    $tanggal_bast =  $_POST['tanggal_bast'];
    $tanggal_integrasi =  $_POST['tanggal_integrasi'];
    
	$cekhos=$koneksi->query("SELECT ne_ip, namehost FROM pengajuan WHERE namehost='$namehost' OR ne_ip= '$ne_ip'");
    $hitunghost = $cekhos->num_rows;
  if($hitunghost > 1){?>
      <div class="alert alert-danger text-center" role="alert">Namehost atau IP sudah Sedang Diajukan.</div>

      <?php
  }else {
	$cekdata=$koneksi->query("SELECT ne_ip, namehost FROM hostname WHERE namehost='$namehost' OR ne_ip= '$ne_ip'");
  	$hitungcocok = $cekdata->num_rows;
    			if($hitungcocok > 1) {?>
      <div class="alert alert-danger text-center" role="alert">Namehost atau IP sudah terdaftar.</div>

            <?php 
        		}elseif($hitungcocok == 1) {
        			$koneksi-> query("UPDATE hostname SET
        			ne_ip = '$ne_ip',
        			namehost = '$namehost',
        			id_type = '$id_type',
        			id_software = '$id_software',
        			status = '$status',
        			eviden_foto = '$eviden_foto',
        			config = '$config',
        			kebutuhan_pln = '$kebutuhan_pln',
        			source_power = '$source',
        			colocation = '$colocation',
        			tanggal_bast = '$tanggal_bast',
        			tanggal_integrasi = '$tanggal_integrasi',
        			keterangan = '$keterangan'
        			WHERE id_ip='$id'");

					echo "<script>location='detail.php?id=$id';</script>";	
										
		}					
}
}
?>
	
</div>



	<?php
	include 'footer.php';
	?>

</body>
</html>