<?php
  include 'koneksi.php';
include 'sc.php';
session_start();

if (isset($_SESSION['admin'])){
    header("location:../admin/index.php");
  }
  elseif (!isset($_SESSION['pekerja']) || empty($_SESSION['pekerja'])) {
    echo "<script>alert('Silakan Login terlebih dahulu!');</script>";
        echo "<script>location='../index.php';</script>";
  }
  ?>
<!DOCTYPE html>
<html>
<head>
  <title>SUM UPLINK</title>
</head>
<body>
  <div class="p-fix">
  <?php
include "navbar.php";
?>
</div>
<div class="pb-5 pt-5"></div>
<div class="container pt-5 ms-2">
<div class="row mb-3 mt-5">
      <div class="col-md-4 themed-grid-col" style="width: 300px;">
         <div class=" flex-column flex-shrink-0 p-2 bg-light rounded-3" style="width: 250px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4 text-danger"><b>DASHBOARD</b></span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto"> 
      <li class="nav-item">
        <a href="sum_all.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><img src="../media/img/file-text-fill.svg"/></svg>
          ALL OLT
        </a>
      </li>
      <li>
        <a href="sum_active.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><img src="../media/img/file-text-fill.svg"/></svg>
          OLT ACTIVE
        </a>
      </li>
      <li>
        <a href="sum_pln.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><img src="../media/img/file-text-fill.svg"/></svg>
          ALARM PLN
        </a>
      </li>
      <li>
        <a href="sum_uplink.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><img src="../media/img/file-text-fill.svg"/></svg>
          UPLINK
        </a>
      </li>
      <li>
        <a href="sum_power.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><img src="../media/img/file-text-fill.svg"/></svg>
          POWER
        </a>
      </li>
      <li>
        <a href="sum_valdat.php" class="nav-link link-danger">
          <svg class="bi me-2" width="16" height="16"><img src="../media/img/file-text-fill.svg"/></svg>
          VALDAT
        </a>
      </li>
    </ul>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li>
        <a href="sto.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><img src="../media/img/folder.svg"/></svg>
          STO
        </a>
      </li>
      <li>
        <a href="cardcontrol.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><img src="../media/img/folder.svg"/></svg>
          CARD CONTROL
        </a>
      </li>
    </ul>
  </div>
  </div>
      <div class="col-md-8 themed-grid-col">
        <div class=" bg-light p-3 rounded-3" style="width: 1100px;">
          <div class="table-responsive m-3">
            <span class="fs-4 ps-2 text-danger"><strong>NE-ACTIVE ALL</strong></span>
            <hr>

<table class="table table-bordered table-sm table-striped" style="font-size: .8rem;">
<thead>
  <tr class="text-center">
    <th rowspan="2">WITEL</th>
    <th colspan="3">EVIDEN VALDAT OLT</th>
    <th rowspan="2">Pencapaian</th>
  </tr>
  <tr style="font-size: .75rem;">
    <th>OK</th>
    <th>NOK</th>
    <th>Grand Total</th>
  </tr>
</thead>
  <tr>
    <th>ACEH</th>
    <td><center>141</td>
    <td><center>0</td>
    <td><center>141</td>
    <td><center>100,00%</td>
  </tr>
  <tr>
    <th>BABEL</th>
    <td><center>41</td>
    <td><center>1</td>
    <td><center>42</td>
    <td><center>97,62</td>
  </tr>
  <tr>
    <th>BENGKULU</th>
    <td><center>39</td>
    <td><center>0</td>
    <td><center>39</td>
    <td><center>100,00%</td>
  </tr>
  <tr>
    <th>JAMBI</th>
    <td><center>58</td>
    <td><center>0</td>
    <td><center>58</td>
    <td><center>100,00%</td>
  </tr>
  <tr>
    <th>LAMPUNG</th>
    <td><center>109</td>
    <td><center>0</td>
    <td><center>109</td>
    <td><center>100,00%</td>
  </tr>
  <tr>
    <th>MEDAN</th>
    <td><center>108</td>
    <td><center>0</td>
    <td><center>108</td>
    <td><center>100,00%</td>
  </tr>
  <tr>
    <th>RIDAR</th>
    <td><center>113</td>
    <td><center>0</td>
    <td><center>113</td>
    <td><center>100,00%</td>
  </tr>
  <tr>
    <th>RIKEP</th>
    <td><center>77</td>
    <td><center>17</td>
    <td><center>94</td>
    <td><center>81,91%</td>
  </tr>
  <tr>
    <th>SUMBAR</th>
    <td><center>117</td>
    <td><center>0</td>
    <td><center>117</td>
    <td><center>100,00%</td>
  </tr>
  <tr>
    <th>SUMSEL</th>
    <td><center>108</td>
    <td><center>0</td>
    <td><center>108</td>
    <td><center>100,00%</td>
  </tr>
  <tr>
    <th>SUMUT</th>
    <td><center>101</td>
    <td><center>3</td>
    <td><center>104</td>
    <td><center>97,12%</td>
  </tr>
  <tr>
    <th>LAIN-LAIN</th>
    <td><center>0</td>
    <td><center>0</td>
    <td><center>0</td>
    <td><center>0,00%</td>
  </tr>
  <tr>
    <th>GRAND TOTAL</th>
    <td><center>1012</td>
    <td><center>21</td>
    <td><center>1033</td>
    <td><center>97,88%</td>
  </tr>
</table>
<span class="fs-4 ps-2 text-danger"><strong>NE ACTIVE ALL</strong></span>
            <hr>
<table class="table table-bordered table-sm table-striped" style="font-size: .8rem;">
<thead>
  <tr class="text-center">
    <th rowspan="2">WITEL</th>
    <th rowspan="2">JUMLAH OLT AKCTIVE</th>
    <th colspan="10">ALL ITEM VALDAT OLT</th>
    <th rowspan="2">ACH</th>
    <th rowspan="2">RANK</th>
  </tr>
  <tr>
    <th>TYPE TEMPAT</th>
    <th>NAMA LOKASI</th>
    <th>LANTAI</th>
    <th>ALAMAT</th>
    <th>RUANGAN</th>
    <th>RACK</th>
    <th>SHELF</th>
    <th>LONG</th>
    <th>LAT</th>
    <th>EVIDEN FOTO</th>
  </tr>
</thead>
  <tr>
    <th>ACEH</th>
    <td><center>141</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>1<td>
  </tr>
  <tr>
    <th>BABEL</th>
    <td><center>42</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>1<td>
  </tr>
  <tr>
    <th>BENGKULU</th>
    <td><center>39</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>1<td>
  </tr>
  <tr>
    <th>JAMBI</th>
    <td><center>58</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>1<td>
  </tr>
  <tr>
    <th>LAMPUNG</th>
    <td><center>109</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>1<td>
  </tr>
  <tr>
    <th>MEDAN</th>
    <td><center>108</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>1<td>
  </tr>
  <tr>
    <th>RIDAR</th>
    <td><center>113</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>1<td>
  </tr>
  <tr>
    <th>RIKEP</th>
    <td><center>94</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>81,91%</td>
    <td><center>98,191%</td>
    <td><center>11<td>
  </tr>
  <tr>
    <th>SUMBAR</th>
    <td><center>117</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>1<td>
  </tr>
  <tr>
    <th>SUMSEL</th>
    <td><center>108</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>1<td>
  </tr>
  <tr>
    <th>SUMUT</th>
    <td><center>104</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>99,04%</td>
    <td><center>99,04%</td>
    <td><center>97,12%</td>
    <td><center>99,519%</td>
    <td><center>10<td>
  </tr>
  <tr>
    <th>LAIN-LAIN</th>
    <td><center>0</td>
    <td><center></td>
    <td><center></td>
    <td><center></td>
    <td><center></td>
    <td><center></td>
    <td><center></td>
    <td><center></td>
    <td><center></td>
    <td><center></td>
    <td><center></td>
    <td><center>0,000%</td>
  </tr>
  <tr>
    <th>GRAND TOTAL</th>
    <td><center>1033</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>100,00%</td>
    <td><center>99,91%</td>
    <td><center>99,91%</td>
    <td><center>97,88%</td>
    <td><center>99,792%</td>
  </tr>
</table>
<span class="fs-4 ps-2 text-danger"><strong>NE ACTIVE- GEDUNG TELKOM</strong></span>
            <hr>
<table class="table table-bordered table-sm table-striped" style="font-size: .8rem;">
<thead>
  <tr class="text-center">
    <th rowspan="2">WITEL</th>
    <th colspan="3">EVIDEN VALDAT OLT</th>
    <th rowspan="2">Pencapaian</th>
  </tr>
  <tr style="font-size: .75rem;">
    <th>OK</th>
    <th>NOK</th>
    <th>Grand Total</th>
  </tr>
</thead>
  <tr>
  <th>ACEH</th>
    <td><center>90</td>
    <td><center>0</td>
    <td><center>90</td>
    <td><center>100,00%</td>
  </tr>
  <tr>
    <th>BABEL</th>
    <td><center>27</td>
    <td><center>1</td>
    <td><center>28</td>
    <td><center>96,43%</td>
  </tr>
  <tr>
    <th>BENGKULU</th>
    <td><center>27</td>
    <td><center>0</td>
    <td><center>27</td>
    <td><center>100,00%</td>
  </tr>
  <tr>
    <th>JAMBI</th>
    <td><center>41</td>
    <td><center>0</td>
    <td><center>41</td>
    <td><center>100,00%</td>
  </tr>
  <tr>
    <th>LAMPUNG</th>
    <td><center>71</td>
    <td><center>0</td>
    <td><center>71</td>
    <td><center>100,00%</td>
  </tr>
  <tr>
    <th>MEDAN</th>
    <td><center>99</td>
    <td><center>0</td>
    <td><center>99</td>
    <td><center>100,00%</td>
  </tr>
  <tr>
    <th>RIDAR</th>
    <td><center>70</td>
    <td><center>0</td>
    <td><center>70</td>
    <td><center>100,00%</td>
  </tr>
  <tr>
    <th>RIKEP</th>
    <td><center>62</td>
    <td><center>9</td>
    <td><center>71</td>
    <td><center>87,32%</td>
  </tr>
  <tr>
    <th>SUMBAR</th>
    <td><center>91</td>
    <td><center>0</td>
    <td><center>91</td>
    <td><center>100,00%</td>
  </tr>
  <tr>
    <th>SUMSEL</th>
    <td><center>88</td>
    <td><center>0</td>
    <td><center>88</td>
    <td><center>100,00%</td>
  </tr>
  <tr>
    <th>SUMUT</th>
    <td><center>76</td>
    <td><center>1</td>
    <td><center>77</td>
    <td><center>98,70%</td>
  </tr>
  <tr>
    <th>LAIN-LAIN</th>
    <td><center>0</td>
    <td><center>0</td>
    <td><center>0</td>
    <td><center>0,00%</td>
  </tr>
  <tr>
    <th>GRAND TOTAL</th>
    <td><center>742</td>
    <td><center>11</td>
    <td><center>753</td>
    <td><center>98,54%</td>
  </tr>
</table>
<span class="fs-4 ps-2 text-danger"><strong>NE ACTIVE- DILUAR GEDUNG TELKOM (DI CABINET / SHELTER)</strong></span>
            <hr>
<table class="table table-bordered table-sm table-striped" style="font-size: .8rem;">
<thead>
  <tr class="text-center">
    <th rowspan="2">WITEL</th>
    <th colspan="3">EVIDEN VALDAT OLT</th>
    <th rowspan="2">Pencapaian</th>
  </tr>
  <tr style="font-size: .75rem;">
    <th>OK</th>
    <th>NOK</th>
    <th>Grand Total</th>
  </tr>
</thead>
  <tr>
  <th>ACEH</th>
    <td><center>51</td>
    <td><center>0</td>
    <td><center>51</td>
    <td><center>100,00%</td>
  </tr>
  <tr>
    <th>BABEL</th>
    <td><center>14</td>
    <td><center>0</td>
    <td><center>14</td>
    <td><center>100,00%</td>
  </tr>
  <tr>
    <th>BENGKULU</th>
    <td><center>12</td>
    <td><center>0</td>
    <td><center>12</td>
    <td><center>100,00%</td>
  </tr>
  <tr>
    <th>JAMBI</th>
    <td><center>17</td>
    <td><center>0</td>
    <td><center>17</td>
    <td><center>100,00%</td>
  </tr>
  <tr>
    <th>LAMPUNG</th>
    <td><center>38</td>
    <td><center>0</td>
    <td><center>38</td>
    <td><center>100,00%</td>
  </tr>
  <tr>
    <th>MEDAN</th>
    <td><center>9</td>
    <td><center>0</td>
    <td><center>9</td>
    <td><center>100,00%</td>
  </tr>
  <tr>
    <th>RIDAR</th>
    <td><center>43</td>
    <td><center>0</td>
    <td><center>43</td>
    <td><center>100,00%</td>
  </tr>
  <tr>
    <th>RIKEP</th>
    <td><center>15</td>
    <td><center>8</td>
    <td><center>23</td>
    <td><center>65,22%</td>
  </tr>
  <tr>
    <th>SUMBAR</th>
    <td><center>26</td>
    <td><center>0</td>
    <td><center>26</td>
    <td><center>100,00%</td>
  </tr>
  <tr>
    <th>SUMSEL</th>
    <td><center>20</td>
    <td><center>0</td>
    <td><center>20</td>
    <td><center>100,00%</td>
  </tr>
  <tr>
    <th>SUMUT</th>
    <td><center>25</td>
    <td><center>2</td>
    <td><center>27</td>
    <td><center>92,59%</td>
  </tr>
  <tr>
    <th>LAIN-LAIN</th>
    <td><center>0</td>
    <td><center>0</td>
    <td><center>0</td>
    <td><center>0,00%</td>
  </tr>
  <tr>
    <th>GRAND TOTAL</th>
    <td><center>270</td>
    <td><center>10</td>
    <td><center>280</td>
    <td><center>96,43%</td>
  </tr>
</table>
</div>
        </div>
        
  </div>
    </div>

  </div>
  <?php
include 'footer.php'
?>
</body>

</html>
