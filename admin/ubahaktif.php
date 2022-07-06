<?php
$id = $_GET['id_pekerja'];
$ambil = $koneksi->query("SELECT level FROM user WHERE id_pekerja='$id'");
$data = $ambil->fetch_assoc();
$level = $data['level'];

if ($level==1)
{
	$user = 'admin';
}elseif($level==2){
	$user = 'pegawai';
}


$koneksi->query("UPDATE user SET status = 'Aktif' WHERE id_pekerja = '$id'");

echo "<script>alert('Status Diganti!');</script>";
echo "<script>location='index.php?halaman=$user'</script>";

?>