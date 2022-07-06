<?php
include 'koneksi.php';

//QUERY ACEH TYPE OLT ALL

$all_aceh_1 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='ACEH'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE witel='ACEH'");

// QUERY BABEL TYPE OLT ALL
$all_babel_1 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='BABEL'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE witel='BABEL'");

// QUERY BENGKULU TYPE OLT ALL
$all_bengkulu_1 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='BENGKULU'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE witel='BENGKULU'");

// QUERY JAMBI TYPE OLT ALL
$all_jambi_1 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='JAMBI'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE witel='JAMBI'");

// QUERY LAMPUNG TYPE OLT ALL
$all_lampung_1 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='LAMPUNG'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE witel='LAMPUNG'");

// QUERY MEDAN TYPE OLT ALL
$all_medan_1 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='MEDAN'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE witel='MEDAN'");

// QUERY RIDAR TYPE OLT ALL
$all_ridar_1 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='RIDAR'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE witel='RIDAR'");

// QUERY RIKEP TYPE OLT ALL
$all_rikep_1 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='RIKEP'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE witel='RIKEP'");

// QUERY SUMBAR TYPE OLT ALL
$all_sumbar_1 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='SUMBAR'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE witel='SUMBAR'");

// QUERY SUMSEL TYPE OLT ALL
$all_sumsel_1 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='SUMSEL'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE witel='SUMSEL'");

// QUERY SUMUT TYPE OLT ALL
$all_sumut_1 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='SUMUT'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE witel='SUMUT'");

// QUERY LAIN-LAIN TYPE OLT ALL
$all_lain_1 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='LAIN-LAIN'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE witel='LAIN-LAIN'");

//QUERY GRAND TOTAL TIPE
$all_tipe = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17'
UNION ALL
SELECT COUNT(id_ip) FROM hostname");

// QUERY ACEH SOFTWARE OLT ALL
$all_aceh_2 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE witel='ACEH'");

// QUERY BABEL SOFTWARE OLT ALL
$all_babel_2 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE witel='BABEL'");

// QUERY BENGKULU SOFTWARE OLT ALL
$all_bengkulu_2 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE witel='BENGKULU'");

// QUERY JAMBI SOFTWARE OLT ALL
$all_jambi_2 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE witel='JAMBI'");

// QUERY LAMPUNG SOFTWARE OLT ALL
$all_lampung_2 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE witel='LAMPUNG'");

// QUERY MEDAN SOFTWARE OLT ALL
$all_medan_2 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE witel='MEDAN'");

// QUERY RIDAR SOFTWARE OLT ALL
$all_ridar_2 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE witel='RIDAR'");

// QUERY RIKEP SOFTWARE OLT ALL
$all_rikep_2 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE witel='RIKEP'");

// QUERY SUMBAR SOFTWARE OLT ALL
$all_sumbar_2 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE witel='SUMBAR'");

// QUERY SUMSEL SOFTWARE OLT ALL
$all_sumsel_2 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE witel='SUMSEL'");

// QUERY SUMUT SOFTWARE OLT ALL
$all_sumut_2 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE witel='SUMUT'");

// QUERY LAIN-LAIN SOFTWARE OLT ALL
$all_lain_2 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE witel='LAIN-LAIN'");

// QUERY GRAND TOTAL SOFTWARE OLT ALL
$all_total_2 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17'
UNION ALL
SELECT COUNT(id_ip) FROM hostname");

//QUERY ACEH TYPE OLT ACTIVE

$active_aceh_1 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='ACEH' && status='ACTIVE'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE witel='ACEH' && status='ACTIVE'");

// QUERY BABEL TYPE OLT ACTIVE
$active_babel_1 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='BABEL' && status='ACTIVE'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE witel='BABEL' && status='ACTIVE'");

// QUERY BENGKULU TYPE OLT ACTIVE
$active_bengkulu_1 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='BENGKULU' && status='ACTIVE'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE witel='BENGKULU' && status='ACTIVE'");

// QUERY JAMBI TYPE OLT ACTIVE
$active_jambi_1 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='JAMBI' && status='ACTIVE'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE witel='JAMBI' && status='ACTIVE'");

// QUERY LAMPUNG TYPE OLT ACTIVE
$active_lampung_1 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE witel='LAMPUNG' && status='ACTIVE'");

// QUERY MEDAN TYPE OLT ACITIVE
$active_medan_1 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='MEDAN'&& status='ACTIVE'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE witel='MEDAN' && status='ACTIVE'");

// QUERY RIDAR TYPE OLT ACTIVE
$active_ridar_1 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='RIDAR' && status='ACTIVE'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE witel='RIDAR' && status='ACTIVE'");

// QUERY RIKEP TYPE OLT ACTIVE
$active_rikep_1 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='RIKEP' && status='ACTIVE'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE witel='RIKEP' && status='ACTIVE'");

// QUERY SUMBAR TYPE OLT ACTIVE
$active_sumbar_1 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='SUMBAR' && status='ACTIVE'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE witel='SUMBAR' && status='ACTIVE'");

// QUERY SUMSEL TYPE OLT ACTIVE
$active_sumsel_1 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='SUMSEL' && status='ACTIVE'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE witel='SUMSEL' && status='ACTIVE'");

// QUERY SUMUT TYPE OLT ACTIVE
$active_sumut_1 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='SUMUT' && status='ACTIVE'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE witel='SUMUT' && status='ACTIVE'");

// QUERY LAIN-LAIN TYPE OLT ACTIVE
$active_lain_1 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE witel='LAIN-LAIN' && status='ACTIVE'");

//QUERY GRAND TOTAL TIPE ACTIVE
$active_tipe = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && status='ACTIVE'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && status='ACTIVE' 
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE status='ACTIVE'");

// QUERY ACEH SOFTWARE OLT ACTIVE
$active_aceh_2 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17' && witel='ACEH' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE witel='ACEH' && status='ACTIVE'");

// QUERY BABEL SOFTWARE OLT ACTIVE
$active_babel_2 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0' && witel='BABEL' && status='ACTIVE' 
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17' && witel='BABEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE witel='BABEL' && status='ACTIVE'");

// QUERY BENGKULU SOFTWARE OLT ACTIVE
$active_bengkulu_2 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17' && witel='BENGKULU' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE witel='BENGKULU' && status='ACTIVE'");

// QUERY JAMBI SOFTWARE OLT ACTIVE
$active_jambi_2 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10' && witel='JAMBI' && status='ACTIVE'
UNION ALL 
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17' && witel='JAMBI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE witel='JAMBI' && status='ACTIVE'");

// QUERY LAMPUNG SOFTWARE OLT ACTIVE
$active_lampung_2 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17' && witel='LAMPUNG' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE witel='LAMPUNG' && status='ACTIVE'");

// QUERY MEDAN SOFTWARE OLT ACTIVE
$active_medan_2 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI' && witel='MEDAN' && status='ACTIVE'
UNION ALL 
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17' && witel='MEDAN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE witel='MEDAN' && status='ACTIVE'");

// QUERY RIDAR SOFTWARE OLT ACTIVE
$active_ridar_2 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17' && witel='RIDAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE witel='RIDAR' && status='ACTIVE'");

// QUERY RIKEP SOFTWARE OLT ACTIVE
$active_rikep_2 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2' && witel='RIKEP' && status='ACTIVE'
UNION ALL 
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17' && witel='RIKEP' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE witel='RIKEP' && status='ACTIVE'");

// QUERY SUMBAR SOFTWARE OLT ACTIVE
$active_sumbar_2 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17' && witel='SUMBAR' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE witel='SUMBAR' && status='ACTIVE'");

// QUERY SUMSEL SOFTWARE OLT ACTIVE
$active_sumsel_2 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17' && witel='SUMSEL' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE witel='SUMSEL' && status='ACTIVE'");

// QUERY SUMUT SOFTWARE OLT ACTIVE
$active_sumut_2 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17' && witel='SUMUT' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE witel='SUMUT' && status='ACTIVE'");

// QUERY LAIN-LAIN SOFTWARE OLT ACTIVE
$active_lain_2 = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL 
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1' && witel='LAIN-LAIN' && status='ACTIVE' 
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17' && witel='LAIN-LAIN' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE witel='LAIN-LAIN' && status='ACTIVE'");

// QUERY GRAND TOTAL SOFTWARE OLT ALL
$active_soft = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R012C00' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C00' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R013C10' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5600V800R018C10' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R018C10' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='MA5800V100R019C10' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='HUAWEI' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1P1' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.3P1' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.5P1' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.0.1P2' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V2.1.0' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.0.24' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.1' && status='ACTIVE'
UNION ALL 
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2.1' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='V1.2' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_type=software.id_software WHERE merk='ZTE' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN software ON hostname.id_software=software.id_software WHERE software_version='AN6000-17' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE status='ACTIVE'");

// QUERY PLN ACEH
$aceh_pln = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='NOK' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='PROGRESS' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OK' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OSASE' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='KENDALA' && witel='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln !='TIDAK PERLU' && witel='ACEH'");

$getosase = $koneksi->query("SELECT id_ip FROM hostname WHERE kebutuhan_pln='OSASE' && witel='ACEH'");
$osase = mysqli_num_rows($getosase);
$getok = $koneksi->query("SELECT id_ip FROM hostname WHERE kebutuhan_pln='OK' && witel='ACEH'");
$ok = mysqli_num_rows($getok);
$gettotal = $koneksi->query("SELECT id_ip FROM hostname WHERE kebutuhan_pln !='TIDAK PERLU' && witel='ACEH'");
$total = mysqli_num_rows($gettotal);
$persen = ($osase+$ok)/$total*100;

// QUERY PLN BABEL
$babel_pln = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='NOK' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='PROGRESS' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OK' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OSASE' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='KENDALA' && witel='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln !='TIDAK PERLU' && witel='BABEL'");



// QUERY PLN BENGKULU
$bengkulu_pln = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='NOK' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='PROGRESS' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OK' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OSASE' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='KENDALA' && witel='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln !='TIDAK PERLU' && witel='BENGKULU'");

// QUERY PLN JAMBI
$jambi_pln = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='NOK' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='PROGRESS' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OK' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OSASE' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='KENDALA' && witel='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln !='TIDAK PERLU' && witel='JAMBI'");

// QUERY PLN LAMPUNG
$lampung_pln = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='NOK' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='PROGRESS' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OK' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OSASE' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='KENDALA' && witel='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln !='TIDAK PERLU' && witel='LAMPUNG'");

// QUERY PLN MEDAN
$medan_pln = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='NOK' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='PROGRESS' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OK' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OSASE' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='KENDALA' && witel='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln !='TIDAK PERLU' && witel='MEDAN'");

// QUERY PLN RIDAR
$ridar_pln = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='NOK' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='PROGRESS' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OK' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OSASE' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='KENDALA' && witel='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln !='TIDAK PERLU' && witel='RIDAR'");

// QUERY PLN RIKEP
$rikep_pln = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='NOK' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='PROGRESS' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OK' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OSASE' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='KENDALA' && witel='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln !='TIDAK PERLU' && witel='RIKEP'");

// QUERY NOK PLN SUMBAR
$sumbar_pln = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='NOK' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='PROGRESS' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OK' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OSASE' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='KENDALA' && witel='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln !='TIDAK PERLU' && witel='SUMBAR'");

// QUERY NOK PLN SUMSEL
$sumsel_pln = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='NOK' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='PROGRESS' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OK' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OSASE' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='KENDALA' && witel='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln !='TIDAK PERLU' && witel='SUMSEL'");

// QUERY NOK PLN SUMUT
$sumut_pln = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='NOK' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='PROGRESS' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OK' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OSASE' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='KENDALA' && witel='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln !='TIDAK PERLU' && witel='SUMUT'");

// QUERY PLN LAIN-LAIN
$lain_pln = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='NOK' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='PROGRESS' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OK' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OSASE' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='KENDALA' && witel='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln !='TIDAK PERLU' && witel='LAIN-LAIN'");

// QUERY PLN TOTAL
$total_pln = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='NOK'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='PROGRESS'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OK'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='OSASE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln='KENDALA'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE kebutuhan_pln !='TIDAK PERLU'");

// QUERY UPLINK ACEH
$aceh_uplink = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE colocation='Colocation' && status='ACTIVE' && witel ='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation='Non-Colocation' && status='ACTIVE' && witel ='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation !='Colocation' && colocation !='Non-Colocation' && status='ACTIVE' && witel ='ACEH'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE status='ACTIVE' && witel ='ACEH' ");

// QUERY UPLINK BABEL
$babel_uplink = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE colocation='Colocation' && status='ACTIVE' && witel ='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation='Non-Colocation' && status='ACTIVE' && witel ='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation !='Colocation' && colocation !='Non-Colocation' && status='ACTIVE' && witel ='BABEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE status='ACTIVE' && witel ='BABEL' ");

// QUERY UPLINK BENGKULU
$bengkulu_uplink = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE colocation='Colocation' && status='ACTIVE' && witel ='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation='Non-Colocation' && status='ACTIVE' && witel ='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation !='Colocation' && colocation !='Non-Colocation' && status='ACTIVE' && witel ='BENGKULU'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE status='ACTIVE' && witel ='BENGKULU' ");

// QUERY UPLINK JAMBI
$jambi_uplink = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE colocation='Colocation' && status='ACTIVE' && witel ='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation='Non-Colocation' && status='ACTIVE' && witel ='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation !='Colocation' && colocation !='Non-Colocation' && status='ACTIVE' && witel ='JAMBI'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE status='ACTIVE' && witel ='JAMBI' ");

// QUERY UPLINK LAMPUNG
$lampung_uplink = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE colocation='Colocation' && status='ACTIVE' && witel ='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation='Non-Colocation' && status='ACTIVE' && witel ='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation !='Colocation' && colocation !='Non-Colocation' && status='ACTIVE' && witel ='LAMPUNG'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE status='ACTIVE' && witel ='LAMPUNG' ");

// QUERY UPLINK MEDAN
$medan_uplink = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE colocation='Colocation' && status='ACTIVE' && witel ='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation='Non-Colocation' && status='ACTIVE' && witel ='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation !='Colocation' && colocation !='Non-Colocation' && status='ACTIVE' && witel ='MEDAN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE status='ACTIVE' && witel ='MEDAN' ");

// QUERY UPLINK RIDAR
$ridar_uplink = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE colocation='Colocation' && status='ACTIVE' && witel ='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation='Non-Colocation' && status='ACTIVE' && witel ='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation !='Colocation' && colocation !='Non-Colocation' && status='ACTIVE' && witel ='RIDAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE status='ACTIVE' && witel ='RIDAR' ");

// QUERY UPLINK RIKEP
$rikep_uplink = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE colocation='Colocation' && status='ACTIVE' && witel ='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation='Non-Colocation' && status='ACTIVE' && witel ='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation !='Colocation' && colocation !='Non-Colocation' && status='ACTIVE' && witel ='RIKEP'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE status='ACTIVE' && witel ='RIKEP' ");

// QUERY UPLINK SUMBAR
$sumbar_uplink = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE colocation='Colocation' && status='ACTIVE' && witel ='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation='Non-Colocation' && status='ACTIVE' && witel ='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation !='Colocation' && colocation !='Non-Colocation' && status='ACTIVE' && witel ='SUMBAR'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE status='ACTIVE' && witel ='SUMBAR' ");

// QUERY UPLINK SUMSEL
$sumsel_uplink = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE colocation='Colocation' && status='ACTIVE' && witel ='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation='Non-Colocation' && status='ACTIVE' && witel ='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation !='Colocation' && colocation !='Non-Colocation' && status='ACTIVE' && witel ='SUMSEL'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE status='ACTIVE' && witel ='SUMSEL' ");

// QUERY UPLINK SUMUT
$sumut_uplink = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE colocation='Colocation' && status='ACTIVE' && witel ='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation='Non-Colocation' && status='ACTIVE' && witel ='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation !='Colocation' && colocation !='Non-Colocation' && status='ACTIVE' && witel ='SUMUT'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE status='ACTIVE' && witel ='SUMUT' ");

// QUERY UPLINK LAIN-LAIN
$lain_uplink = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE colocation='Colocation' && status='ACTIVE' && witel ='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation='Non-Colocation' && status='ACTIVE' && witel ='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation !='Colocation' && colocation !='Non-Colocation' && status='ACTIVE' && witel ='LAIN-LAIN'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE status='ACTIVE' && witel ='LAIN-LAIN' ");

// QUERY UPLINK GRAND TOTAL
$total_uplink = $koneksi->query("SELECT COUNT(id_ip) FROM hostname WHERE colocation='Colocation' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation='Non-Colocation' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE colocation !='Colocation' && colocation !='Non-Colocation' && status='ACTIVE'
UNION ALL
SELECT COUNT(id_ip) FROM hostname WHERE status='ACTIVE'");




// QUERY Non Colocation ACEH
$aceh_noncol = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='NOK' && witel='ACEH' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='PROGRESS' && witel='ACEH' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALTRACK' && witel='ACEH' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALHOMING' && witel='ACEH' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && witel ='ACEH' && colocation='Non-Colocation'");

// QUERY Non Colocation BABEL
$babel_noncol = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='NOK' && witel='BABEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='PROGRESS' && witel='BABEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALTRACK' && witel='BABEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALHOMING' && witel='BABEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && witel ='BABEL' && colocation='Non-Colocation'");

// QUERY Non Colocation BENGKULU
$bengkulu_noncol = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='NOK' && witel='BENGKULU' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='PROGRESS' && witel='BENGKULU' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALTRACK' && witel='BENGKULU' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALHOMING' && witel='BENGKULU' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && witel ='BENGKULU' && colocation='Non-Colocation'");

// QUERY Non Colocation JAMBI
$jambi_noncol = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='NOK' && witel='JAMBI' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='PROGRESS' && witel='JAMBI' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALTRACK' && witel='JAMBI' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALHOMING' && witel='JAMBI' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && witel ='JAMBI' && colocation='Non-Colocation'");

// QUERY Non Colocation LAMPUNG
$lampung_noncol = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='NOK' && witel='LAMPUNG' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='PROGRESS' && witel='LAMPUNG' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALTRACK' && witel='LAMPUNG' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALHOMING' && witel='LAMPUNG' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && witel ='LAMPUNG' && colocation='Non-Colocation'");

// QUERY Non Colocation MEDAN
$medan_noncol = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='NOK' && witel='MEDAN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='PROGRESS' && witel='MEDAN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALTRACK' && witel='MEDAN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALHOMING' && witel='MEDAN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && witel ='MEDAN' && colocation='Non-Colocation'");

// QUERY Non Colocation RIDAR
$ridar_noncol = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='NOK' && witel='RIDAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='PROGRESS' && witel='RIDAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALTRACK' && witel='RIDAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALHOMING' && witel='RIDAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && witel ='RIDAR' && colocation='Non-Colocation'");

// QUERY Non Colocation RIKEP
$rikep_noncol = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='NOK' && witel='RIKEP' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='PROGRESS' && witel='RIKEP' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALTRACK' && witel='RIKEP' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALHOMING' && witel='RIKEP' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && witel ='RIKEP' && colocation='Non-Colocation'");

// QUERY Non Colocation SUMBAR
$sumbar_noncol = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='NOK' && witel='SUMBAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='PROGRESS' && witel='SUMBAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALTRACK' && witel='SUMBAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALHOMING' && witel='SUMBAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && witel ='SUMBAR' && colocation='Non-Colocation'");

// QUERY Non Colocation SUMSEL
$sumsel_noncol = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='NOK' && witel='SUMSEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='PROGRESS' && witel='SUMSEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALTRACK' && witel='SUMSEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALHOMING' && witel='SUMSEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && witel ='SUMSEL' && colocation='Non-Colocation'");

// QUERY Non Colocation SUMUT
$sumut_noncol = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='NOK' && witel='SUMUT' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='PROGRESS' && witel='SUMUT' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALTRACK' && witel='SUMUT' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALHOMING' && witel='SUMUT' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && witel ='SUMUT' && colocation='Non-Colocation'");

// QUERY Non Colocation LAIN-LAIN
$lain_noncol = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='NOK' && witel='LAIN-LAIN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='PROGRESS' && witel='LAIN-LAIN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALTRACK' && witel='LAIN-LAIN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALHOMING' && witel='LAIN-LAIN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && witel ='LAIN-LAIN' && colocation='Non-Colocation'");

// QUERY Non Colocation GRAND TOTAL
$total_noncol = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='NOK' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='PROGRESS' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALTRACK' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE uplink.status='DUALHOMING' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && colocation='Non-Colocation'");





//QUERY STAND ACEH
$stand_aceh = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='ACEH' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='ACEH' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='ACEH' && status='ACTIVE' && config='Active/Standby'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='ACEH' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='ACEH' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='ACEH' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='ACEH' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='ACEH' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='ACEH' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='ACEH' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='ACEH' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='ACEH' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='ACEH' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='ACEH' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='ACEH' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='ACEH' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='ACEH' && status='ACTIVE' && config='Active/Standby'");

// QUERY STAND BABEL
$stand_babel = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='BABEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='BABEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='BABEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='BABEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='BABEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='BABEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='BABEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='BABEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='BABEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='BABEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='BABEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='BABEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='BABEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='BABEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='BABEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='BABEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='BABEL' && status='ACTIVE' && config='Active/Standby'");

// QUERY STAND BENGKULU
$stand_bengkulu = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='BENGKULU' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='BENGKULU' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='BENGKULU' && status='ACTIVE' && config='Active/Standby'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='BENGKULU' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='BENGKULU' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='BENGKULU' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='BENGKULU' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='BENGKULU' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='BENGKULU' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='BENGKULU' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='BENGKULU' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='BENGKULU' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='BENGKULU' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='BENGKULU' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='BENGKULU' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='BENGKULU' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='BENGKULU' && status='ACTIVE' && config='Active/Standby'");

// QUERY STAND JAMBI
$stand_jambi = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='JAMBI' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='JAMBI' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='JAMBI' && status='ACTIVE' && config='Active/Standby'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='JAMBI' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='JAMBI' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='JAMBI' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='JAMBI' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='JAMBI' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='JAMBI' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='JAMBI' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='JAMBI' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='JAMBI' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='JAMBI' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='JAMBI' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='JAMBI' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='JAMBI' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='JAMBI' && status='ACTIVE' && config='Active/Standby'");

// QUERY STAND LAMPUNG
$stand_lampung = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='LAMPUNG' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='LAMPUNG' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='LAMPUNG' && status='ACTIVE' && config='Active/Standby'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='LAMPUNG' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='LAMPUNG' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='LAMPUNG' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='LAMPUNG' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='LAMPUNG' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='LAMPUNG' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='LAMPUNG' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='LAMPUNG' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='LAMPUNG' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='LAMPUNG' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='LAMPUNG' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='LAMPUNG' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='LAMPUNG' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='LAMPUNG' && status='ACTIVE' && config='Active/Standby'");

// QUERY STAND MEDAN
$stand_medan = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='MEDAN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='MEDAN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='MEDAN'&& status='ACTIVE' && config='Active/Standby'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='MEDAN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='MEDAN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='MEDAN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='MEDAN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='MEDAN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='MEDAN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='MEDAN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='MEDAN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='MEDAN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='MEDAN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='MEDAN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='MEDAN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='MEDAN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='MEDAN' && status='ACTIVE' && config='Active/Standby'");

// QUERY STAND RIDAR
$stand_ridar = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='RIDAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='RIDAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='RIDAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='RIDAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='RIDAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='RIDAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='RIDAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='RIDAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='RIDAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='RIDAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='RIDAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='RIDAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='RIDAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='RIDAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='RIDAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='RIDAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='RIDAR' && status='ACTIVE' && config='Active/Standby'");

// QUERY STAND RIKEP
$stand_rikep = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='RIKEP' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='RIKEP' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='RIKEP' && status='ACTIVE' && config='Active/Standby'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='RIKEP' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='RIKEP' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='RIKEP' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='RIKEP' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='RIKEP' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='RIKEP' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='RIKEP' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='RIKEP' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='RIKEP' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='RIKEP' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='RIKEP' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='RIKEP' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='RIKEP' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='RIKEP' && status='ACTIVE' && config='Active/Standby'");

// QUERY STAND SUMBAR
$stand_sumbar = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='SUMBAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='SUMBAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='SUMBAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='SUMBAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='SUMBAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='SUMBAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='SUMBAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='SUMBAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='SUMBAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='SUMBAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='SUMBAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='SUMBAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='SUMBAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='SUMBAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='SUMBAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='SUMBAR' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='SUMBAR' && status='ACTIVE' && config='Active/Standby'");

// QUERY STANDSUMSEL
$stand_sumsel = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='SUMSEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='SUMSEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='SUMSEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='SUMSEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='SUMSEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='SUMSEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='SUMSEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='SUMSEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='SUMSEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='SUMSEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='SUMSEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='SUMSEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='SUMSEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='SUMSEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='SUMSEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='SUMSEL' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='SUMSEL' && status='ACTIVE' && config='Active/Standby'");

// QUERY STAND SUMUT
$stand_sumut = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='SUMUT' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='SUMUT' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='SUMUT' && status='ACTIVE' && config='Active/Standby'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='SUMUT' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='SUMUT' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='SUMUT' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='SUMUT' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='SUMUT' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='SUMUT' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='SUMUT' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='SUMUT' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='SUMUT' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='SUMUT' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='SUMUT' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='SUMUT' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='SUMUT' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='SUMUT' && status='ACTIVE' && config='Active/Standby'");

// QUERY STAND LAIN-LAIN
$stand_lain = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='LAIN-LAIN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='LAIN-LAIN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='LAIN-LAIN' && status='ACTIVE' && config='Active/Standby'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='LAIN-LAIN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='LAIN-LAIN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='LAIN-LAIN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='LAIN-LAIN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='LAIN-LAIN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='LAIN-LAIN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='LAIN-LAIN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='LAIN-LAIN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='LAIN-LAIN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='LAIN-LAIN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='LAIN-LAIN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='LAIN-LAIN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='LAIN-LAIN' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='LAIN-LAIN' && status='ACTIVE' && config='Active/Standby'");

//QUERY GRAND TOTAL STAND
$stand_tipe = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && status='ACTIVE' && config='Active/Standby'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && status='ACTIVE' && config='Active/Standby'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && status='ACTIVE' && config='Active/Standby'");


//QUERY LOAD ACEH
$load_aceh = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='ACEH' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='ACEH' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='ACEH' && status='ACTIVE' && config='Load Sharing'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='ACEH' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='ACEH' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='ACEH' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='ACEH' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='ACEH' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='ACEH' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='ACEH' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='ACEH' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='ACEH' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='ACEH' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='ACEH' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='ACEH' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='ACEH' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='ACEH' && status='ACTIVE' && config='Load Sharing'");

// QUERY LOAD BABEL
$load_babel = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='BABEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='BABEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='BABEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='BABEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='BABEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='BABEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='BABEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='BABEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='BABEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='BABEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='BABEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='BABEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='BABEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='BABEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='BABEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='BABEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='BABEL' && status='ACTIVE' && config='Load Sharing'");

// QUERY LOAD BENGKULU
$load_bengkulu = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='BENGKULU' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='BENGKULU' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='BENGKULU' && status='ACTIVE' && config='Load Sharing'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='BENGKULU' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='BENGKULU' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='BENGKULU' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='BENGKULU' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='BENGKULU' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='BENGKULU' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='BENGKULU' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='BENGKULU' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='BENGKULU' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='BENGKULU' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='BENGKULU' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='BENGKULU' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='BENGKULU' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='BENGKULU' && status='ACTIVE' && config='Load Sharing'");

// QUERY LOAD JAMBI
$load_jambi = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='JAMBI' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='JAMBI' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='JAMBI' && status='ACTIVE' && config='Load Sharing'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='JAMBI' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='JAMBI' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='JAMBI' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='JAMBI' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='JAMBI' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='JAMBI' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='JAMBI' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='JAMBI' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='JAMBI' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='JAMBI' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='JAMBI' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='JAMBI' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='JAMBI' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='JAMBI' && status='ACTIVE' && config='Load Sharing'");

// QUERY LOAD LAMPUNG
$load_lampung = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='LAMPUNG' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='LAMPUNG' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='LAMPUNG' && status='ACTIVE' && config='Load Sharing'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='LAMPUNG' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='LAMPUNG' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='LAMPUNG' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='LAMPUNG' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='LAMPUNG' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='LAMPUNG' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='LAMPUNG' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='LAMPUNG' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='LAMPUNG' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='LAMPUNG' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='LAMPUNG' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='LAMPUNG' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='LAMPUNG' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='LAMPUNG' && status='ACTIVE' && config='Load Sharing'");

// QUERY LOAD MEDAN
$load_medan = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='MEDAN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='MEDAN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='MEDAN'&& status='ACTIVE' && config='Load Sharing'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='MEDAN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='MEDAN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='MEDAN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='MEDAN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='MEDAN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='MEDAN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='MEDAN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='MEDAN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='MEDAN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='MEDAN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='MEDAN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='MEDAN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='MEDAN' && status='ACTIVE' && config='Load Sharingy'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='MEDAN' && status='ACTIVE' && config='Load Sharing'");

// QUERY LOAD RIDAR
$load_ridar = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='RIDAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='RIDAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='RIDAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='RIDAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='RIDAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='RIDAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='RIDAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='RIDAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='RIDAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='RIDAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='RIDAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='RIDAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='RIDAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='RIDAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='RIDAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='RIDAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='RIDAR' && status='ACTIVE' && config='Load Sharing'");

// QUERY LOAD RIKEP
$load_rikep = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='RIKEP' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='RIKEP' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='RIKEP' && status='ACTIVE' && config='Load Sharing'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='RIKEP' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='RIKEP' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='RIKEP' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='RIKEP' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='RIKEP' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='RIKEP' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='RIKEP' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='RIKEP' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='RIKEP' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='RIKEP' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='RIKEP' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='RIKEP' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='RIKEP' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='RIKEP' && status='ACTIVE' && config='Load Sharing'");

// QUERY LOAD SUMBAR
$load_sumbar = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='SUMBAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='SUMBAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='SUMBAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='SUMBAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='SUMBAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='SUMBAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='SUMBAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='SUMBAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='SUMBAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='SUMBAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='SUMBAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='SUMBAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='SUMBAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='SUMBAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='SUMBAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='SUMBAR' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='SUMBAR' && status='ACTIVE' && config='Load Sharing'");

// QUERY LOAD SUMSEL
$load_sumsel = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='SUMSEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='SUMSEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='SUMSEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='SUMSEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='SUMSEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='SUMSEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='SUMSEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='SUMSEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='SUMSEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='SUMSEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='SUMSEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='SUMSEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='SUMSEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='SUMSEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='SUMSEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='SUMSEL' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='SUMSEL' && status='ACTIVE' && config='Load Sharing'");

// QUERY LOAD SUMUT
$load_sumut = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='SUMUT' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='SUMUT' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='SUMUT' && status='ACTIVE' && config='Load Sharing'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='SUMUT' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='SUMUT' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='SUMUT' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='SUMUT' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='SUMUT' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='SUMUT' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='SUMUT' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='SUMUT' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='SUMUT' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='SUMUT' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='SUMUT' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='SUMUT' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='SUMUT' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='SUMUT' && status='ACTIVE' && config='Load Sharing'");

// QUERY LOAD LAIN-LAIN
$load_lain = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && witel='LAIN-LAIN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && witel='LAIN-LAIN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && witel='LAIN-LAIN' && status='ACTIVE' && config='Load Sharing'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && witel='LAIN-LAIN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && witel='LAIN-LAIN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && witel='LAIN-LAIN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && witel='LAIN-LAIN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && witel='LAIN-LAIN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && witel='LAIN-LAIN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && witel='LAIN-LAIN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && witel='LAIN-LAIN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && witel='LAIN-LAIN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && witel='LAIN-LAIN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && witel='LAIN-LAIN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && witel='LAIN-LAIN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && witel='LAIN-LAIN' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && witel='LAIN-LAIN' && status='ACTIVE' && config='Load Sharing'");

//QUERY GRAND TOTAL LOAD
$load_tipe = $koneksi->query("SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5600T' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5608T' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5680T' && status='ACTIVE' && config='Load Sharing'
UNION ALL	
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X17' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X15' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='MA5800-X2' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='HUAWEI' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C220v1.2' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v2' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C300v210' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v2' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C320v210' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C600v1' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='C620v1' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE merk='ZTE' && status='ACTIVE' && config='Load Sharing'
UNION ALL
SELECT COUNT(id_ip) FROM hostname JOIN tipe ON hostname.id_type=tipe.id_type WHERE tipe_ne='AN6000-17' && status='ACTIVE' && config='Load Sharing'");




// QUERY Kabel ACEH
$aceh_kabel = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Patchcord' && witel='ACEH' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Akses' && witel='ACEH' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='AKSES + CHEVRON' && witel='ACEH' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='FEEDER' && witel='ACEH' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='RMJ' && witel='ACEH' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='BACKBONE' && witel='ACEH' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='SKKL' && witel='ACEH' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='IKK' && witel='ACEH' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G652' && witel='ACEH' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G655+G652' && witel='ACEH' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='' && witel='ACEH' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && witel ='ACEH' && colocation='Non-Colocation'");

// QUERY kabel BABEL
$babel_kabel = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Patchcord' && witel='BABEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Akses' && witel='BABEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='AKSES + CHEVRON' && witel='BABEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='FEEDER' && witel='BABEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='RMJ' && witel='BABEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='BACKBONE' && witel='BABEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='SKKL' && witel='BABEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='IKK' && witel='BABEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G652' && witel='BABEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G655+G652' && witel='BABEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='' && witel='BABEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && witel ='BABEL' && colocation='Non-Colocation'");

// QUERY Kabel BENGKULU
$bengkulu_kabel = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Patchcord' && witel='BENGKULU' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Akses' && witel='BENGKULU' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='AKSES + CHEVRON' && witel='BENGKULU' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='FEEDER' && witel='BENGKULU' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='RMJ' && witel='BENGKULU' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='BACKBONE' && witel='BENGKULU' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='SKKL' && witel='BENGKULU' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='IKK' && witel='BENGKULU' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G652' && witel='BENGKULU' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G655+G652' && witel='BENGKULU' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='' && witel='BENGKULU' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && witel ='BENGKULU' && colocation='Non-Colocation'");

// QUERY Kabel JAMBI
$jambi_kabel = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Patchcord' && witel='JAMBI' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Akses' && witel='JAMBI' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='AKSES + CHEVRON' && witel='JAMBI' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='FEEDER' && witel='JAMBI' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='RMJ' && witel='JAMBI' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='BACKBONE' && witel='JAMBI' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='SKKL' && witel='JAMBI' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='IKK' && witel='JAMBI' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G652' && witel='JAMBI' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G655+G652' && witel='JAMBI' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='' && witel='JAMBI' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && witel ='JAMBI' && colocation='Non-Colocation'");

// QUERY KABEL LAMPUNG
$lampung_kabel = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Patchcord' && witel='LAMPUNG' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Akses' && witel='LAMPUNG' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='AKSES + CHEVRON' && witel='LAMPUNG' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='FEEDER' && witel='LAMPUNG' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='RMJ' && witel='LAMPUNG' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='BACKBONE' && witel='LAMPUNG' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='SKKL' && witel='LAMPUNG' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='IKK' && witel='LAMPUNG' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G652' && witel='LAMPUNG' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G655+G652' && witel='LAMPUNG' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='' && witel='LAMPUNG' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && witel ='LAMPUNG' && colocation='Non-Colocation'");

// QUERY kabel MEDAN
$medan_kabel = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Patchcord' && witel='MEDAN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Akses' && witel='MEDAN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='AKSES + CHEVRON' && witel='MEDAN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='FEEDER' && witel='MEDAN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='RMJ' && witel='MEDAN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='BACKBONE' && witel='MEDAN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='SKKL' && witel='MEDAN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='IKK' && witel='MEDAN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G652' && witel='MEDAN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G655+G652' && witel='MEDAN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='' && witel='MEDAN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && witel ='MEDAN' && colocation='Non-Colocation'");

// QUERY kabel RIDAR
$ridar_kabel = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Patchcord' && witel='RIDAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Akses' && witel='RIDAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='AKSES + CHEVRON' && witel='RIDAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='FEEDER' && witel='RIDAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='RMJ' && witel='RIDAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='BACKBONE' && witel='RIDAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='SKKL' && witel='RIDAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='IKK' && witel='RIDAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G652' && witel='RIDAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G655+G652' && witel='RIDAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='' && witel='RIDAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && witel ='RIDAR' && colocation='Non-Colocation'");

// QUERY Kabel RIKEP
$rikep_kabel = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Patchcord' && witel='RIKEP' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Akses' && witel='RIKEP' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='AKSES + CHEVRON' && witel='RIKEP' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='FEEDER' && witel='RIKEP' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='RMJ' && witel='RIKEP' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='BACKBONE' && witel='RIKEP' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='SKKL' && witel='RIKEP' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='IKK' && witel='RIKEP' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G652' && witel='RIKEP' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G655+G652' && witel='RIKEP' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='' && witel='RIKEP' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && witel ='RIKEP' && colocation='Non-Colocation'");

// QUERY Kabel SUMBAR
$sumbar_kabel = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Patchcord' && witel='SUMBAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Akses' && witel='SUMBAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='AKSES + CHEVRON' && witel='SUMBAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='FEEDER' && witel='SUMBAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='RMJ' && witel='SUMBAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='BACKBONE' && witel='SUMBAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='SKKL' && witel='SUMBAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='IKK' && witel='SUMBAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G652' && witel='SUMBAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G655+G652' && witel='SUMBAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='' && witel='SUMBAR' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && witel ='SUMBAR' && colocation='Non-Colocation'");

// QUERY Kabel SUMSEL
$sumsel_kabel = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Patchcord' && witel='SUMSEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Akses' && witel='SUMSEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='AKSES + CHEVRON' && witel='SUMSEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='FEEDER' && witel='SUMSEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='RMJ' && witel='SUMSEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='BACKBONE' && witel='SUMSEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='SKKL' && witel='SUMSEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='IKK' && witel='SUMSEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G652' && witel='SUMSEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G655+G652' && witel='SUMSEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='' && witel='SUMSEL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && witel ='SUMSEL' && colocation='Non-Colocation'");

// QUERY KAbel SUMUT
$sumut_kabel = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Patchcord' && witel='SUMUT' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Akses' && witel='SUMUT' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='AKSES + CHEVRON' && witel='SUMUT' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='FEEDER' && witel='SUMUT' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='RMJ' && witel='SUMUT' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='BACKBONE' && witel='SUMUT' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='SKKL' && witel='SUMUT' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='IKK' && witel='SUMUT' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G652' && witel='SUMUT' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G655+G652' && witel='SUMUT' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='' && witel='SUMUT' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && witel ='SUMUT' && colocation='Non-Colocation'");

// QUERY Kabel LAIN-LAIN
$lain_kabel = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Patchcord' && witel='LAIN-LAIN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Akses' && witel='LAIN-LAIN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='AKSES + CHEVRON' && witel='LAIN-LAIN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='FEEDER' && witel='LAIN-LAIN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='RMJ' && witel='LAIN-LAIN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='BACKBONE' && witel='LAIN-LAIN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='SKKL' && witel='LAIN-LAIN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='IKK' && witel='LAIN-LAIN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G652' && witel='LAIN-LAIN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G655+G652' && witel='LAIN-LAIN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='' && witel='LAIN-LAIN' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && witel ='LAIN-LAIN' && colocation='Non-Colocation'");

// QUERY Kabel GRAND TOTAL
$total_kabel = $koneksi->query("SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Patchcord' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='Akses'  && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='AKSES + CHEVRON' &&  hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='FEEDER' &&  hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='RMJ' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='BACKBONE' &&  hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='SKKL' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='IKK' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G652' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='G655+G652' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE jenis_kabel='' && hostname.status='ACTIVE' && colocation='Non-Colocation'
UNION ALL
SELECT COUNT(ne_ip) FROM hostname JOIN uplink ON hostname.id_ip=uplink.id_ip WHERE hostname.status='ACTIVE' && colocation='Non-Colocation'");


?>