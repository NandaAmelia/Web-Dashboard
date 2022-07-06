<body>

	<?php
	$id = $_GET['id'];
	$ambil=$koneksi->query("SELECT * FROM lokasi JOIN lokasi_hostname ON lokasi_hostname.id_lokasi = lokasi.id_lokasi WHERE id_ip ='$id'");
    $lokasi= mysqli_fetch_array($ambil);

	?>
  
<?php if (empty($_SESSION['sto_baru'])) :?>
<div class="bg-light container col-5 p-5 mt-5 rounded-3 bg-opacity-75"> 
   <div align="center pt-5">
		<h5 class="pt-3"><b>Ubah Lokasi</b></h5>
   </div>
	<hr class="my-2">
	<br>
	<form method="post">
		<table class="table table-borderless">
			<tr>
        <h6>WITEL</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="witel" required>
  <option value="<?php echo $lokasi['wilayah']; ?>" selected ><?php echo $lokasi['wilayah']; ?></option>
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
  <option value="<?php echo $lokasi['sto']; ?>" selected><?php echo $lokasi['sto']; ?></option>
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
		</table>
          <button class="btn btn-primary"  type="submit" name="selanjutnya">Selanjutnya</button>

	</form>
  <?php else: ?>
<div class="container col-5 p-5 mt-5 rounded-3">
  <div class="alert alert-info text-center bg-opacity-75"><h3>Witel dan STO  Sudah Disisi. <a href="index.php?halaman=edit_lokasi2&id=<?php echo($id) ?>" class="link-danger">Lengkapi Alamat</a></h3></div>
</div>
<?php endif ?>
<?php
if (isset($_POST['selanjutnya'])) {
    $witel_baru = $_POST['witel'];
    $sto_baru = $_POST['sto'];
    
    $cekdatasto=$koneksi->query("SELECT sto, wilayah FROM lokasi WHERE sto='$sto_baru' AND wilayah= '$witel_baru'");
    $hitungcocoksto = $cekdatasto->num_rows;
    if($hitungcocoksto==0) {
  echo "<script>alert('STO dan Witel tidak sesuai!');</script>";
  echo "<script>location='index.php?halaman=edit_lokasi&id=$id';</script>"; 
}elseif($hitungcocoksto>  0){

              $_SESSION['witel_baru'] = $witel_baru;
              $_SESSION['sto_baru'] = $sto_baru;

          echo "<script>location='index.php?halaman=edit_lokasi2&id=$id';</script>"; 
             
}
}
?>
	
</div>


</body>