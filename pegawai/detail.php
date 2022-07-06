<?php
session_start();
include 'sc.php';
include 'navbar.php';



if (isset($_SESSION['admin'])){
    header("location:../admin/index.php");
  }
  elseif (!isset($_SESSION['pekerja']) || empty($_SESSION['pekerja'])) {
    echo "<script>alert('Silakan Login terlebih dahulu!');</script>";
        echo "<script>location='../index.php';</script>";
  }
  include 'koneksi.php';
  
$id = $_GET['id'];

  $queryhostname = $koneksi->query("SELECT * FROM software, hostname, tipe WHERE hostname.id_type= tipe.id_type && software.id_software=hostname.id_software AND id_ip= '$id'");
  $detailhostname = $queryhostname->fetch_assoc();

  $querylokasi = $koneksi->query("SELECT * FROM lokasi JOIN lokasi_hostname ON lokasi.id_lokasi= lokasi_hostname.id_lokasi WHERE id_ip = '$id'");
  $detaillokasi = $querylokasi->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Telkom Indonesia</title>
</head>
<body>
  <div class="b-example-divider"></div>
<div class="container p-2">
  <div class="bg-light bg-opacity-75 rounded-3 p-3">
      <div class="table-responsive m-3">

        <div class="container px-4 py-5" id="icon-grid">
    <h2 class="pb-2 border-bottom"><?php echo $detailhostname['ne_ip']; ?></h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
      <div class="col d-flex align-items-start">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="bi text-muted flex-shrink-0 me-3" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg>
        <div>
          <h4 class="fw-bold mb-0">Detail Hostname</h4>
          <p>
            <table class="table table-border table-striped" style="font-size: .75rem;">
              <tr>
                <tr>
                <th>Status</th>
                <td>:</td>
                <td><?php echo $detailhostname['status']; ?></td>
              </tr>
                <th>Hostname</th>
                <td>:</td>
                <td> <?php echo $detailhostname['namehost']; ?></td>
              </tr>
              <tr>
                <th>Type NE</th>
                <td>:</td>
                <td><?php echo $detailhostname['tipe_ne']; ?></td>
              </tr>
              <tr>
                <th>Software Version</th>
                <td>:</td>
                <td><?php echo $detailhostname['software_version']; ?></td>
              </tr>
              <tr>
                <th>Merk</th>
                <td>:</td>
                <td><?php echo $detailhostname['merk']; ?></td>
              </tr>
              <tr>
                <th>Keterangan</th>
                <td>:</td>
                <td><?php echo $detailhostname['keterangan']; ?></td>
              </tr>
              <tr>
                <th>WITEL</th>
                <td>:</td>
                <td><?php echo $detailhostname['witel']; ?></td>
              </tr>
              <tr>
                <th>Eviden Foto</th>
                <td>:</td>
                <td><?php echo $detailhostname['eviden_foto']; ?></td>
              </tr>
              

            </table></p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="bi text-muted flex-shrink-0 me-3" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
      </svg>
        <div>
          <h4 class="fw-bold mb-0">Lokasi</h4>
          <p><table class="table table-border table-striped" style="font-size: .75rem;">
              <tr>
                <th>STO</th>
                <td>:</td>
                <td><?php echo $detaillokasi['sto']; ?></td>
              </tr>
              <tr>
                <th>Nama Lokasi</th>
                <td>:</td>
                <td><?php echo $detaillokasi['nama_lokasi']; ?></td>
              </tr>
              <tr>
                <th>Kepemilikan</th>
                <td>:</td>
                <td><?php echo $detaillokasi['kepemilikan']; ?></td>
              </tr>
              <tr>
                <th>Alamat</th>
                <td>:</td>
                <td><?php echo $detaillokasi['alamat_lokasi']; ?></td>
              </tr>
              <tr>
                <th>Koordinat</th>
                <td>:</td>
                <td>lat <?php echo $detaillokasi['koordinat_lat']; ?><br> long <?php echo $detaillokasi['koordinat_long']; ?></td>
              </tr>

            </table></p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="bi text-muted flex-shrink-0 me-3" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/></svg>
        <div>
          <h4 class="fw-bold mb-0">Lokasi hostname</h4>
          <p><table class="table table-border table-striped" style="font-size: .75rem;">
              <tr>
                <th>Ruangan</th>
                <td>:</td>
                <td><?php echo $detaillokasi['ruangan']; ?></td>
              </tr>
              <tr>
                <th>Rack</th>
                <td>:</td>
                <td><?php echo $detaillokasi['rack']; ?></td>
              </tr>
              <tr>
                <th>Shelf</th>
                <td>:</td>
                <td><?php echo $detaillokasi['shelf']; ?></td>
              </tr>
              <tr>
                <th>Tingkat Gedung ke</th>
                <td>:</td>
                <td><?php echo $detaillokasi['lantai']; ?></td>
              </tr>

              <tr>
                <th>Bangunan</th>
                <td>:</td>
                <td><?php echo $detaillokasi['bangunan']; ?></td>
              </tr>
              <tr>
                <th>Sewa</th>
                <td>:</td>
                <td><?php 
                $cekdata=$koneksi->query("SELECT id_sewa FROM lokasi_sewa WHERE id_ip= '$id'");
    $hitungcocok = $cekdata->num_rows;
    if($hitungcocok==0){
      echo "TIDAK SEWA";
    }else{
      echo "DISEWA";
    } ?></td>
              </tr>
            </table></p>
           <a href="edit_lokasi.php?id=<?php echo($id) ?>" class="btn btn-success btn-sm">Ubah Lokasi</a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
       <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="bi text-muted flex-shrink-0 me-3" viewBox="0 0 16 16">
        <path d="m9.708 6.075-3.024.379-.108.502.595.108c.387.093.464.232.38.619l-.975 4.577c-.255 1.183.14 1.74 1.067 1.74.72 0 1.554-.332 1.933-.789l.116-.549c-.263.232-.65.325-.905.325-.363 0-.494-.255-.402-.704l1.323-6.208Zm.091-2.755a1.32 1.32 0 1 1-2.64 0 1.32 1.32 0 0 1 2.64 0Z"/>
      </svg>
        <div>
          <h4 class="fw-bold mb-0">Infomasi Lain</h4>
          <p>
            <table class="table table-border table-striped" style="font-size: .75rem;">
              <tr>
                <th>Eviden Foto</th>
                <td>:</td>
                <td><?php echo $detailhostname['eviden_foto']; ?></td>
              </tr>
              <tr>
                <th>Config Modul</th>
                <td>:</td>
                <td><?php echo $detailhostname['config']; ?></td>
              </tr>
              <tr>
                <th>Kebutuhan ONT</th>
                <td>:</td>
                <td><?php echo $detailhostname['kebutuhan_pln']; ?></td>
              </tr>
              <tr>
                <th>Source Power</th>
                <td>:</td>
                <td><?php echo $detailhostname['source_power']; ?></td>
              </tr>
              <tr>
                <th>Colocation</th>
                <td>:</td>
                <td><?php echo $detailhostname['colocation']; ?></td>
              </tr>
              <tr>
                <th>Tanggal Integrasi</th>
                <td>:</td>
                <td><?php echo $detailhostname['tanggal_integrasi']; ?></td>
              </tr>
              <tr>
                <th>Tanggal Bast</th>
                <td>:</td>
                <td><?php echo $detailhostname['tanggal_bast']; ?></td>
              </tr>
            </table>
          </p>
          <a href="edit_hostname.php?id=<?php echo($id) ?>" class="btn btn-success btn-sm">Ubah Informasi Hostname</a>
        </div>
      </div>


<div class="col d-flex align-items-start">
      <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="bi text-muted flex-shrink-0 me-3" viewBox="0 0 16 16"><path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/></svg>
        <div>
          <h4 class="fw-bold mb-0">Kelistrikan</h4>
          <p>
            <?php
  $querylistrik =$koneksi->query("SELECT * FROM kelistrikan WHERE id_ip = '$id'");
  $detaillistrik = $querylistrik ->fetch_assoc();
  $hitunglistrik = $querylistrik->num_rows;

  $querygenset=$koneksi->query("SELECT * FROM genset WHERE id_ip = '$id'");
  $detailgenset = $querygenset ->fetch_assoc();
  $hitunggenset = $querygenset->num_rows;
?>
            <table class="table table-border table-striped" style="font-size: .75rem;">
              <?php if($hitunglistrik==1){ ?>
              <tr>
                <th>ID PLN</th>
                <td>:</td>
                <td><?php echo $detaillistrik['id_kelistrikan']; ?></td>
              </tr>
              <tr>
                <th>Pengelolaan CME</th>
                <td>:</td>
                <td><?php echo $detaillistrik['pengelolaan']; ?></td>
              </tr>
            <?php }elseif ($hitunglistrik==0) {
              ?>
              <tr>
                <th>Tidak Ada ID PLN</th>
                <td></td>
                <td></td>
              </tr>
              <?php
            } if($hitunggenset==1){ ?>
              <tr>
                <th>Kondisi Genset</th>
                <td>:</td>
                <td><?php echo $detailgenset['kondisi']; ?></td>
              </tr>
              <tr>
                <th>Jenis Genset</th>
                <td>:</td>
                <td><?php echo $detailgenset['jenis']; ?></td>
              </tr>
              <?php }elseif ($hitunglistrik==0) {
              ?>
              <tr>
                <th>Tidak Ada Genset</th>
                <td></td>
                <td></td>
              </tr>
              <?php
            } ?>
            </table>
          </p>
          <a href="edit_kelistrikan.php?id=<?php echo($id) ?>" class="btn btn-success btn-sm">Ubah Kelistrikan</a>
        </div>
      </div>

       <?php
        $source = $detailhostname['source_power'];
        $querysource =$koneksi->query("SELECT * FROM source_a  WHERE id_ip = '$id'");
  $detailsource = $querysource ->fetch_assoc();
   $hitungsingle = $querysource->num_rows;

   $querydual =$koneksi->query("SELECT * FROM source_b  WHERE id_ip = '$id'");
  $detaildual = $querydual ->fetch_assoc();
   $hitungdual = $querydual->num_rows;
 if($source== 'SINGLE SOURCE'){
if($hitungsingle==0){ ?>
  <div class="col d-flex align-items-start">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="bi text-muted flex-shrink-0 me-3" viewBox="0 0 16 16"><path d="M4.5 9a3.5 3.5 0 1 0 0 7h7a3.5 3.5 0 1 0 0-7h-7zm7 6a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm-7-14a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zm2.45 0A3.49 3.49 0 0 1 8 3.5 3.49 3.49 0 0 1 6.95 6h4.55a2.5 2.5 0 0 0 0-5H6.95zM4.5 0h7a3.5 3.5 0 1 1 0 7h-7a3.5 3.5 0 1 1 0-7z"/></svg>
        <div>
  <h4 class="fw-bold mb-0">SINGLE SOURCE A</h4>
          <p>
            
            <table class="table table-border table-striped" style="font-size: .75rem;">
              <tr>
                <th>Data Belum diinput</th>
                <td></td>
                <td></td>
              </tr>
            </table>
          </p>
          <a href="edit_source.php?id=<?php echo($id) ?>" class="btn btn-success btn-sm">Ubah Source</a>
        </div>
      </div>
              <?php
}elseif ($hitungsingle==1) {
 
        ?>
        <div class="col d-flex align-items-start">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="bi text-muted flex-shrink-0 me-3" viewBox="0 0 16 16"><path d="M4.5 9a3.5 3.5 0 1 0 0 7h7a3.5 3.5 0 1 0 0-7h-7zm7 6a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm-7-14a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zm2.45 0A3.49 3.49 0 0 1 8 3.5 3.49 3.49 0 0 1 6.95 6h4.55a2.5 2.5 0 0 0 0-5H6.95zM4.5 0h7a3.5 3.5 0 1 1 0 7h-7a3.5 3.5 0 1 1 0-7z"/></svg>
        <div>
          <h4 class="fw-bold mb-0">SINGLE SOURCE A</h4>
          <p>
            
            <table class="table table-border table-striped" style="font-size: .75rem;">
              <tr>
                <th>Source A</th>
                <td>:</td>
                <td><?php echo $detailsource['source']; ?></td>
              </tr>
              <tr>
                <th>Modul Power A</th>
                <td>:</td>
                <td><?php echo $detailsource['modul_power']; ?></td>
              </tr>
              <tr>
                <th>Kapasitas Module A</th>
                <td>:</td>
                <td><?php echo $detailsource['kap_module']; ?></td>
              </tr>
              <tr>
                <th>Load Maks Rect A</th>
                <td>:</td>
                <td><?php echo $detailsource['load_rectifier']; ?></td>
              </tr>
              <tr>
                <th>Kapasitas MCB Rect A</th>
                <td>:</td>
                <td><?php echo $detailsource['kap_rectifier']; ?></td>
              </tr>
              <tr>
                <th>Diameter Kabel A</th>
                <td>:</td>
                <td><?php echo $detailsource['diameter_kabel']; ?></td>
              </tr>
              <tr>
                <th>Panjang Kabel A</th>
                <td>:</td>
                <td><?php echo $detailsource['panjang_kabel']; ?></td>
              </tr>
            </table>
          </p>
          <a href="edit_source.php?id=<?php echo($id) ?>" class="btn btn-success btn-sm">Ubah Source</a>
          </div>
      </div>

          <?php
        }
      }
        elseif($source== 'DUAL SOURCE'){ 
          if($hitungdual==1){
?>
<div class="col d-flex align-items-start">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="bi text-muted flex-shrink-0 me-3" viewBox="0 0 16 16"><path d="M4.5 9a3.5 3.5 0 1 0 0 7h7a3.5 3.5 0 1 0 0-7h-7zm7 6a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm-7-14a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zm2.45 0A3.49 3.49 0 0 1 8 3.5 3.49 3.49 0 0 1 6.95 6h4.55a2.5 2.5 0 0 0 0-5H6.95zM4.5 0h7a3.5 3.5 0 1 1 0 7h-7a3.5 3.5 0 1 1 0-7z"/></svg>
        <div>
          <h4 class="fw-bold mb-0">DUAL SOURCE A</h4>
          <p>
            
            <table class="table table-border table-striped" style="font-size: .75rem;">
              <tr>
                <th>Source A</th>
                <td>:</td>
                <td><?php echo $detailsource['source']; ?></td>
              </tr>
              <tr>
                <th>Modul Power A</th>
                <td>:</td>
                <td><?php echo $detailsource['modul_power']; ?></td>
              </tr>
              <tr>
                <th>Kapasitas Module A</th>
                <td>:</td>
                <td><?php echo $detailsource['kap_module']; ?></td>
              </tr>
              <tr>
                <th>Load Maks Rect A</th>
                <td>:</td>
                <td><?php echo $detailsource['load_rectifier']; ?></td>
              </tr>
              <tr>
                <th>Kapasitas MCB Rect A</th>
                <td>:</td>
                <td><?php echo $detailsource['kap_rectifier']; ?></td>
              </tr>
              <tr>
                <th>Diameter Kabel A</th>
                <td>:</td>
                <td><?php echo $detailsource['diameter_kabel']; ?></td>
              </tr>
              <tr>
                <th>Panjang Kabel A</th>
                <td>:</td>
                <td><?php echo $detailsource['panjang_kabel']; ?></td>
              </tr>
            </table>
          </p>
          </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="bi text-muted flex-shrink-0 me-3" viewBox="0 0 16 16"><path d="M4.5 9a3.5 3.5 0 1 0 0 7h7a3.5 3.5 0 1 0 0-7h-7zm7 6a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm-7-14a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zm2.45 0A3.49 3.49 0 0 1 8 3.5 3.49 3.49 0 0 1 6.95 6h4.55a2.5 2.5 0 0 0 0-5H6.95zM4.5 0h7a3.5 3.5 0 1 1 0 7h-7a3.5 3.5 0 1 1 0-7z"/></svg>
        <div>
          <h4 class="fw-bold mb-0">DUAL SOURCE B</h4>
          <p>
            
            <table class="table table-border table-striped" style="font-size: .75rem;">
              <tr>
                <th>Source B</th>
                <td>:</td>
                <td><?php echo $detaildual['sourceb']; ?></td>
              </tr>
              <tr>
                <th>Modul Power B</th>
                <td>:</td>
                <td><?php echo $detaildual['modul_powerb']; ?></td>
              </tr>
              <tr>
                <th>Kapasitas Module B</th>
                <td>:</td>
                <td><?php echo $detaildual['kap_moduleb']; ?></td>
              </tr>
              <tr>
                <th>Load Maks Rect B</th>
                <td>:</td>
                <td><?php echo $detaildual['load_rectifierb']; ?></td>
              </tr>
              <tr>
                <th>Kapasitas MCB Rect B</th>
                <td>:</td>
                <td><?php echo $detaildual['kap_rectifierb']; ?></td>
              </tr>
              <tr>
                <th>Diameter Kabel B</th>
                <td>:</td>
                <td><?php echo $detaildual['diameter_kabelb']; ?></td>
              </tr>
              <tr>
                <th>Panjang Kabel B</th>
                <td>:</td>
                <td><?php echo $detaildual['panjang_kabelb']; ?></td>
              </tr>
            </table>
          </p>
          <a href="edit_source.php?id=<?php echo($id) ?>" class="btn btn-success btn-sm">Ubah Source</a>
          </div>
      </div>
<?php }
elseif ($hitungdual==0) { ?>
  <div class="col d-flex align-items-start">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="bi text-muted flex-shrink-0 me-3" viewBox="0 0 16 16"><path d="M4.5 9a3.5 3.5 0 1 0 0 7h7a3.5 3.5 0 1 0 0-7h-7zm7 6a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm-7-14a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zm2.45 0A3.49 3.49 0 0 1 8 3.5 3.49 3.49 0 0 1 6.95 6h4.55a2.5 2.5 0 0 0 0-5H6.95zM4.5 0h7a3.5 3.5 0 1 1 0 7h-7a3.5 3.5 0 1 1 0-7z"/></svg>
        <div>
  <h4 class="fw-bold mb-0">SINGLE SOURCE B</h4>
          <p>
            
            <table class="table table-border table-striped" style="font-size: .75rem;">
              <tr>
                <th>Data Belum diinput</th>
                <td></td>
                <td></td>
              </tr>
            </table>
          </p>
          <a href="edit_source.php?id=<?php echo($id) ?>" class="btn btn-success btn-sm">Ubah Source</a>
        </div>
      </div>
 
 <?php
}
}
?>
        
      <div class="col d-flex align-items-start">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="bi text-muted flex-shrink-0 me-3" viewBox="0 0 16 16"><path d="M1 2a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v1h.5A1.5 1.5 0 0 1 16 4.5v7a1.5 1.5 0 0 1-1.5 1.5h-.55a2.5 2.5 0 0 1-2.45 2h-8A2.5 2.5 0 0 1 1 12.5V2zm13 10h.5a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5H14v8z"/></svg>
        <div>
           <?php
  $queryont =$koneksi->query("SELECT * FROM ont_alarm WHERE id_ip = '$id'");
  $detailont = $queryont ->fetch_assoc();
  $hitungont = $queryont->num_rows;
  if($detailhostname['kebutuhan_pln']== 'TIDAK PERLU' || $detailhostname['kebutuhan_pln']== 'NOK' || $detailhostname['kebutuhan_pln']== 'KENDALA' ){?>
    <h4 class="fw-bold mb-0">ONT ALARM PLN DOWN</h4>
          <p><table class="table table-border table-striped" style="font-size: .75rem;">
              <tr>
                <th><b>DALAM Status NOK, TIDAK PERLU atau KENDALA </b></th>
                <td></td>
                <td></td>
              </tr>
            </table>
          </p>
          <?php
  }
  else{
  if($hitungont==0){
?>
<h4 class="fw-bold mb-0">ONT ALARM PLN DOWN</h4>
          <p><table class="table table-border table-striped" style="font-size: .75rem;">
              <tr>
                <th>Data Belum Dinput</th>
                <td></td>
                <td></td>
              </tr>
            </table>
          </p>
          <a href="edit_ont.php?id=<?php echo($id) ?>" class="btn btn-success btn-sm">Ubah ONT ALARM PLN</a>
<?php }elseif($hitungont==1){?>
            <h4 class="fw-bold mb-0">ONT ALARM PLN DOWN</h4>
          <p><table class=" table table-border table-striped" style="font-size: .75rem;">
              <tr>
                <th>Hostname CACTI</th>
                <td>:</td>
                <td><?php echo $detailont['hostname_cacti']; ?></td>
              </tr>
              <tr>
                <th>Type ONU</th>
                <td>:</td>
                <td><?php echo $detailont['type_onu']; ?></td>
              </tr>
              <tr>
                <th>SN ONU</th>
                <td>:</td>
                <td><?php echo $detailont['sn_onu']; ?></td>
              </tr>
              <tr>
                <th>VLAN OAM</th>
                <td>:</td>
                <td><?php echo $detailont['vlanoam']; ?></td>
              </tr>
              <tr>
                <th>IP Addres</th>
                <td>:</td>
                <td><?php echo $detailont['ip_addres']; ?></td>
              </tr>
              <tr>
                <th>Tanggal Pemasangan</th>
                <td>:</td>
                <td><?php echo $detailont['tanggal_pemasangan']; ?></td>
              </tr>
              <tr>
                <th>Keterangan</th>
                <td>:</td>
                <td><?php echo $detailont['keterangan']; ?></td>
              </tr>
            <?php
            $id_ont= $detailont['id_ont'];
            $queryint =$koneksi->query("SELECT * FROM ont_interface WHERE id_ont = '$id_ont'");
  $detailint = $queryint ->fetch_assoc();
  $hitungint = $queryint->num_rows;
            if($hitungint==1) {
              ?>
              <tr>
                <th>Interface (F,S,P,UNOID)</th>
                <td>:</td>
                <td><?php echo $detailint['f']; ?>,<?php echo $detailint['s']; ?>,<?php echo $detailint['p']; ?>,<?php echo $detailint['unoid']; ?></td>
              </tr>
            <?php
          }
          elseif($hitungint==0) {?>
            <tr>
                <th>Interface (F,S,P,UNOID)</th>
                <td>:</td>
                <td>Data Belum di Input</td>
              </tr>
            
            <?php
          } ?>
            </table></p>
              <a href="edit_ont.php?id=<?php echo($id) ?>" class="btn btn-success btn-sm">Ubah ONT ALARM PLN</a>
            <?php
          }
        }
            ?>
        </div>
      </div>









           <?php
  $queryup =$koneksi->query("SELECT * FROM uplink WHERE id_ip = '$id'");
  $detailup = $queryup ->fetch_assoc();
  $hitungup = $queryup->num_rows;
  if($hitungup==0){
?>
<div class="col d-flex align-items-start">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="bi text-muted flex-shrink-0 me-3" viewBox="0 0 16 16"><path d="M6.354 5.5H4a3 3 0 0 0 0 6h3a3 3 0 0 0 2.83-4H9c-.086 0-.17.01-.25.031A2 2 0 0 1 7 10.5H4a2 2 0 1 1 0-4h1.535c.218-.376.495-.714.82-1z"/>
  <path d="M9 5.5a3 3 0 0 0-2.83 4h1.098A2 2 0 0 1 9 6.5h3a2 2 0 1 1 0 4h-1.535a4.02 4.02 0 0 1-.82 1H12a3 3 0 1 0 0-6H9z"/></svg>
        <div>
<h5 class="fw-bold mb-0">UPLINK OLT </h>
          <p><table class="table table-border table-striped" style="font-size: .75rem;">
              <tr>
                <th>Data Belum Dinput</th>
                <td></td>
                <td></td>
              </tr>
            </table>
          </p>
<a href="edit_uplink.php?id=<?php echo($id) ?>" class="btn btn-success btn-sm">Ubah Uplink</a>
        </div>
      </div>
<?php
}elseif($hitungup==1){
  if($detailup['status']== 'Tidak Perlu' || $detailup['status']== 'PROGRESS' ){?>
    <div class="col d-flex align-items-start">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="bi text-muted flex-shrink-0 me-3" viewBox="0 0 16 16"><path d="M6.354 5.5H4a3 3 0 0 0 0 6h3a3 3 0 0 0 2.83-4H9c-.086 0-.17.01-.25.031A2 2 0 0 1 7 10.5H4a2 2 0 1 1 0-4h1.535c.218-.376.495-.714.82-1z"/>
  <path d="M9 5.5a3 3 0 0 0-2.83 4h1.098A2 2 0 0 1 9 6.5h3a2 2 0 1 1 0 4h-1.535a4.02 4.02 0 0 1-.82 1H12a3 3 0 1 0 0-6H9z"/></svg>
        <div>
    <h4 class="fw-bold mb-0">UPLINK OLT </h4>
          <p><table class="table table-border table-striped" style="font-size: .75rem;">
              <tr>
                <th>Status</th>
                <td>:</td>
                <td><?php echo $detailup['status']; ?></td>
              </tr>
              <tr>
                <th>Tanggal Realisasi</th>
                <td>:</td>
                <td><?php echo $detailup['tanggal_realisasi']; ?></td>
              </tr>
              <tr>
                <th>Metro A</th>
                <td>:</td>
                <td><?php echo $detailup['metro_a']; ?></td>
              </tr>
              <tr>
                <th>Jenis Kabel A</th>
                <td>:</td>
                <td><?php echo $detailup['jenis_kabel']; ?></td>
              </tr>
              <tr>
                <th>Kapasitas Metro A(Gb)</th>
                <td>:</td>
                <td><?php echo $detailup['kapasitas_a']; ?></td>
              </tr>
              <tr>
                <th>Jarak A(Km)</th>
                <td>:</td>
                <td><?php echo $detailup['jarak_a']; ?></td>
              </tr>
              <tr>
                <th>Catatan</th>
                <td>:</td>
                <td><?php echo $detailup['catatan']; ?></td>
              </tr>
              <tr>
                <th>Panjang Kabel</th>
                <td>:</td>
                <td><?php echo $detailup['panjang_kabel']; ?></td>
              </tr>
            </table>
          </p>
           <a href="edit_uplink.php?id=<?php echo($id) ?>" class="btn btn-success btn-sm">Ubah Uplink</a>
        </div>
      </div>
          <?php
  }
   if($detailup['status']== 'DUALHOMING' || $detailup['status']== 'DUALTRACK' || $detailup['status']== 'NOK'){

  $queryupb =$koneksi->query("SELECT * FROM uplink_b WHERE id_ip = '$id'");
  $detailupb = $queryupb ->fetch_assoc();
  $hitungupb = $queryupb->num_rows;
  if($hitungupb==0){
   ?>

<div class="col d-flex align-items-start">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="bi text-muted flex-shrink-0 me-3" viewBox="0 0 16 16"><path d="M6.354 5.5H4a3 3 0 0 0 0 6h3a3 3 0 0 0 2.83-4H9c-.086 0-.17.01-.25.031A2 2 0 0 1 7 10.5H4a2 2 0 1 1 0-4h1.535c.218-.376.495-.714.82-1z"/>
  <path d="M9 5.5a3 3 0 0 0-2.83 4h1.098A2 2 0 0 1 9 6.5h3a2 2 0 1 1 0 4h-1.535a4.02 4.02 0 0 1-.82 1H12a3 3 0 1 0 0-6H9z"/></svg>
        <div>
<h4 class="fw-bold mb-0">UPLINK OLT</h4>
          <p><table class="table table-border table-striped" style="font-size: .75rem;">
              <tr>
                <th>Data Belum Dinput</th>
                <td></td>
                <td></td>
              </tr>
            </table>
          </p>
 <a href="edit_uplink.php?id=<?php echo($id) ?>" class="btn btn-success btn-sm">Ubah Uplink</a>
        </div>
      </div>
<?php
}
elseif($hitungupb==1){?>
  <div class="col d-flex align-items-start">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="bi text-muted flex-shrink-0 me-3" viewBox="0 0 16 16"><path d="M6.354 5.5H4a3 3 0 0 0 0 6h3a3 3 0 0 0 2.83-4H9c-.086 0-.17.01-.25.031A2 2 0 0 1 7 10.5H4a2 2 0 1 1 0-4h1.535c.218-.376.495-.714.82-1z"/>
  <path d="M9 5.5a3 3 0 0 0-2.83 4h1.098A2 2 0 0 1 9 6.5h3a2 2 0 1 1 0 4h-1.535a4.02 4.02 0 0 1-.82 1H12a3 3 0 1 0 0-6H9z"/></svg>
        <div>
    <h4 class="fw-bold mb-0">UPLINK OLT </h4>
          <p><table class="table table-border table-striped" style="font-size: .75rem;">
              <tr>
                <th>Status</th>
                <td>:</td>
                <td><?php echo $detailup['status']; ?></td>
              </tr>
              <tr>
                <th>Tanggal Realisasi</th>
                <td>:</td>
                <td><?php echo $detailup['tanggal_realisasi']; ?></td>
              </tr>
              <tr>
                <th>Metro A</th>
                <td>:</td>
                <td><?php echo $detailup['metro_a']; ?></td>
              </tr>
              <tr>
                <th>Jenis Kabel A</th>
                <td>:</td>
                <td><?php echo $detailup['jenis_kabel']; ?></td>
              </tr>
              <tr>
                <th>Kapasitas Metro A(Gb)</th>
                <td>:</td>
                <td><?php echo $detailup['kapasitas_a']; ?></td>
              </tr>
              <tr>
                <th>Jarak A(Km)</th>
                <td>:</td>
                <td><?php echo $detailup['jarak_a']; ?></td>
              </tr>
              <tr>
                <th>Catatan</th>
                <td>:</td>
                <td><?php echo $detailup['catatan']; ?></td>
              </tr>
              <tr>
                <th>Panjang Kabel</th>
                <td>:</td>
                <td><?php echo $detailup['panjang_kabel']; ?></td>
              </tr>
            </table>
          </p>
        </div>
      </div>
    <div class="col d-flex align-items-start">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="bi text-muted flex-shrink-0 me-3" viewBox="0 0 16 16"><path d="M6.354 5.5H4a3 3 0 0 0 0 6h3a3 3 0 0 0 2.83-4H9c-.086 0-.17.01-.25.031A2 2 0 0 1 7 10.5H4a2 2 0 1 1 0-4h1.535c.218-.376.495-.714.82-1z"/>
  <path d="M9 5.5a3 3 0 0 0-2.83 4h1.098A2 2 0 0 1 9 6.5h3a2 2 0 1 1 0 4h-1.535a4.02 4.02 0 0 1-.82 1H12a3 3 0 1 0 0-6H9z"/></svg>
        <div>
            <h4 class="fw-bold mb-0">UPLINK OLT B</h4>
          <p><table class="table table-border table-striped" style="font-size: .75rem;">
              <tr>
                <th>Metro B</th>
                <td>:</td>
                <td><?php echo $detailupb['metro_b']; ?></td>
              </tr>
              <tr>
                <th>Jenis Kabel B</th>
                <td>:</td>
                <td><?php echo $detailupb['jenis_kabel']; ?></td>
              </tr>
              <tr>
                <th>Kapasitas Metro B(Gb)</th>
                <td>:</td>
                <td><?php echo $detailupb['kapasitas_b']; ?></td>
              </tr>
              <tr>
                <th>Jarak B(Km)</th>
                <td>:</td>
                <td><?php echo $detailupb['jarak_b']; ?></td>
              </tr>
            </table></p>
             <a href="edit_uplink.php?id=<?php echo($id) ?>" class="btn btn-success btn-sm">Ubah Uplink</a>
          </div>
        </div>
            <?php
          }
}
}
            ?>








      <?php
      $queryac =$koneksi->query("SELECT * FROM ac_non_sto WHERE id_ip = '$id'");
  $detailac = $queryac ->fetch_assoc();
  $hitungac = $queryac->num_rows;

  $querybatere =$koneksi->query("SELECT * FROM batere_non_sto WHERE id_ip = '$id'");
  $detailbatere = $querybatere ->fetch_assoc();
  $hitungbatere = $querybatere->num_rows;
    
?>      <div class="col d-flex align-items-start">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="bi text-muted flex-shrink-0 me-3" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M5.5 6.5A.5.5 0 0 1 6 6h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
      </svg>
        <div>
          <h4 class="fw-bold mb-0">NON-STO</h4>
          <table class="table table-border table-striped" style="font-size: .75rem;">
         <?php if($hitungac==0){?>
          <p><b>Data AC tidak ada</b></p>
          <?php 
        }
          elseif ($hitungac==1) { ?>
            <tr>
                <th>Jumlah AC</th>
                <td>:</td>
                <td><?php echo $detailac['jumlah']; ?></td>
              </tr>
              <tr>
                <th>Kapasitas AC</th>
                <td>:</td>
                <td><?php echo $detailac['kapasitas_pk']; ?></td>
              </tr>
              <tr>
                <th>Tahun</th>
                <td>:</td>
                <td><?php echo $detailac['tahun_pengadaan']; ?></td>
              </tr>
              <?php
          } 
          if($hitungbatere==0){
          ?>
          <p><b>Data Batere tidak ada</b></p>
          <?php 
        }
          elseif ($hitungbatere==1) { ?>
              <tr>
                <th>Jumlah Batere</th>
                <td>:</td>
                <td><?php echo $detailbatere['jumlah_batere']; ?></td>
              </tr>
              <tr>
                <th>Kapasitas Batere</th>
                <td>:</td>
                <td><?php echo $detailbatere['kapasitas_batere']; ?></td>
              </tr>
              <tr>
                <th>Tahun</th>
                <td>:</td>
                <td><?php echo $detailbatere['tahun_batere']; ?></td>
              </tr>

<?php }?>

            </table></p>
             
    <a href="edit_non_sto.php?id=<?php echo($id) ?>" class="btn btn-success btn-sm">Ubah Fasilitas Non STO</a>
        </div>
      </div>







 <?php
  $querykeamanan = $koneksi->query("SELECT * FROM keamanan WHERE id_ip = '$id' ");
  $detailkeamanan = $querykeamanan->fetch_assoc();
    $hitungkeamanan = $querykeamanan->num_rows;
    
?>      <div class="col d-flex align-items-start">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="bi text-muted flex-shrink-0 me-3" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M5.5 6.5A.5.5 0 0 1 6 6h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
      </svg>
        <div>
          <h4 class="fw-bold mb-0">Keamanan</h4>
         <?php if($hitungkeamanan==0){?>
          <table class="table table-border table-striped" style="font-size: .75rem;">
              <tr>
                Belum Ada Data
              </tr>

            </table>
<?php }else{?>

          <p><table class="table table-border table-striped" style="font-size: .75rem;">
              <tr>
                <th>Kamera</th>
                <td>:</td>
                <td><?php echo $detailkeamanan['kamera']; ?></td>
              </tr>
              <tr>
                <th>Osase</th>
                <td>:</td>
                <td><?php echo $detailkeamanan['osase']; ?></td>
              </tr>

            </table></p>
             <?php
    } ?>
    <a href="edit_keamanan.php?id=<?php echo($id) ?>" class="btn btn-success btn-sm">Ubah Keamanan</a>
        </div>
      </div>




      
    </div>
  </div>


        </div>
  </div>
</div>
<?php
  include 'footer.php';
  ?>
</body>
</html>
