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
$queryac =$koneksi->query("SELECT * FROM ac_non_sto WHERE id_ip = '$id'");
  $detailac = $queryac ->fetch_assoc();
  $hitungac = $queryac->num_rows;

  $querybatere =$koneksi->query("SELECT * FROM batere_non_sto WHERE id_ip = '$id'");
  $detailbatere = $querybatere ->fetch_assoc();
  $hitungbatere = $querybatere->num_rows;
	?>
  

<div class="bg-light container col-5 p-5 mt-5 rounded-3 bg-opacity-75"> 
   <div align="center pt-5">
		<h5 class="pt-3"><b>Ubah Non STO</b></h5>
   </div>
	<hr class="my-2">
	<br>
	<form method="post">
		<table class="table table-borderless">
			<?php if($hitungac==1){ ?>
			<tr class="m-3">
				<h6 class="pt-3">Jumlah</h6>
      	<input class="form-control form-control-md mb-3" type="number" name="jumlahac" placeholder="Masukan Jumlah" value="<?php echo $detailac['jumlah']; ?>" aria-label=".form-control-lg example">
      </tr>
			<tr>
				<h6>Kapasitas PK</h6>
      	<input class="form-control form-control-md mb-3" type="text" name="kapasitasac" placeholder="Masukan Kapasitas"  value="<?php echo $detailac['kapasitas_pk']; ?>" aria-label=".form-control-lg example" >
			</tr>
      <tr>
        <h6>Tahun Pengadaan</h6>
        <input class="form-control form-control-md mb-3" type="text" name="tahunac" placeholder="Masukan Tahun"  value="<?php echo $detailac['tahun_pengadaan']; ?>" aria-label=".form-control-lg example" >
      </tr>
			 <?php }elseif ($hitungac==0) {
              ?>
              <tr class="m-3">
        <h6 class="pt-3">Jumlah</h6>
        <input class="form-control form-control-md mb-3" type="number" name="jumlahac2" placeholder="Masukan Jumlah" aria-label=".form-control-lg example">
      </tr>
      <tr>
        <h6>Kapasitas PK</h6>
        <input class="form-control form-control-md mb-3" type="text" name="kapasitasac2" placeholder="Masukan Kapasitas" aria-label=".form-control-lg example" >
      </tr>
      <tr>
        <h6>Tahun Pengadaan</h6>
        <input class="form-control form-control-md mb-3" type="text" name="tahunac2" placeholder="Masukan Tahun" aria-label=".form-control-lg example" >
      </tr>
              <?php
            } if($hitungbatere==1){ ?>
			<tr class="m-3">
        <h6 class="pt-3">Jumlah</h6>
        <input class="form-control form-control-md mb-3" type="number" name="jumlahbatere" placeholder="Masukan Jumlah" value="<?php echo $detailbatere['jumlah_batere']; ?>" aria-label=".form-control-lg example">
      </tr>
      <tr>
        <h6>Kapasitas PK</h6>
        <input class="form-control form-control-md mb-3" type="text" name="kapasitasbatere" placeholder="Masukan Kapasitas"  value="<?php echo $detailbatere['kapasitas_batere']; ?>" aria-label=".form-control-lg example" >
      </tr>
      <tr>
        <h6>Tahun Pengadaan</h6>
        <input class="form-control form-control-md mb-3" type="text" name="tahunbatere" placeholder="Masukan Tahun"  value="<?php echo $detailbatere['tahun_batere']; ?>" aria-label=".form-control-lg example" >
      </tr>
			<?php }elseif ($hitungbatere==0) {
              ?>
              <tr class="m-3">
        <h6 class="pt-3">Jumlah</h6>
        <input class="form-control form-control-md mb-3" type="number" name="jumlahbatere2" placeholder="Masukan Jumlah" aria-label=".form-control-lg example">
      </tr>
      <tr>
        <h6>Kapasitas PK</h6>
        <input class="form-control form-control-md mb-3" type="text" name="kapasitasbatere2" placeholder="Masukan Kapasitas" aria-label=".form-control-lg example" >
      </tr>
      <tr>
        <h6>Tahun Pengadaan</h6>
        <input class="form-control form-control-md mb-3" type="text" name="tahunbatere2" placeholder="Masukan Tahun" aria-label=".form-control-lg example" >
      </tr>
              <?php
            } ?>
			
		</table>
          <button class="btn btn-primary"  type="submit" name="ubah">Ubah</button>

	</form>

<?php
if (isset($_POST['ubah'])) {

    if($hitungac==1){
      $koneksi-> query("UPDATE ac_non_sto SET
              jumlah = '$_POST[jumlahac]',
              kapasitas_pk = '$_POST[kapasitasac]',
              tahun_pengadaan = '$_POST[tahunac]'
              WHERE id_ip='$id'");
    }
    elseif ($hitungac==0) { 
      if(empty($_POST['jumlahac2']) || empty($_POST['tahunac2'])){
      echo "<script>location='detail.php?id=$id';</script>";  
    }else{
      $koneksi->query("INSERT INTO ac_non_sto(id_ip,jumlah,kapasitas_pk,tahun_pengadaan) 
                                    VALUES('$id','$_POST[jumlahac2]','$_POST[kapasitasac2]','$_POST[tahunac2]')");
    }
    }
    if($hitungbatere==1){
      $koneksi-> query("UPDATE batere_non_sto SET
              jumlah_batere = '$_POST[jumlahbatere]',
              kapasitas_batere = '$_POST[kapasitasbatere]',
              tahun_batere = '$_POST[tahunbatere]'
              WHERE id_ip='$id'");
    }
    elseif ($hitungbatere==0) {
    if(empty($_POST['jumlahbatere2']) || empty($_POST['tahunbatere2'])){
      echo "<script>location='detail.php?id=$id';</script>";  
    }else{
      $koneksi->query("INSERT INTO batere_non_sto(id_ip,jumlah_batere,kapasitas_batere,tahun_batere) 
                                    VALUES('$id','$_POST[jumlahbatere2]','$_POST[kapasitasbatere2]','$_POST[tahunbatere2]')");
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