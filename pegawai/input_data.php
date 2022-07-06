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
	<title>Pengajuan</title>
</head>
<body>

	<?php
	include 'navbar.php';
	?>
	<?php if (empty($_SESSION['namehost'])): ?>
  

<div class="bg-light container col-5 p-5 mt-5 rounded-3 bg-opacity-75">
	<nav>
		<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" >Formulir Pengajuan</a>
  </li>
   <li class="nav-item">
    <a class="nav-link disabled" >Lokasi Pengajuan</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled">Data Dikirim</a>
  </li>
</ul>

	</nav>
   <div align="center pt-5">
		<h5 class="pt-3"><b>Formulir Pengajuan Data</b></h5>
   </div>
	<hr class="my-2">
	<br>
	<form method="post">
		<table class="table table-borderless">
			<tr>
				<h6>WITEL</h6>
      	<select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="witel" required>
  <option value="" selected disabled>Pilih WITEL</option>
  <?php
				$ambilwitel=$koneksi->query("SELECT wilayah FROM lokasi GROUP BY wilayah");
				$resultwitel= mysqli_num_rows($ambilwitel);
				if($resultwitel > 0){
					while($pil_witel = mysqli_fetch_array($ambilwitel)){
						?>
						<option value="<?php echo $pil_witel['wilayah'] ?>"><?php echo $pil_witel['wilayah'] ?></option> 
						<?php
					}
				}
				?>
</select>
			</tr>
			<tr>
			<h6>STO</h6>
      		<select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="sto" required>
  <option value="" selected disabled>Pilih STO</option>
  <?php
				$ambilsto=$koneksi->query("SELECT sto,nama_sto FROM sto");
				$resultsto= mysqli_num_rows($ambilsto);
				if($resultsto > 0){
					while($pil_sto = mysqli_fetch_array($ambilsto)){
						?>
						<option value="<?php echo $pil_sto['sto'] ?>"><?php echo $pil_sto['sto'] ?>, <?php echo $pil_sto['nama_sto'] ?></option> 
						<?php
					}
				}
				?>
</select>
			</tr>
			<tr class="m-3">
				<h6 class="pt-3">NE IP</h6>
      	<input class="form-control form-control-md mb-3" type="text" name="ne_ip" placeholder="Masukan NE IP" aria-label=".form-control-lg example" required>
      </tr>
			<tr>
				<h6>Hostname</h6>
      	<input class="form-control form-control-md mb-3" type="text" name="hostname" placeholder="Masukan Hostname" aria-label=".form-control-lg example" required>
			</tr>
			<tr>
				<h6>NE Type</h6>
				<select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="ne_tipe" required>
					<option value="" selected disabled>Pilih NE TYPE</option>
				<?php
				$ambiltipe=$koneksi->query("SELECT * FROM tipe");
				$resulttipe= mysqli_num_rows($ambiltipe);
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
  <option value="" selected disabled>Pilih Software Version</option>
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
  <option value="" selected disabled>Pilih Config Modul Control</option>
  <option value="Active/Standby">Active/Standby</option>
  <option value="Load Sharing">Load Sharing</option>
</select>
			</tr>
			<tr>
				<h6>Kebutuhan ONT ALARM PLN</h6>
      <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="kebutuhan_pln" required>
  <option value="" selected disabled>Pilih Kebutuhan ONT ALARM PLN</option>
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
  <option value="" selected disabled>Pilih Source Power</option>
  <option value="SINGLE SOURCE">Single Source</option>
  <option value="DUAL SOURCE">Dual Source</option>
</select>
			</tr>
			<tr>
				<h6>Colocation</h6>
      	<select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="colocation" required>
  <option value="" selected disabled>Pilih COLOCATION METRO / DWDM</option>
  <option value="Colocation">Colocation</option>
  <option value="Non-Colocation">Non-Colocation</option>
</select>
			</tr>
			<tr>
			<h6>Tanggal Integrasi</h6>
      <input class="form-control form-control-md mb-3" type="date" id="date" name="tanggal_integrasi" required>
			</tr>
			<tr>
			<h6>Tanggal Bast</h6>
      <input class="form-control form-control-md mb-3" type="date" id="date" name="tanggal_bast" required>
			</tr>
		</table>
		<div class="alert alert-danger text-center" role="alert">
  Periksa Kembali Data Yang Akan Diajukan. Menghindari Pengulangan data.
</div>
          <button class="btn btn-primary"  type="submit" name="selanjut">Selanjutnya</button>

	</form>

<?php
if (isset($_POST['selanjut'])) {
	$ne_ip = $_POST['ne_ip'];
    $namehost = $_POST['hostname'];
    $id_type = $_POST['ne_tipe'];
    $id_software = $_POST['soft_ver'];
    $witel = $_POST['witel'];
    $sto = $_POST['sto'];
    $config = $_POST['config'];
    $kebutuhan_pln = $_POST['kebutuhan_pln'];
    $source = $_POST['source'];
    $colocation = $_POST['colocation'];
    $tanggal_bast =  $_POST['tanggal_bast'];
    $tanggal_integrasi =  $_POST['tanggal_integrasi'];
    
    $cekdatasto=$koneksi->query("SELECT sto, wilayah FROM lokasi WHERE sto='$sto' AND wilayah= '$witel'");
  	$hitungcocoksto = $cekdatasto->num_rows;
    if($hitungcocoksto==0) {
  echo "<script>alert('STO dan Witel tidak sesuai!');</script>";
  echo "<script>location='input_data.php';</script>"; 
}elseif($hitungcocoksto>  0){
	$cekpengajuan=$koneksi->query("SELECT ne_ip, namehost FROM pengajuan WHERE namehost='$namehost' OR ne_ip= '$ne_ip'");
    $hitungpengajuan = $cekpengajuan->num_rows;
  if($hitungpengajuan==1){?>
      <div class="alert alert-danger text-center" role="alert">Namehost atau IP sudah Sedang Diajukan.</div>

      <?php
  }elseif ($hitungpengajuan==0) {
	$cekdata=$koneksi->query("SELECT ne_ip, namehost FROM hostname WHERE namehost='$namehost' OR ne_ip= '$ne_ip'");
  	$hitungcocok = $cekdata->num_rows;
    			if($hitungcocok==1) {?>
      <div class="alert alert-danger text-center" role="alert">Namehost atau IP sudah terdaftar.</div>

            <?php 
        		}elseif($hitungcocok==0) {
        			$_SESSION['ne_ip'] = $ne_ip;
        			$_SESSION['namehost'] = $namehost;
        			$_SESSION['id_type'] = $id_type;
        			$_SESSION['id_software'] = $id_software;
        			$_SESSION['witel'] = $witel;
        			$_SESSION['sto'] = $sto;
        			$_SESSION['config'] = $config;
        			$_SESSION['kebutuhan_pln'] = $kebutuhan_pln;
        			$_SESSION['source'] = $source;
        			$_SESSION['colocation'] = $colocation;
        			$_SESSION['tanggal_bast'] = $tanggal_bast;
        			$_SESSION['tanggal_integrasi'] = $tanggal_integrasi;

					echo "<script>location='input_lokasi.php';</script>";	
										
		}					
}
}
}
?>
	
</div>
<?php else: ?>
	<div class="container col-5 p-5 mt-5 rounded-3">
<div class="alert alert-info text-center"><h3>Data telah diisi,<a href="input_lokasi.php" class="link-danger"> masukan lokasi!</a></h3></div></div>
<div class="p-5"></div>
<div class="p-5"></div>
<div class="p-5"></div>
<?php endif ?>



	<?php
	include 'footer.php';
	?>

</body>
</html>