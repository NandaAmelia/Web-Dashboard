<?php
  session_start();

if (isset($_SESSION['admin'])){
    header("location:../admin/index.php");
  }
  elseif (!isset($_SESSION['pekerja']) || empty($_SESSION['pekerja'])) {
    echo "<script>alert('Silakan Login terlebih dahulu!');</script>";
        echo "<script>location='../index.php';</script>";
  }
  include 'koneksi.php';
include 'sc.php';
  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Akun Pekerja</title>

</head>
<style data-jss="" data-meta="MuiSvgIcon">
.MuiSvgIcon-root {
  fill: currentColor;
  width: 1em;
  height: 1em;
  display: inline-block;
  font-size: 1.5rem;
  transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
  flex-shrink: 0;
  user-select: none;
}
.MuiSvgIcon-colorPrimary {
  color: #3f51b5;
}
.MuiSvgIcon-colorSecondary {
  color: #f50057;
}
.MuiSvgIcon-colorAction {
  color: rgba(0, 0, 0, 0.54);
}
.MuiSvgIcon-colorError {
  color: #f44336;
}
.MuiSvgIcon-colorDisabled {
  color: rgba(0, 0, 0, 0.26);
}
.MuiSvgIcon-fontSizeInherit {
  font-size: inherit;
}
.MuiSvgIcon-fontSizeSmall {
  font-size: 1.25rem;
}
.MuiSvgIcon-fontSizeLarge {
  font-size: 2.1875rem;
}
</style>
<style type="text/css">
  .jss12 {
  min-width: 2.7555rem;
}
.jss12 svg {
  fill: #229BD8;
}
.jss13 svg {
  fill: #ffffff;
}
</style>
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
        <a href="akun.php" class="nav-link link-danger">
          <svg class="bi me-2" width="16" height="16"><img src="../media/img/file-text-fill.svg"/></svg>
         Profil
        </a>
      </li>
      <li>
        <a href="riwayat.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><img src="../media/img/file-text-fill.svg"/></svg>
          Riwayat
        </a>
      </li>
    </ul>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li>
        <a href="logout.php" class="nav-link link-danger">
          <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.7924 4.71554C14.6109 4.56537 14.3904 4.46999 14.1567 4.44057C13.923 4.41114 13.6857 4.44889 13.4727 4.5494C13.2597 4.6499 13.0796 4.809 12.9537 5.00808C12.8278 5.20716 12.7612 5.43798 12.7617 5.67354V5.68526C12.7648 5.86778 12.8066 6.04756 12.8844 6.21271C12.9621 6.37786 13.0741 6.52461 13.2128 6.64326C14.15 7.49361 14.8077 8.60774 15.0996 9.83907C15.3915 11.0704 15.3038 12.3612 14.848 13.5418C14.3922 14.7223 13.5898 15.7372 12.5462 16.453C11.5026 17.1687 10.2668 17.5518 9.00139 17.5518C7.73594 17.5518 6.50013 17.1687 5.45656 16.453C4.41298 15.7372 3.61052 14.7223 3.15476 13.5418C2.699 12.3612 2.61128 11.0704 2.90315 9.83907C3.19502 8.60774 3.85281 7.49361 4.78996 6.64326C4.92862 6.52456 5.04053 6.37779 5.11829 6.21265C5.19605 6.04752 5.2379 5.86776 5.24107 5.68526C5.24087 5.52175 5.20815 5.35992 5.14481 5.20917C5.08148 5.05843 4.9888 4.92179 4.87216 4.8072C4.75553 4.69261 4.61727 4.60236 4.46543 4.5417C4.31358 4.48105 4.1512 4.45119 3.98771 4.45388C3.67322 4.45181 3.36925 4.56704 3.13517 4.77707C2.07096 5.72449 1.25601 6.91903 0.762074 8.2555C0.268137 9.59198 0.110365 11.0294 0.302651 12.4412C0.623252 14.63 1.75798 16.6171 3.48008 18.0056C5.20217 19.3941 7.38479 20.0816 9.59176 19.9307C11.7987 19.7799 13.8675 18.8017 15.3846 17.1919C16.9018 15.582 17.7555 13.4589 17.7753 11.2468C17.7757 10.0079 17.5095 8.78342 16.9948 7.65648C16.4801 6.52954 15.729 5.52653 14.7924 4.71554ZM9.00138 11.2468C9.33232 11.2471 9.64992 11.1165 9.88479 10.8833C10.1197 10.6502 10.2527 10.3335 10.2548 10.0026V1.29362C10.252 0.963034 10.1187 0.64694 9.88395 0.414164C9.6492 0.181388 9.33199 0.0507812 9.00139 0.0507812C8.67079 0.0507812 8.35358 0.181388 8.11882 0.414164C7.88406 0.64694 7.75077 0.963034 7.74797 1.29362V10.0026C7.75011 10.3335 7.88314 10.6502 8.118 10.8833C8.35286 11.1164 8.67046 11.2471 9.00138 11.2468Z"></path></svg>  &nbsp; &nbsp;
          Logout
        </a>
      </li>
    </ul>
</div>
</div>
      <div class="col-md-8 themed-grid-col">
        <div class=" bg-light p-3 rounded-3" style="width: 1100px;">
          <div class="table-responsive m-3">
<span class="fs-4 ps-2 text-danger"><strong>Profile</strong></span>
            <hr>
<div class="p-3">
           <table class="table table-border table-striped col-4">
            <tr>
            <th>Id Pekerja</th>
            <td>:</td>
              <td><?php echo $_SESSION['pekerja']['id_pekerja']; ?></td>
          </tr>
          <tr>
            <th>Nama Lengkap</th>
            <td>:</td>
            <td><?php echo $_SESSION['pekerja']['nama']; ?></td>
            </tr>
            <tr>
              <th>Email</th>
              <td>:</td>
              <td><?php echo $_SESSION['pekerja']['email']; ?></td>
            </tr>
            <tr>
              <th>Status</th>
              <td>:</td>
              <td><?php echo $_SESSION['pekerja']['status']; ?></td>
            </tr>
            <tr>
              <th>Sejak</th>
              <td>:</td>
              <td><?php echo $_SESSION['pekerja']['tanggal']; ?></td>
            </tr>
          </table>
        </div>

</div>
        </div>
        </div>
      </div>
  </div>
  <?php
include 'footer.php'
?>
</body>
