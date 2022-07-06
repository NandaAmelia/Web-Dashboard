<title>Tambah Hostname</title>

  <?php if (empty($_SESSION['id_lokasi'])) :?>
  <?php if (empty($_SESSION['namehost'])): ?>
  <div class="container col-6 p-5 mt-5 rounded-3">
  <div class="alert alert-info text-center bg-opacity-75"><h3>Hostname masih kosong. <a href="input_data.php" class="link-danger">Isi Hostname</a></h3></div>
</div>
  <?php else: ?>

  

<div class="bg-light container col-6 p-5 mt-5 rounded-3 bg-opacity-75">
  <nav>
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link disabled" >Formulir Hostname</a>
  </li>
   <li class="nav-item">
    <a class="nav-link active" >Lokasi Hostname</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled">Data Masuk</a>
  </li>
</ul>

  </nav>
   <div align="center pt-5">
    <h5 class="pt-3"><b>Formulir Lokasi Hostname</b></h5>
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
        $wilayah= $_SESSION['witel'];
            $sto= $_SESSION['sto'];
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
    <div class="alert alert-danger text-center" role="alert">
  Periksa Kembali Data Yang Akan Diajukan. Menghindari Pengulangan data.
</div>
          <button class="btn btn-primary"  type="submit" name="selanjut">Selanjutnya</button>

  </form>

<?php
if (isset($_POST['selanjut'])) {
    $id_lokasi =  $_POST['alamat'];
    $lantai =  $_POST['lantai'];
    $ruangan =  $_POST['ruangan'];
    $rack =  $_POST['rack'];
    $shelf =  $_POST['shelf'];
    
    
  $cekdata=$koneksi->query("SELECT ne_ip, namehost FROM hostname WHERE namehost='$namehost' OR ne_ip= '$ne_ip'");
    $hitungcocok = $cekdata->num_rows;
    $ambildata = $cekdata->fetch_assoc();
          if($hitungcocok==1) {?>
      <div class="alert alert-danger text-center" role="alert">Namehost atau IP sudah terdaftar.</div>

            <?php 
            }elseif($hitungcocok==0) {
              $_SESSION['id_lokasi'] = $id_lokasi;
              $_SESSION['lantai'] = $lantai;
              $_SESSION['ruangan'] = $ruangan;
              $_SESSION['rack'] = $rack;
              $_SESSION['shelf'] = $shelf;
              
          echo "<script>location='index.php?halaman=masukanhostname';</script>";
                    
              
}
}
?>
  
</div>
<?php endif ?>
<?php else: ?>
  <div class="container col-5 p-5 mt-5 rounded-3">
<div class="alert alert-info text-center"><h3>Data telah diisi,<a href="index.php?halaman=input_lokasi" class="link-danger"> masukan lokasi!</a></h3></div></div>
<?php endif ?>