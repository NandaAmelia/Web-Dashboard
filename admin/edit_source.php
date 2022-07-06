<body>

	<?php
	$id = $_GET['id'];

  $query =$koneksi->query("SELECT * FROM hostname WHERE id_ip = '$id'");
  $detail = $query ->fetch_assoc();
  $source = $detail['source_power'];

$querysingle =$koneksi->query("SELECT * FROM source_a WHERE id_ip = '$id'");
  $detailsingle = $querysingle ->fetch_assoc();
  $hitungsingle = $querysingle->num_rows;

  $querydual =$koneksi->query("SELECT * FROM source_b WHERE id_ip = '$id'");
  $detaildual = $querydual ->fetch_assoc();
  $hitungdual = $querydual->num_rows;
	?>
  

<div class="bg-light container col-5 p-5 mt-5 rounded-3 bg-opacity-75"> 
   <div align="center pt-5">
		<h5 class="pt-3"><b>Ubah Source</b></h5>
   </div>
	<hr class="my-2">
	<br>
	<form method="post">
		<table class="table table-borderless">
			<?php if($hitungsingle==1){ ?>
			<tr class="m-3">
				<h6 class="pt-3">Source Power OLT A</h6>
      	<input class="form-control form-control-md mb-3" type="text" name="source_a" placeholder="Masukan Source" value="<?php echo $detailsingle['source']; ?>" aria-label=".form-control-lg example">
      </tr>
			<tr>
				<h6>Module Power A</h6>
      	<select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="modul_powera">
  <option value="<?php echo $detailsingle['modul_power']; ?>" selected><?php echo $detailsingle['modul_power']; ?></option>
  <option value="Aktif">Aktif</option>
  <option value="Tidak Ada">Tidak Ada</option>
  <option value="Tidak Aktif">Tidak Aktif</option>
</select>
			</tr>
      <tr>
        <h6>Kapasitas MCB A</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="kap_modulea">
  <option value="<?php echo $detailsingle['kap_module']; ?>" selected><?php echo $detailsingle['kap_module']; ?></option>
  <option value="-">-</option>
  <option value="10A">10A</option>
  <option value="16A">16A</option>
  <option value="20A">20A</option>
  <option value="25A">25A</option>
  <option value="32A">32A</option>
  <option value="40A">40A</option>
  <option value="50A">50A</option>
  <option value="63A">63A</option>
  <option value="80A">80A</option>
  <option value="90A">90A</option>
  <option value="100A">10-A</option>
  <option value="120A">120A</option>
  <option value="150A">150A</option>
  <option value="200A">200A</option>
  <option value="300A">300A</option>
  <option value="350A">350A</option>
  <option value="952A">952A</option>
</select>
      </tr>
      <tr>
        <h6>Load Maks Rect. A</h6>
        <input class="form-control form-control-md mb-3" type="text" name="load_rectifiera" placeholder="Masukan Load Maks" value="<?php echo $detailsingle['load_rectifier']; ?>" aria-label=".form-control-lg example">
      </tr>
      <tr>
        <h6>Kapasitas MCB DC-PDB Rect.A</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="kap_rectifiera">
  <option value="<?php echo $detailsingle['kap_rectifier']; ?>" selected><?php echo $detailsingle['kap_rectifier']; ?></option>
  <option value="-">-</option>
  <option value="10A">10A</option>
  <option value="16A">16A</option>
  <option value="20A">20A</option>
  <option value="25A">25A</option>
  <option value="32A">32A</option>
  <option value="40A">40A</option>
  <option value="50A">50A</option>
  <option value="63A">63A</option>
  <option value="80A">80A</option>
  <option value="90A">90A</option>
  <option value="100A">10-A</option>
  <option value="120A">120A</option>
  <option value="150A">150A</option>
  <option value="200A">200A</option>
  <option value="300A">300A</option>
  <option value="350A">350A</option>
  <option value="952A">952A</option>
</select>
      </tr>
      <tr>
        <h6>Diameter Kabel A</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="diameter_kabela">
  <option value="<?php echo $detailsingle['diameter_kabel']; ?>" selected><?php echo $detailsingle['diameter_kabel']; ?></option>
  <option value="-">-</option>
  <option value="10mm">10mm</option>
  <option value="16mm">16mm</option>
  <option value="25mm">25mm</option>
  <option value="35mm">35mm</option>
</select>
      </tr>
      <tr>
        <h6>Panjang Kabel A</h6>
        <input class="form-control form-control-md mb-3" type="text" name="panjang_kabela" placeholder="Masukan Panjang Kabel A" value="<?php echo $detailsingle['panjang_kabel']; ?>" aria-label=".form-control-lg example">
      </tr>
			 <?php }elseif ($hitungsingle==0) {
              ?>
              <tr>
        <h6 class="pt-3">Source Power OLT A</h6>
        <input class="form-control form-control-md mb-3" type="text" name="source_a2" placeholder="Masukan Source" aria-label=".form-control-lg example">
      </tr>
      <tr>
        <h6>Module Power A</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="modul_powera2">
  <option value="Aktif" selected="">Aktif</option>
  <option value="Tidak Ada">Tidak Ada</option>
  <option value="Tidak Aktif">Tidak Aktif</option>
</select>
      </tr>
      <tr>
        <h6>Kapasitas MCB A</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="kap_modulea2">
  <option value="-" selected="">-</option>
  <option value="10A">10A</option>
  <option value="16A">16A</option>
  <option value="20A">20A</option>
  <option value="25A">25A</option>
  <option value="32A">32A</option>
  <option value="40A">40A</option>
  <option value="50A">50A</option>
  <option value="63A">63A</option>
  <option value="80A">80A</option>
  <option value="90A">90A</option>
  <option value="100A">10-A</option>
  <option value="120A">120A</option>
  <option value="150A">150A</option>
  <option value="200A">200A</option>
  <option value="300A">300A</option>
  <option value="350A">350A</option>
  <option value="952A">952A</option>
</select>
      </tr>
      <tr>
        <h6>Load Maks Rect. A</h6>
        <input class="form-control form-control-md mb-3" type="text" name="load_rectifiera2" placeholder="Masukan Load Maks" aria-label=".form-control-lg example">
      </tr>
      <tr>
        <h6>Kapasitas MCB DC-PDB Rect.A</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="kap_rectifiera2">
  <option value="-" selected>-</option>
  <option value="10A">10A</option>
  <option value="16A">16A</option>
  <option value="20A">20A</option>
  <option value="25A">25A</option>
  <option value="32A">32A</option>
  <option value="40A">40A</option>
  <option value="50A">50A</option>
  <option value="63A">63A</option>
  <option value="80A">80A</option>
  <option value="90A">90A</option>
  <option value="100A">10-A</option>
  <option value="120A">120A</option>
  <option value="150A">150A</option>
  <option value="200A">200A</option>
  <option value="300A">300A</option>
  <option value="350A">350A</option>
  <option value="952A">952A</option>
</select>
      </tr>
      <tr>
        <h6>Diameter Kabel A</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="diameter_kabela2">
  <option value="-" selected>-</option>
  <option value="10mm">10mm</option>
  <option value="16mm">16mm</option>
  <option value="25mm">25mm</option>
  <option value="35mm">35mm</option>
</select>
      </tr>
      <tr>
        <h6>Panjang Kabel A</h6>
        <input class="form-control form-control-md mb-3" type="text" name="panjang_kabela2" placeholder="Masukan Panjang Kabel A"  aria-label=".form-control-lg example">
      </tr>
    <?php } ?>
			<?php if ($source == 'DUAL SOURCE'): ?>
        <?php if($hitungdual==1){ ?>
              <tr class="m-3">
        <h6 class="pt-3">Source Power OLT B</h6>
        <input class="form-control form-control-md mb-3" type="text" name="source_b" placeholder="Masukan Source" value="<?php echo $detaildual['sourceb']; ?>" aria-label=".form-control-lg example">
      </tr>
      <tr>
        <h6>Module Power B</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="modul_powerb">
  <option value="<?php echo $detaildual['modul_powerb']; ?>" selected><?php echo $detaildual['modul_powerb']; ?></option>
  <option value="Aktif">Aktif</option>
  <option value="Tidak Ada">Tidak Ada</option>
  <option value="Tidak Aktif">Tidak Aktif</option>
</select>
      </tr>
      <tr>
        <h6>Kapasitas MCB B/h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="kap_moduleb">
  <option value="<?php echo $detaildual['kap_moduleb']; ?>" selected><?php echo $detaildual['kap_moduleb']; ?></option>
  <option value="-">-</option>
  <option value="10A">10A</option>
  <option value="16A">16A</option>
  <option value="20A">20A</option>
  <option value="25A">25A</option>
  <option value="32A">32A</option>
  <option value="40A">40A</option>
  <option value="50A">50A</option>
  <option value="63A">63A</option>
  <option value="80A">80A</option>
  <option value="90A">90A</option>
  <option value="100A">10-A</option>
  <option value="120A">120A</option>
  <option value="150A">150A</option>
  <option value="200A">200A</option>
  <option value="300A">300A</option>
  <option value="350A">350A</option>
  <option value="952A">952A</option>
</select>
      </tr>
      <tr>
        <h6>Load Maks Rect. B</h6>
        <input class="form-control form-control-md mb-3" type="text" name="load_rectifierb" placeholder="Masukan Load Maks" value="<?php echo $detaildual['load_rectifierb']; ?>" aria-label=".form-control-lg example">
      </tr>
      <tr>
        <h6>Kapasitas MCB DC-PDB Rect.B</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="kap_rectifierb">
  <option value="<?php echo $detaildual['kap_rectifierb']; ?>" selected><?php echo $detaildual['kap_rectifierb']; ?></option>
  <option value="-">-</option>
  <option value="10A">10A</option>
  <option value="16A">16A</option>
  <option value="20A">20A</option>
  <option value="25A">25A</option>
  <option value="32A">32A</option>
  <option value="40A">40A</option>
  <option value="50A">50A</option>
  <option value="63A">63A</option>
  <option value="80A">80A</option>
  <option value="90A">90A</option>
  <option value="100A">10-A</option>
  <option value="120A">120A</option>
  <option value="150A">150A</option>
  <option value="200A">200A</option>
  <option value="300A">300A</option>
  <option value="350A">350A</option>
  <option value="952A">952A</option>
</select>
      </tr>
      <tr>
        <h6>Diameter Kabel B</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="diameter_kabelb">
  <option value="<?php echo $detaildual['diameter_kabelb']; ?>" selected><?php echo $detaildual['diameter_kabelb']; ?></option>
  <option value="-">-</option>
  <option value="10mm">10mm</option>
  <option value="16mm">16mm</option>
  <option value="25mm">25mm</option>
  <option value="35mm">35mm</option>
</select>
      </tr>
      <tr>
        <h6>Panjang Kabel B</h6>
        <input class="form-control form-control-md mb-3" type="text" name="panjang_kabelb" placeholder="Masukan Panjang Kabel B" value="<?php echo $detaildual['panjang_kabelb']; ?>" aria-label=".form-control-lg example">
      </tr>
       <?php }
       elseif ($hitungdual==0) {
              ?>
              <tr class="m-3">
        <h6 class="pt-3">Source Power OLT B</h6>
        <input class="form-control form-control-md mb-3" type="text" name="source_b2" placeholder="Masukan Source" aria-label=".form-control-lg example">
      </tr>
      <tr>
        <h6>Module Power B</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="modul_powerb2">
  <option value="Aktif" selected="">Aktif</option>
  <option value="Tidak Ada">Tidak Ada</option>
  <option value="Tidak Aktif">Tidak Aktif</option>
</select>
      </tr>
      <tr>
        <h6>Kapasitas MCB B</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="kap_moduleb2">
  <option value="-" selected="">-</option>
  <option value="10A">10A</option>
  <option value="16A">16A</option>
  <option value="20A">20A</option>
  <option value="25A">25A</option>
  <option value="32A">32A</option>
  <option value="40A">40A</option>
  <option value="50A">50A</option>
  <option value="63A">63A</option>
  <option value="80A">80A</option>
  <option value="90A">90A</option>
  <option value="100A">10-A</option>
  <option value="120A">120A</option>
  <option value="150A">150A</option>
  <option value="200A">200A</option>
  <option value="300A">300A</option>
  <option value="350A">350A</option>
  <option value="952A">952A</option>
</select>
      </tr>
      <tr>
        <h6>Load Maks Rect. B</h6>
        <input class="form-control form-control-md mb-3" type="text" name="load_rectifierb2" placeholder="Masukan Load Maks"  aria-label=".form-control-lg example">
      </tr>
      <tr>
        <h6>Kapasitas MCB DC-PDB Rect.B</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="kap_rectifierb2">
  <option value="-">-</option>
  <option value="10A">10A</option>
  <option value="16A">16A</option>
  <option value="20A">20A</option>
  <option value="25A">25A</option>
  <option value="32A">32A</option>
  <option value="40A">40A</option>
  <option value="50A">50A</option>
  <option value="63A">63A</option>
  <option value="80A">80A</option>
  <option value="90A">90A</option>
  <option value="100A">10-A</option>
  <option value="120A">120A</option>
  <option value="150A">150A</option>
  <option value="200A">200A</option>
  <option value="300A">300A</option>
  <option value="350A">350A</option>
  <option value="952A">952A</option>
</select>
      </tr>
      <tr>
        <h6>Diameter Kabel B</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="diameter_kabelb2">
  <option value="-">-</option>
  <option value="10mm">10mm</option>
  <option value="16mm">16mm</option>
  <option value="25mm">25mm</option>
  <option value="35mm">35mm</option>
</select>
      </tr>
      <tr>
        <h6>Panjang Kabel B</h6>
        <input class="form-control form-control-md mb-3" type="text" name="panjang_kabelb2" placeholder="Masukan Panjang Kabel B" aria-label=".form-control-lg example">
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
      $koneksi-> query("UPDATE source_a SET
              source = '$_POST[source_a]',
              modul_power = '$_POST[modul_powera]',
              kap_module = '$_POST[kap_modulea]',
              load_rectifier ='$_POST[load_rectifiera]', 
              kap_rectifier = '$_POST[kap_modulea]',
              diameter_kabel = '$_POST[diameter_kabela]',
              panjang_kabel = '$_POST[panjang_kabela]'
              WHERE id_ip='$id'");
    }
    elseif ($hitungsingle==0) {
      if(empty($_POST['source_a2']) || empty($_POST['modul_powera2'])){
      echo "<script>location='index.php?halaman=detail&id=$id';</script>";  
    }else{
      $koneksi->query("INSERT INTO source_a(id_ip,source,modul_power,kap_module,load_rectifier, kap_rectifier, diameter_kabel,panjang_kabel) 
                                    VALUES('$id','$_POST[source_a2]','$_POST[modul_powera2]','$_POST[kap_modulea2]','$_POST[load_rectifiera2]','$_POST[kap_rectifiera2]','$_POST[diameter_kabela2]','$_POST[panjang_kabela2]')");
    }
    }
    if($hitungdual==1){
      $koneksi-> query("UPDATE source_b SET
              sourceb = '$_POST[source_b]',
              modul_powerb = '$_POST[modul_powerb]',
              kap_moduleb = '$_POST[kap_moduleb]',
              load_rectifierb ='$_POST[load_rectifierb]', 
              kap_rectifierb = '$_POST[kap_moduleb]',
              diameter_kabeb = '$_POST[diameter_kabelb]',
              panjang_kabelb = '$_POST[panjang_kabelb]'
              WHERE id_ip='$id'");
    }
    elseif ($hitungdual==0) {
     if(empty($_POST['source_b2']) || empty($_POST['modul_powerb2'])){
      echo "<script>location='index.php?halaman=detail&id=$id';</script>";  
    }else{
      $koneksi->query("INSERT INTO source_b(id_ip,sourceb,modul_powerb,kap_moduleb,load_rectifierb, kap_rectifierb, diameter_kabelb,panjang_kabelb) 
                                    VALUES('$id','$_POST[source_b2]','$_POST[modul_powerb2]','$_POST[kap_moduleb2]','$_POST[load_rectifierb2]','$_POST[kap_rectifierb2]','$_POST[diameter_kabelb2]','$_POST[panjang_kabelb2]')");
    }
}
    echo "<script>location='index.php?halaman=detail&id=$id';</script>";  
}
?>
	
</div>

</body>