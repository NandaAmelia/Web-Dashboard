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
	$ambil=$koneksi->query("SELECT * FROM ont_alarm WHERE id_ip ='$id'");
    $ont_alarm= mysqli_fetch_array($ambil);
    $hitung_ont= mysqli_num_rows($ambil);
	?>
  

<div class="bg-light container col-5 p-5 mt-5 rounded-3 bg-opacity-75"> 
   <div align="center pt-5">
		<h5 class="pt-3"><b>Ubah ONT ALARM PLN DOWN</b></h5>
   </div>
	<hr class="my-2">
	<br>
	<form method="post">
		<table class="table table-borderless">
			<?php if($hitung_ont==1){ ?>
			<tr class="m-3">
				<h6 class="pt-3">Hostname CACTI</h6>
      	<input class="form-control form-control-md mb-3" type="text" name="hostname_cacti" placeholder="Masukan Hostname" value="<?php echo $ont_alarm['hostname_cacti']; ?>" aria-label=".form-control-lg example" required>
      </tr>
			<tr>
				<h6>Type ONU</h6>
      	<input class="form-control form-control-md mb-3" type="text" name="type_onu" placeholder="Masukan Type ONU"  value="<?php echo $ont_alarm['type_onu']; ?>" aria-label=".form-control-lg example" required>
			</tr>
      <tr>
        <h6>SN ONU</h6>
        <input class="form-control form-control-md mb-3" type="text" name="sn_onu" placeholder="Masukan SN ONU"  value="<?php echo $ont_alarm['sn_onu']; ?>" aria-label=".form-control-lg example" required>
      </tr>
      <tr>
        <h6>VLANOAM</h6>
        <input class="form-control form-control-md mb-3" type="text" name="vlanoam" placeholder="Masukan VLANOAM"  value="<?php echo $ont_alarm['vlanoam']; ?>" aria-label=".form-control-lg example" required>
      </tr>
      <tr>
        <h6>IP Address Logic</h6>
        <input class="form-control form-control-md mb-3" type="text" name="ip_addres" placeholder="Masukan IP Address"  value="<?php echo $ont_alarm['ip_addres']; ?>" aria-label=".form-control-lg example"required>
      </tr>
      <tr>
        <h6>Tanggal Pemasangan</h6>
        <input class="form-control form-control-md mb-3" type="date" id="date" value="<?php echo $ont_alarm['tanggal_pemasangan']; ?>" name="tanggal_pemasangan" required>
      </tr>
      <tr>
        <h6>Keterangan</h6>
        <textarea class="form-control form-control-md" rows="3" name="keterangan" value="<?php echo $ont_alarm['keterangan']; ?>" placeholder="Masukan Keterangan" aria-label=".form-control-lg example" required=""></textarea>
      </tr>

      
			 <?php }elseif ($hitung_ont==0) {
              ?>
              <tr class="m-3">
        <h6 class="pt-3">Hostname CACTI</h6>
        <input class="form-control form-control-md mb-3" type="text" name="hostname_cacti2" placeholder="Masukan Hostname" aria-label=".form-control-lg example" required>
      </tr>
      <tr>
        <h6>Type ONU</h6>
        <input class="form-control form-control-md mb-3" type="text" name="type_onu2" placeholder="Masukan Type ONU" aria-label=".form-control-lg example" required>
      </tr>
      <tr>
        <h6>SN ONU</h6>
        <input class="form-control form-control-md mb-3" type="text" name="sn_onu2" placeholder="Masukan SN ONU"  aria-label=".form-control-lg example" required>
      </tr>
      <tr>
        <h6>VLANOAM</h6>
        <input class="form-control form-control-md mb-3" type="text" name="vlanoam2" placeholder="Masukan VLANOAM"  aria-label=".form-control-lg example" required>
      </tr>
      <tr>
        <h6>IP Address Logic</h6>
        <input class="form-control form-control-md mb-3" type="text" name="ip_addres2" placeholder="Masukan IP Address" aria-label=".form-control-lg example" required>
      </tr>
      <tr>
        <h6>Tanggal Pemasangan</h6>
        <input class="form-control form-control-md mb-3" type="date" id="date"  name="tanggal_pemasangan2" required>
      </tr>
      <tr>
        <h6>Keterangan</h6>
        <textarea class="form-control form-control-md" rows="5" name="keterangan2"  placeholder="Masukan Keterangan" aria-label=".form-control-lg example"></textarea>
      </tr>
              <?php
            } 
    $ambilont=$koneksi->query("SELECT * FROM ont_interface JOIN ont_alarm ON ont_alarm.id_ont=ont_interface.id_ont WHERE id_ip ='$id'");
    $ont_interface= mysqli_fetch_array($ambilont);
    $hitung_interface= mysqli_num_rows($ambilont);
            if($hitung_interface==1){ ?>
			<tr>
        <h6>F</h6>
        <input class="form-control form-control-md mb-3" type="number" name="f" placeholder="Masukan f" value="<?php echo $ont_interface['f']; ?>" aria-label=".form-control-lg example" required>
      </tr>
			<tr>
        <h6>S</h6>
        <input class="form-control form-control-md mb-3" type="number" name="s" placeholder="Masukan s" value="<?php echo $ont_interface['s']; ?>" aria-label=".form-control-lg example" required>
      </tr>
      <tr>
        <h6>P</h6>
        <input class="form-control form-control-md mb-3" type="number" name="p" placeholder="Masukan p" value="<?php echo $ont_interface['p']; ?>" aria-label=".form-control-lg example" required>
      </tr>
      <tr>
        <h6>ONU ID</h6>
        <input class="form-control form-control-md mb-3" type="number" name="unoid" placeholder="Masukan ONU ID" value="<?php echo $ont_interface['unoid']; ?>" aria-label=".form-control-lg example" required>
      </tr>
              <?php
            }
            elseif($hitung_interface==0) {?>
			<tr>
        <h6>F</h6>
        <input class="form-control form-control-md mb-3" type="number" name="f2" placeholder="Masukan f" aria-label=".form-control-lg example" required>
      </tr>
      <tr>
        <h6>S</h6>
        <input class="form-control form-control-md mb-3" type="number" name="s2" placeholder="Masukan s"  aria-label=".form-control-lg example" required>
      </tr>
      <tr>
        <h6>P</h6>
        <input class="form-control form-control-md mb-3" type="number" name="p2" placeholder="Masukan p" aria-label=".form-control-lg example" required>
      </tr>
      <tr>
        <h6>ONU ID</h6>
        <input class="form-control form-control-md mb-3" type="number" name="unoid2" placeholder="Masukan ONU ID" aria-label=".form-control-lg example" required>
      </tr>
              <?php
            } ?>
		</table>
          <button class="btn btn-primary"  type="submit" name="ubah">Ubah</button>

	</form>

<?php
if (isset($_POST['ubah'])) {
    if($hitung_ont==1){
    	$koneksi-> query("UPDATE ont_alarm SET
        			hostname_cacti = '$_POST[hostname_cacti]',
        			type_onu = '$_POST[type_onu]',
              sn_onu ='$_POST[sn_onu]',
              vlanoam ='$_POST[vlanoam]',
              ip_addres ='$_POST[ip_addres]',
              tanggal_pemasangan ='$_POST[tanggal_pemasangan]',
              keterangan ='$_POST[keterangan]'
        			WHERE id_ip='$id'");
    }
    elseif ($hitung_ont==0) {
    	$koneksi->query("INSERT INTO ont_alarm(id_ip,hostname_cacti,type_onu, sn_onu,vlanoam,ip_addres,tanggal_pemasangan,keterangan) 
                              			VALUES('$id','$_POST[hostname_cacti2]','$_POST[type_onu2]','$_POST[sn_onu2]','$_POST[vlanoam2]','$_POST[ip_addres2]','$_POST[tanggal_pemasangan2]','$_POST[keterangan2]')");
     $id_ont_baru = $koneksi->insert_id;
    }
    if($hitung_interface==1){
    	$koneksi-> query("UPDATE ont_interface SET
        			f = '$_POST[f]',
        			s = '$_POST[s]',
              p = '$_POST[p]',
              unoid = '$_POST[unoid]'
        			WHERE id_ont ='$ont_interface[id_ont]'");
    }
    elseif ($hitung_interface==0) {
      $ambiltest=$koneksi->query("SELECT * FROM ont_alarm WHERE id_ont ='$ont_alarm[id_ont]'");
    $test= mysqli_fetch_array($ambiltest);
    $hitungtest= mysqli_num_rows($ambiltest);
      if($hitungtest==0){
        $koneksi->query("INSERT INTO ont_interface(id_ont,f,s,p,unoid) 
                                    VALUES('$id_ont_baru','$_POST[f2]','$_POST[s2]','$_POST[p2]','$_POST[unoid2]')");}
      elseif ($hitungtest==1) {
        $koneksi->query("INSERT INTO ont_interface(id_ont,f,s,p,unoid) 
                                    VALUES('$ont_alarm[id_ont]','$_POST[f2]','$_POST[s2]','$_POST[p2]','$_POST[unoid2]')");
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