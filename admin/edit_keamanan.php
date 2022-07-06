<body>

	<?php
	$id = $_GET['id'];
	$ambil=$koneksi->query("SELECT * FROM keamanan WHERE id_ip ='$id'");
    $keamanan= mysqli_fetch_array($ambil);
    $hitungkeamanan= mysqli_num_rows($ambil);
	?>
  

<div class="bg-light container col-5 p-5 mt-5 rounded-3 bg-opacity-75"> 
   <div align="center pt-5">
		<h5 class="pt-3"><b>Ubah Keamanan</b></h5>
   </div>
	<hr class="my-2">
	<br>
	<form method="post">
		<table class="table table-borderless">
			<?php
      if($hitungkeamanan==1){ ?>
			<tr>
				<h6 class="pt-3">Kamera</h6>
      	<select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="kamera">
  <option value="<?php echo $keamanan['kamera']; ?>" selected><?php echo $keamanan['kamera']; ?></option>
  <option value="NOK">NOK</option>
  <option value="OK">OK</option>
</select>
      </tr>
			<tr>
				<h6>Osase</h6>
      	<select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="osase" >
  <option value="<?php echo $keamanan['osase']; ?>" selected><?php echo $keamanan['osase']; ?></option>
  <option value="NOK">NOK</option>
  <option value="OK">OK</option>
</select>
			</tr>
			<?php }elseif ($hitungkeamanan==0) {
              ?>
              <tr>
        <h6 class="pt-3">Kamera</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="kamera2">
  <option value="NOK" selected="">NOK</option>
  <option value="OK">OK</option>
</select>
      </tr>
      <tr>
        <h6>Osase</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="osase2" >
  <option value="NOK" selected="">NOK</option>
  <option value="OK">OK</option>
</select>
      </tr>
              <?php
            } ?>
			
		</table>
          <button class="btn btn-primary"  type="submit" name="ubah">Ubah</button>

	</form>

<?php
if (isset($_POST['ubah'])) {

    if($hitungkeamanan==1){
    	$koneksi-> query("UPDATE keamanan SET
        			kamera = '$_POST[kamera]',
        			osase = '$_POST[osase]'
        			WHERE id_ip='$id'");
    }
    elseif ($hitungkeamanan==0) {
    	$koneksi->query("INSERT INTO keamanan(id_ip,kamera,osase) 
                              			VALUES('$id','$_POST[kamera2]','$_POST[osase2]')");
    }
    echo "<script>location='index.php?halaman=detail&id=$id';</script>";	
}
?>
	
</div>

<div class="p-5"></div>


</body>