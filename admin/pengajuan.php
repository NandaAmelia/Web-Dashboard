<title>Pengajuan</title>
    <div class="p-5"></div>
      <div class="bg-light bg-opacity-75 rounded-3 p-3">
      <div class="table-responsive m-3">
        <span class="fs-4 ps-2 text-primary"><strong>Pengajuan</strong></span>
<hr>
<div class="container col-5 ps-5"></div>
     <table class="table table-bordered table-striped table-sm text-center" style="font-size: .8rem;">
      <tr>
    <th>No</th>
    <th>NE IP</th>
    <th>ID Pekerja</th>
    <th>WITEL</th>
    <th>Tanggal Pengajuan</th>
    <th>Status</th>
    <th></th>
      </tr>
      <?php
    $batas=10;
    $page=isset($_GET['page'])?(int)$_GET['page'] : 1 ;
    $halaman_awal= ($page >1) ? ($page*$batas) - $batas : 0;

    $mundur =$page-1;
    $maju = $page +1;

    $data = $koneksi->query("SELECT * FROM pengajuan");
    $jumlah_data = mysqli_num_rows($data);
    $jumlah_halaman = ceil($jumlah_data/$batas);

    $no=$halaman_awal+1;
    $ambil = $koneksi->query("SELECT * FROM pengajuan ORDER BY id LIMIT $halaman_awal,$batas");

    while($pengajuan = mysqli_fetch_assoc($ambil)){ ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $pengajuan['ne_ip']; ?></td>
        <td><?php echo $pengajuan['id_pekerja']; ?></td>
        <td><?php echo $pengajuan['witel']; ?></td>
        <td><?php echo $pengajuan['tanggal_pengajuan']; ?></td>
        <td><?php if($pengajuan['status_pengajuan'] == "Belum Diperiksa") : ?>
          <p class="text-primary"><b><?php echo $pengajuan['status_pengajuan']; ?></b></p>
        <?php elseif($pengajuan['status_pengajuan'] == "Disetujui"): ?>
          <p class="text-success"><b><?php echo $pengajuan['status_pengajuan']; ?></b></p>
          <?php elseif($pengajuan['status_pengajuan'] == "Invalid"): ?>
          <p class="text-danger"><b><?php echo $pengajuan['status_pengajuan']; ?></b></p>
          <?php endif ?></td>
        <td><?php if($pengajuan['status_pengajuan'] == "Belum Diperiksa") : ?>
            <a class="btn btn-danger btn-sm" href="index.php?halaman=periksa&id=<?php echo $pengajuan['id'] ?>">Periksa</a>
            <?php elseif($pengajuan['status_pengajuan'] == "Disetujui" OR $pengajuan['status_pengajuan'] == "Invalid"): ?>
              <a class="btn btn-success btn-sm" href="index.php?halaman=detail_pengajuan&id=<?php echo $pengajuan['id'] ?>">Detail</a>
              <?php endif ?>
        </td>
      </tr>
    <?php
      }
    ?>
     </table> 

<h6 class="text-primary">Jumlah data <?php echo $jumlah_data ?></h6> 

     <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" <?php if($page > 1){ echo "href='index.php?halaman=pegawai&page=$mundur'";}?> aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><div class="page-link"><?php echo $page; ?> dari <?php echo $jumlah_halaman; ?></div></li>
    <li class="page-item">
      <a class="page-link" <?php if($page < $jumlah_halaman){ echo "href='index.php?halaman=pegawai&page=$maju'";}?> aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>  
      </div>
    </div>