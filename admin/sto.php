<title>SUM ALL</title>
<div class="container">
<div class="nav-scroller p-3 m-3 bg-light bg-opacity-75 rounded-pill">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-dark" href="index.php?halaman=sum_all">ALL OLT</a>
      <a class="p-2 link-dark" href="index.php?halaman=sum_active">OLT ACTIVE</a>
      <a class="p-2 link-dark" href="index.php?halaman=sum_pln">ALARM PLN</a>
      <a class="p-2 link-dark" href="index.php?halaman=sum_uplink">UPLINK</a>
      <a class="p-2 link-dark" href="index.php?halaman=sum_power">POWER</a>
      <a class="p-2 link-dark" href="index.php?halaman=sum_valdat">VALDAT</a>
      <a class="p-2 link-primary" href="index.php?halaman=sto"><b>STO</b></a>
      <a class="p-2 link-dark" href="index.php?halaman=cardcontrol">CARD CONTROL</a>
    </nav>
  </div>
</div>
      <div class="bg-light bg-opacity-75 rounded-3 p-3">
      <div class="table-responsive m-3">

<span class="fs-4 ps-2 text-primary"><strong>STO</strong></span>
            <hr>

<table class="table table-bordered table-sm table-striped" style="font-size: .8rem;">
<thead class="text-center">
  <tr>
    <?php
    $batas=10;
    $page=isset($_GET['page'])?(int)$_GET['page'] : 1;
    $halaman_awal= ($page >1) ? ($page*$batas) - $batas : 0;

    $mundur =$page-1;
    $maju = $page +1;

    $data = $koneksi->query("SELECT * FROM sto");
    $jumlah_data = mysqli_num_rows($data);
    $jumlah_halaman = ceil($jumlah_data/$batas);

    $no=$halaman_awal+1;
    $ambil = $koneksi->query("SELECT * FROM sto LIMIT $halaman_awal,$batas");
    ?>
    <th>No</th>
    <th>Nama STO</th>
    <th>WITEL</th>
    <th>Singkatan STO</th>
  </tr>
</thead>
<?php

    while ($datasto=mysqli_fetch_array($ambil)) {
    ?>
  <tr>
    <td><?php echo $no++;?></td>
    <td><?php echo $datasto['nama_sto']; ?></td>
    <td><?php echo $datasto['witel']; ?></td>
    <td><?php echo $datasto['sto']; ?></td>
  </tr>
  <?php 
}
  ?>
</table>
<h5 class="text-primary">Jumlah data <?php echo $jumlah_data ?></h5>
</div>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" <?php if($page > 1){ echo "href='index.php?halaman=sto&page=$maju'";}?> aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><div class="page-link"><?php echo $page; ?> dari <?php echo $jumlah_halaman; ?></div></li>
    <li class="page-item">
      <a class="page-link" <?php if($page < $jumlah_halaman){ echo "href='index.php?halaman=sto&page=$maju'";}?> aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
      </div>
    </div>