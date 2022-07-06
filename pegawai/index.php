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
include 'navbar.php';
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Telkom Indonesia</title>
</head>
<body>
  <div class="b-example-divider"></div>

  <div class="bg-light bg-opacity-75 rounded-3 p-3">
      <div class="table-responsive m-3">
        <span class="fs-4 ps-2 text-danger mb-lg-0"><strong>Hostname</strong></span>
        <div class="col-md-4">
        <form class="d-flex">
          <select class="form-control m-2" id="Kolom" name="Kolom" required="">
                <?php
                  $kolom=(isset($_GET['Kolom']))? $_GET['Kolom'] : "";
                ?>
                <option value="ne_ip" <?php if ($kolom=="ne_ip") echo "selected"; ?>>NE IP</option>
                <option value="witel" <?php if ($kolom=="witel") echo "selected";?>>WITEL</option>
                <option value="software_version" <?php if ($kolom=="software_version") echo "selected";?>>Software</option>
                <option value="tipe_ne" <?php if ($kolom=="tipe_ne") echo "selected";?>>Type NE</option>
                <option value="namehost" <?php if ($kolom=="namehost") echo "selected";?>>Hostname</option>
              </select>
          <input class="form-control m-2" type="text" placeholder="Cari " aria-label="Search" name="KataKunci" autocomplete="off" value="<?php if (isset($_GET['KataKunci']))  echo $_GET['KataKunci']; ?>">
          <button class="btn btn-success m-2" type="submit"><svg class="bi" width="18" height="18">  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></button>
        </form>
      </div>
<hr>
<div class="container col-5 ps-5">
<a class="btn btn-primary btn-sm container mb-4" href="input_data.php"><b>Pengajuan Hostname</b></a></div>
     <table class="table table-bordered table-striped table-sm text-center" style="font-size: .8rem;">
      <tr>
    <th>No</th>
    <th>WITEL</th>
    <th>NE IP</th>
    <th>Hostname</th>
    <th>Type</th>
    <th>Software</th>
    <th>Eviden</th>
    <th>Config</th>
    <th>Source Power</th>
    <th>Keterangan</th>
    <th>Status</th>
    <th></th>
      </tr>
      <?php
    $batas=20;
    $page=isset($_GET['page'])?(int)$_GET['page'] : 1 ;

    $kolomCari=(isset($_GET['Kolom']))? $_GET['Kolom'] : "";

    $kolomKataKunci=(isset($_GET['KataKunci']))? $_GET['KataKunci'] : "";

    $mundur =$page-1;
    $maju = $page +1;

    //kondisi jika parameter pencarian kosong
        if($kolomCari=="" && $kolomKataKunci==""){
          $data = $koneksi->query("SELECT * FROM hostname, tipe, software WHERE hostname.id_type = tipe.id_type AND hostname.id_software = software.id_software");
        }else{
          //kondisi jika parameter kolom pencarian diisi
          $data = $koneksi->query("SELECT * FROM hostname, tipe, software WHERE hostname.id_type = tipe.id_type AND hostname.id_software = software.id_software AND $kolomCari LIKE '%$kolomKataKunci%'");
        }   

      
        $jumlah_data = mysqli_num_rows($data);
        
        $jumlah_halaman = ceil($jumlah_data/$batas); 

        $halaman_awal= ($page >1) ? ($page*$batas) - $batas : 0; 
        $no=$halaman_awal+1;

    //kondisi jika parameter pencarian kosong
      if($kolomKataKunci==""){
        $ambil = $koneksi->query("SELECT * FROM hostname, tipe, software WHERE hostname.id_type = tipe.id_type AND hostname.id_software = software.id_software ORDER BY id_ip LIMIT $halaman_awal,$batas");
      }else{
        //kondisi jika parameter kolom pencarian diisi
        $ambil = $koneksi->query("SELECT * FROM hostname, tipe, software WHERE hostname.id_type = tipe.id_type AND hostname.id_software = software.id_software AND $kolomCari LIKE '%$kolomKataKunci%' LIMIT  $halaman_awal,$batas");
      }
      
    

    while($hostname = mysqli_fetch_assoc($ambil)){ ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $hostname['witel']; ?></td>
        <td><?php echo $hostname['ne_ip']; ?></td>
        <td><?php echo $hostname['namehost']; ?></td>
        <td><?php echo $hostname['tipe_ne']; ?></td>
        <td><?php echo $hostname['software_version']; ?></td>
        <td><?php echo $hostname['eviden_foto']; ?></td>
        <td><?php echo $hostname['config']; ?></td>
        <td><?php echo $hostname['source_power']; ?></td>
        <td><?php echo $hostname['keterangan']; ?></td>
        <td><?php echo $hostname['status']; ?></td>
        <td>        
          <a class="btn btn-danger btn-sm" href="detail.php?id=<?php echo($hostname['id_ip']) ?>">Detail</a>
        </td>
      </tr>
    <?php 
      }
    ?>
     </table> 

<h6 class="text-primary">Jumlah data <?php echo $jumlah_data ?></h6> 

     <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <?php
        // Jika page = 1, maka LinkPrev disable
        if($page == 1){ 
      ?>        
        <!-- link Previous Page disable --> 
        <li class="page-item disable">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
      <?php
        }
        else{ 

          if($kolomCari=="" && $kolomKataKunci==""){
          ?>
            <li class="page-item">
      <a class="page-link"  href="index.php?page=<?php echo $mundur;?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
       <?php     
          }else{
        ?> 
        <li class="page-item">
      <a class="page-link" href="index.php?page=<?php echo $mundur;?>&Kolom=<?php echo $kolomCari;?>&KataKunci=<?php echo $kolomKataKunci;?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
         <?php
           } 
        }
      ?>


    
    
    

    
      <?php
        
        
      
          if($kolomCari=="" && $kolomKataKunci==""){
      ?>
          <li class="page-item"><div class="page-link"><?php echo $page; ?> dari <?php echo $jumlah_halaman; ?></div></li>

      <?php
        }else{
          ?>
          <li class="page-item"><div class="page-link"><?php echo $page; ?> dari <?php echo $jumlah_halaman; ?></div></li>
          <?php
        }
      ?>
    

    <!-- link Next Page -->
      <?php       
       if($page == $jumlah_halaman){ 
      ?>
      <li class="page-item">
      <a class="page-link disable" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
      <?php
      }
      elseif($page < $jumlah_halaman){
       if($kolomCari=="" && $kolomKataKunci==""){
          ?>
            <li class="page-item">
      <a class="page-link" href="index.php?page=<?php echo $maju;?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
       <?php     
          }else{
        ?> 
        <li class="page-item">
      <a class="page-link" href="index.php?page=<?php echo $maju;?>&Kolom=<?php echo $kolomCari;?>&KataKunci=<?php echo $kolomKataKunci;?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
      <?php
        }
      }
      ?>

    
  </ul>
</nav>  
      </div>
    </div>

  <?php
  include 'footer.php';
  ?>
</body>
</html>