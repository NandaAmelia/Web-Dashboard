	<title>Tambah Lokasi</title>
<div class="bg-light container col-8 p-5 mt-5 rounded-3 bg-opacity-75">
   <div align="center pt-5">
		<h5 class="pt-3"><b>Tambahkan Lokasi</b></h5>
   </div>
	<hr class="my-2">
	<br>
	<form method="post" >
		<table class="table table-borderless">
			<tr class="m-3">
				<h6 class="pt-3">WITEL</h6>
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
			<tr>
				<h6>Alamat</h6>
      	<textarea class="form-control form-control-md" rows="5" name="alamat" placeholder="Masukan Kepemilikan" aria-label=".form-control-lg example" required></textarea>
			</tr>
			<tr>
				<h6>Kepemilikan</h6>
      	<input class="form-control form-control-md mb-3" type="text" name="kepemilikan" placeholder="Masukan Kepemilikan" aria-label=".form-control-lg example" required>
			</tr>
			<tr>
				<h6>Bangunan</h6>
      	<select value="" class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="bangunan" required>
  <option selected disabled>Pilih Jenis Bangunan</option>
  <option value="GEDUNG">Gedung</option>
  <option value="CABINET">Cabinet</option>
  <option value="SHELTER">Shelter</option>
</select>
      	</tr>
			<tr>
				<h6>Nama Lokasi</h6>
				<input class="form-control form-control-md mb-3" type="text" name="nama_lokasi" placeholder="Masukan Nama Lokasi " aria-label=".form-control-lg example" required>
			</tr>
			<tr>
				<h6>Koordinat Lat</h6>
      	<input class="form-control form-control-md mb-3" type="text" name="koordinat_lat" placeholder="Masukan Koordinat" aria-label=".form-control-lg example" required>
			</tr>
			<tr>
				<h6>Koordinat Long</h6>
      	<input class="form-control form-control-md mb-3" type="text" name="koordinat_long" placeholder="Masukan Koordinat" aria-label=".form-control-lg example" required>
			</tr>
			
		</table>
          <button class="btn btn-primary"  type="submit" name="tambah">Tambah</button>
<?php
	if (isset($_POST['tambah'])) {
  		$wilayah = $_POST['witel'];
  		$sto = $_POST['sto'];
  		$alamat_lokasi = $_POST['alamat'];
  		$kepemilikan = $_POST['kepemilikan'];
  		$bangunan = $_POST['bangunan'];
  		$nama_lokasi = $_POST['nama_lokasi'];
  		$koordinat_lat = $_POST['koordinat_lat'];
  		$koordinat_long = $_POST['koordinat_long'];

		$ambil=$koneksi->query("SELECT alamat_lokasi, bangunan FROM lokasi WHERE alamat_lokasi='$alamat_lokasi' AND bangunan='$bangunan'");
		$lokasi = $ambil->num_rows;

$cekdatasto=$koneksi->query("SELECT sto, wilayah FROM lokasi WHERE sto='$sto' AND wilayah= '$wilayah'");
  	$hitungcocoksto = $cekdatasto->num_rows;
    if($hitungcocoksto==0) {
  echo "<script>alert('STO dan Witel tidak sesuai!');</script>";
  echo "<script>location='index.php?halaman=tambahlokasi';</script>"; 
}elseif($hitungcocoksto>  0){
		    if ($lokasi==1) {
				//      $akun = $ambil->fetch_assoc();
				echo "<script>alert('Lokasi sudah terdafatr!');</script>";
				echo "<div class='alert alert-danger'>Lokasi sudah terdaftar. Silakan daftar ulang.</div>";
			}
		
			elseif($lokasi==0) {
			$koneksi->query("INSERT INTO lokasi (wilayah, sto, alamat_lokasi ,kepemilikan, bangunan, nama_lokasi, koordinat_lat, koordinat_long) 
							VALUES('$wilayah', '$sto', '$alamat_lokasi' ,'$kepemilikan', '$bangunan', '$nama_lokasi','$koordinat_lat','$koordinat_long')");

			echo "<script>alert('Lokasi Berhasil Ditambah!');</script>";
			echo "<meta http-equiv='refresh'content='1;url=index.php?halaman=kelola_data'>";
			}
	}
}
?>
	</form>