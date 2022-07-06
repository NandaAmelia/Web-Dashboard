<title>Pegawai</title>
    <div class="p-5"></div>
      <div class="bg-light bg-opacity-75 rounded-3 p-3">
      <div class="table-responsive m-3">
        <span class="fs-4 ps-2 text-primary"><strong>Pegawai</strong></span>
<hr>
<div class="container col-5 ps-5">
<a class="btn btn-primary btn-sm container mb-4" href="index.php?halaman=tambahpegawai"><b>Tambah Pegawai</b></a></div>
     <table class="table table-bordered table-striped table-sm text-center" style="font-size: .8rem;">
      <tr>
    <th>No</th>
    <th>Nama</th>
    <th>ID Pekerja</th>
    <th>Email</th>
    <th>Sejak</th>
    <th>Status</th>
    <th>Ubah Status</th>
      </tr>
      <?php
    $batas=10;
    $page=isset($_GET['page'])?(int)$_GET['page'] : 1 ;
    $halaman_awal= ($page >1) ? ($page*$batas) - $batas : 0;

    $mundur =$page-1;
    $maju = $page +1;

    $data = $koneksi->query("SELECT * FROM user WHERE level = 2");
    $jumlah_data = mysqli_num_rows($data);
    $jumlah_halaman = ceil($jumlah_data/$batas);

    $no=$halaman_awal+1;
    $ambil = $koneksi->query("SELECT * FROM user WHERE level = 2 ORDER BY id_akun LIMIT $halaman_awal,$batas");

    while($user = mysqli_fetch_assoc($ambil)){ ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $user['nama']; ?></td>
        <td><?php echo $user['id_pekerja']; ?></td>
        <td><?php echo $user['email']; ?></td>
        <td><?php echo $user['tanggal']; ?></td>
        <td>
          <?php if($user['status'] == "Aktif") : ?>
          <p class="text-primary"><b><?php echo $user['status']; ?></b></p>
        <?php else: ?>
          <p class="text-danger"><b><?php echo $user['status']; ?></b></p>
          <?php endif ?></td>
        <td>
          <?php if($user['status'] == "Aktif") : ?>
            <a class="btn btn-danger btn-sm" href="index.php?halaman=tidakaktif&id_pekerja=<?php echo $user['id_pekerja'] ?>">Tidak Aktif</a>
        <?php else: ?>
          <a class="btn btn-primary btn-sm" href="index.php?halaman=aktif&id_pekerja=<?php echo $user['id_pekerja'] ?>">Aktif</a>
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