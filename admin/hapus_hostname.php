<?php

$id = $_GET['id'];
$ambil = $koneksi->query("SELECT * FROM hostname WHERE id_ip= '$id' ");
$data = $ambil->fetch_assoc();
$ne_ip = $data['ne_ip'];

	$querylistrik =$koneksi->query("SELECT * FROM kelistrikan WHERE id_ip = '$id'");
  	$hitunglistrik = $querylistrik->num_rows;

  	$querygenset=$koneksi->query("SELECT * FROM genset WHERE id_ip = '$id'");
  	$hitunggenset = $querygenset->num_rows;

  	$querysource =$koneksi->query("SELECT * FROM source_a  WHERE id_ip = '$id'");
   	$hitungsingle = $querysource->num_rows;

   	$queryont =$koneksi->query("SELECT * FROM ont_alarm WHERE id_ip = '$id'");
  	$hitungont = $queryont->num_rows;
  	$dataont = $queryont->fetch_assoc();
  	$id_ont = $dataont['id_ont'];

   	$querydual =$koneksi->query("SELECT * FROM source_b  WHERE id_ip = '$id'");
   	$hitungdual = $querydual->num_rows;

   	$queryint =$koneksi->query("SELECT * FROM ont_interface WHERE id_ont = '$id_ont'");
  	$hitungint = $queryint->num_rows;

  	$queryup =$koneksi->query("SELECT * FROM uplink WHERE id_ip = '$id'");
  	$hitungup = $queryup->num_rows;

  	$queryupb =$koneksi->query("SELECT * FROM uplink_b WHERE id_ip = '$id'");
  	$hitungupb = $queryupb->num_rows;

  	$querypengajuan =$koneksi->query("SELECT * FROM pengajuan WHERE ne_ip = '$ne_ip'");
  	$hitungpengajuan = $queryupb->num_rows;

  	$queryac =$koneksi->query("SELECT * FROM ac_non_sto WHERE id_ip = '$id'");
  	$hitungac = $queryac->num_rows;

  	$querybatere =$koneksi->query("SELECT * FROM batere_non_sto WHERE id_ip = '$id'");
  	$hitungbatere = $querybatere->num_rows;

  	$querykeamanan = $koneksi->query("SELECT * FROM keamanan WHERE id_ip = '$id' ");
    $hitungkeamanan = $querykeamanan->num_rows;

	$cekdata=$koneksi->query("SELECT id_sewa FROM lokasi_sewa WHERE id_ip= '$id'");
    $hitungcocok = $cekdata->num_rows;

    if($hitungcocok==1 || $hitunglistrik==1 || $hitunggenset== 1 || $hitungsingle==1 || $hitungont ==1 || $hitungdual ==1 || $hitungint ==1 ||$hitungup ==1 || $hitungupb==1 || $hitungac == 1 || $hitungpengajuan==1 || $hitungbatere == 1|| $hitungkeamanan==1 ){
    	$koneksi->query("DELETE FROM ac_non_sto WHERE id_ip = '$id' ");
    	$koneksi->query("DELETE FROM batere_non_sto WHERE id_ip = '$id' ");
    	$koneksi->query("DELETE FROM genset WHERE id_ip = '$id' ");
    	$koneksi->query("DELETE FROM keamanan WHERE id_ip = '$id' ");
    	$koneksi->query("DELETE FROM kelistrikan WHERE id_ip = '$id' ");
    	$koneksi->query("DELETE FROM ont_interface WHERE id_ont = '$id_ont' ");
    	$koneksi->query("DELETE FROM ont_alarm WHERE id_ip = '$id' ");
    	$koneksi->query("DELETE FROM pengajuan WHERE ne_ip = '$ne_ip' ");
    	$koneksi->query("DELETE FROM source_a WHERE id_ip = '$id' ");
    	$koneksi->query("DELETE FROM source_b WHERE id_ip = '$id' ");
    	$koneksi->query("DELETE FROM uplink WHERE id_ip = '$id' ");
    	$koneksi->query("DELETE FROM uplink_b WHERE id_ip = '$id' ");
    	$koneksi->query("DELETE FROM lokasi_sewa WHERE id_ip = '$id' ");
    	$koneksi->query("DELETE FROM lokasi_hostname WHERE id_ip = '$id' ");
    }else{
    	echo "<script>alert('Kesalahan!');</script>";
		echo "<script>location='index.php?halaman=cari';</script>";
    }
$koneksi->query("DELETE FROM hostname WHERE id_ip = '$id' ");

echo "<script>alert('Hostname Dihapus!');</script>";
echo "<script>location='index.php?halaman=cari';</script>";

?>