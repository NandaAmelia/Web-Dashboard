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
	$ambil=$koneksi->query("SELECT * FROM kelistrikan WHERE id_ip ='$id'");
    $kelistrikan= mysqli_fetch_array($ambil);
    $hitunglistrik= mysqli_num_rows($ambil);

    $ambilgenset=$koneksi->query("SELECT * FROM genset WHERE id_ip ='$id'");
    $genset= mysqli_fetch_array($ambilgenset);
    $hitunggenset= mysqli_num_rows($ambilgenset);
	?>
  

<div class="bg-light container col-5 p-5 mt-5 rounded-3 bg-opacity-75"> 
   <div align="center pt-5">
		<h5 class="pt-3"><b>Ubah Kelistrikan</b></h5>
   </div>
	<hr class="my-2">
	<br>
	<form method="post">
		<table class="table table-borderless">
			<?php if($hitunglistrik==1){ ?>
			<tr class="m-3">
				<h6 class="pt-3">ID Kelistrikan</h6>
      	<input class="form-control form-control-md mb-3" type="text" name="id_kelistrikan" placeholder="Masukan ID" value="<?php echo $kelistrikan['id_kelistrikan']; ?>" aria-label=".form-control-lg example">
      </tr>
			<tr>
				<h6>Pengelola</h6>
      	<input class="form-control form-control-md mb-3" type="text" name="pengelolaan" placeholder="Masukan Pengelola"  value="<?php echo $kelistrikan['pengelolaan']; ?>" aria-label=".form-control-lg example" >
			</tr>
			 <?php }elseif ($hitunglistrik==0) {
              ?>
              <tr class="m-3">
				<h6 class="pt-3">ID Kelistrikan</h6>
      	<input class="form-control form-control-md mb-3" type="text" name="id_baru" placeholder="Masukan ID" aria-label=".form-control-lg example" >
      </tr>
			<tr>
				<h6>Pengelola</h6>
      	<input class="form-control form-control-md mb-3" type="text" name="pengelolaan_baru" placeholder="Masukan Pengelola"  aria-label=".form-control-lg example">
      </tr>
              <?php
            } if($hitunggenset==1){ ?>
			<tr>
				<h6 class="pt-3">Kondisi Genset</h6>
      	<select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="genset">
  <option value="<?php echo $genset['kondisi']; ?>" selected><?php echo $genset['kondisi']; ?></option>
  <option value="TIDAK ADA">Tidak Ada</option>
  <option value="RUSAK">Rusak</option>
  <option value="BAIK">BAIK</option>
</select>
      </tr>
			<tr>
				<h6>Jenis</h6>
      	<select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="jenis" >
  <option value="<?php echo $genset['jenis']; ?>" selected><?php echo $genset['jenis']; ?></option>
  <option value="MANUAL">Manual</option>
  <option value="OTOMATIS">Otomatis</option>
  <option value="  ">Tidak Ada</option>
</select>
			</tr>
			<?php }elseif ($hitunggenset==0) {
              ?>
              <tr>
				<h6 class="pt-3">Kondisi Genset</h6>
      	<select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="genset_baru">
  <option value="TIDAK ADA" selected>Tidak Ada</option>
  <option value="RUSAK">Rusak</option>
  <option value="BAIK">BAIK</option>
</select>
      </tr>
			<tr>
				<h6>Jenis</h6>
      	<select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="jenis_baru" >
  <option value="MANUAL">Manual</option>
  <option value="OTOMATIS">Otomatis</option>
  <option value="" selected="">Tidak Ada</option>
</select>
			</tr>
              <?php
            } ?>
			
		</table>
          <button class="btn btn-primary"  type="submit" name="ubah">Ubah</button>

	</form>

<?php
if (isset($_POST['ubah'])) {

    if($hitunglistrik==1){
    	$koneksi-> query("UPDATE kelistrikan SET
        			id_kelistrikan = '$_POST[id_kelistrikan]',
        			pengelolaan = '$_POST[pengelolaan]'
        			WHERE id_ip='$id'");
    }
    elseif ($hitunglistrik==0) {
    	if(empty($_POST['id_baru']) || empty($_POST['pengelolaan_baru'])){
    	echo "<script>location='detail.php?id=$id';</script>";	
    }else{
    	$koneksi->query("INSERT INTO kelistrikan(id_kelistrikan,id_ip,pengelolaan) 
                              			VALUES('$_POST[id_baru]','$id','$_POST[pengelolaan_baru]')");
    }
    }
    if($hitunggenset==1){
    	$koneksi-> query("UPDATE genset SET
        			kondisi = '$_POST[genset]',
        			jenis = '$_POST[jenis]'
        			WHERE id_ip='$id'");
    }
    elseif ($hitunggenset==0) {
    if(empty($_POST['genset_baru']) || empty($_POST['jenis_baru'])){
    	echo "<script>location='detail.php?id=$id';</script>";	
    }else{
    	$koneksi->query("INSERT INTO genset(id_ip,kondisi,jenis) 
                              			VALUES('$id','$_POST[genset_baru]','$_POST[jenis_baru]')");
    }
}
    echo "<script>location='detail.php?id=$id';</script>";	
}
?>
	
</div>



	<?php
	include 'footer.php';
	?>

</body>
</html>