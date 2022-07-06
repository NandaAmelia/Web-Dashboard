<?php
session_start();
unset($_SESSION['ne_ip']);
unset($_SESSION['namehost']);
unset($_SESSION['id_type']);
unset($_SESSION['id_software']);
unset($_SESSION['witel']);
unset($_SESSION['sto']);
unset($_SESSION['config']);
unset($_SESSION['kebutuhan_pln']);
unset($_SESSION['source']);
unset($_SESSION['colocation']);
unset($_SESSION['tanggal_bast']);
unset($_SESSION['tanggal_integrasi']);
unset($_SESSION['id_lokasi']);
unset($_SESSION['lantai']);
unset($_SESSION['ruangan']);
unset($_SESSION['rack']);
unset($_SESSION['shelf']);

echo "<script>alert('Mengulang Kembali');</script>";

echo "<script>location ='input_data.php';</script>";
?>