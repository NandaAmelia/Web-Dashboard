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
	$ambil=$koneksi->query("SELECT * FROM lokasi JOIN lokasi_hostname ON lokasi_hostname.id_lokasi = lokasi.id_lokasi WHERE id_ip ='$id'");
    $lokasi= mysqli_fetch_array($ambil);

	?>
  
<?php if (empty($_SESSION['sto_baru'])) :?>

<div class="container col-5 p-5 mt-5 rounded-3">
  <div class="alert alert-info text-center bg-opacity-75"><h3>Witel dan STO  Belum Disisi. <a href="edit_lokasi.php?id=<?php echo($id) ?>" class="link-danger">Lengkapi Witel</a></h3></div>
</div>
<?php else: ?>

<div class="bg-light container col-5 p-5 mt-5 rounded-3 bg-opacity-75"> 
   <div align="center pt-5">
		<h5 class="pt-3"><b>Ubah Lokasi</b></h5>
   </div>
	<hr class="my-2">
	<br>
	<form method="post">
		<table class="table table-borderless">
			<tr class="m-3">
        <h6>Alamat</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="alamat" required>
          <option value="" selected disabled>Pilih Alamat</option>
        <?php
        $wilayah= $_SESSION['witel_baru'];
            $sto= $_SESSION['sto_baru'];
        $ambilalamat=$koneksi->query("SELECT * FROM lokasi WHERE sto='$sto' && wilayah ='$wilayah'");
        $resultalamat= mysqli_num_rows($ambilalamat);
          while($pil_alamat = mysqli_fetch_array($ambilalamat)){
            ?>
            <option value="<?php echo $pil_alamat['id_lokasi'] ?>"><?php echo $pil_alamat['alamat_lokasi'] ?></option> 
            <?php
          
        }
        ?>
        </select> 
      </tr>
      <tr class="m-3">
        <h6 class="pt-3">Lantai (Tingkat Bangunan )</h6>
        <input class="form-control form-control-md mb-3" type="number" name="lantai" placeholder="Masukan Lkasi Tingkat Bangunan" aria-label=".form-control-lg example" required>
      </tr>
      <tr class="m-3">
        <h6 class="pt-3">Ruangan</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="ruangan" required>
  <option value="" selected disabled>Pilih Ruangan</option>
  <?php
        $ambilruangan=$koneksi->query("SELECT ruangan FROM lokasi_hostname GROUP BY ruangan");
        $resultruang= mysqli_num_rows($ambilruangan);
        if($resultruang > 0){
          while($pil_ruang = mysqli_fetch_array($ambilruangan)){
            ?>
            <option value="<?php echo $pil_ruang['ruangan'] ?>"><?php echo $pil_ruang['ruangan'] ?></option> 
            <?php
          }
        }
        ?>
</select>
      </tr>
      <tr class="m-3">
        <h6 class="pt-3">Rack</h6>
        <input class="form-control form-control-md mb-3" type="number" name="rack" placeholder="Masukan Rack" aria-label=".form-control-lg example" required>
      </tr>
      
      <tr class="m-3">
        <h6 class="pt-3">Shelf</h6>
        <input class="form-control form-control-md mb-3" type="number" name="shelf" placeholder="Masukan Shelf" aria-label=".form-control-lg example" required>
      </tr> 
		</table>
    <button class="btn btn-warning" name="ulang">Ulang</button>
          <button class="btn btn-primary"  type="submit" name="ubah">Ubah</button>

	</form>
  
<?php
if (isset($_POST['ubah'])) {

$koneksi-> query("UPDATE lokasi_hostname SET
              id_lokasi = '$_POST[alamat]',
              lantai = '$_POST[lantai]',
              ruangan = '$_POST[ruangan]',
              rack ='$_POST[rack]', 
              shelf = '$_POST[shelf]',
              witel = '$wilayah'
              WHERE id_ip='$id'");
unset($_SESSION['witel_baru']);
unset($_SESSION['sto_baru']);
          echo "<script>location='detail.php?id=$id';</script>"; 
             
}
if (isset($_POST['ulang'])) {
   unset($_SESSION['witel_baru']);
unset($_SESSION['sto_baru']);
    
   echo "<script>alert('Mengulang Kembali');</script>";

echo "<script>location ='edit_lokasi.php?id=$id';</script>";
             
}
?>
	
</div>

<?php endif ?>

	<?php
	include 'footer.php';
	?>

</body>
</html>