<?php
session_start();
if (isset($_SESSION['admin'])){
    header("location:admin/index.php");
  }
  elseif (isset($_SESSION['pekerja'])) {
    header("location:pegawai/index.php");
  }

  include 'koneksi.php';
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Telkom Indonesia</title>
	<meta charset="utf-8">
<link rel="stylesheet" href="media/css/telkomstyle.css">
<link rel="stylesheet" href="media/faicon/css/all.css">
<link rel="stylesheet" href="media/css/bootstrap.css">
<script type="text/javascript" src="media/js/jquery.js"></script>
<script type="text/javascript" src="media/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="media/js/bootstrap.js"></script>
</head>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
<?php
include 'koneksi.php';
if (isset($_POST['masuk']))
{
  $user_login=$_POST['inputUser'];
  $pass_login=$_POST['inputPassword'];


  $jalankanquerycekuser=$koneksi->query("SELECT * FROM user WHERE id_pekerja = '$user_login'");
  $hitungcocok = $jalankanquerycekuser->num_rows;
  $ambildata = $jalankanquerycekuser->fetch_assoc();

if(!empty($user_login) && (!empty($pass_login))){
    if($hitungcocok==0){
      echo "<script>alert('Id Pekerja tidak ditemukan');</script>";
    } elseif($hitungcocok==1){

      if ($ambildata['level']==1) {
        if(password_verify($pass_login, $ambildata['password'])){
          $_SESSION['admin'] = $ambildata;
          echo "<script>alert('Login Berhasil! Selamat bekerja Admin');</script>";
           echo "<script>location='admin/index.php'</script>";
        }

        else{
          echo "<script>alert('Login GAGAL, ID Pekerja atau Password salah!');</script>";
        }
      }
      elseif($ambildata['level']==2){
        if (password_verify($pass_login, $ambildata['password'])) {
            $_SESSION['pekerja'] = $ambildata;

            echo "<script>alert('Login Berhasil!');</script>";
            echo "<script>location='pegawai/index.php'</script>";
        } else{
            echo "<script>alert('Login Gagal, ID PEKERJA atau Password salah!');</script>"; 
        }
      }
  }
}
elseif (empty($user_login) || empty($pass_login)){
    echo "<script>alert('Id Pekerja atau Password tidak boleh kosong!')</script>";
    }
}
?>
<body class="text-center bg-danger">
    <style type="text/css">
    	html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-image: url("media/img/bg-red.jpg");
}

.form-signin {
  width: 100%;
  max-width: 400px;
  padding: 15px;
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: 5px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

    </style>
<main class="form-signin">
	<div class="p-4 rounded-3 bg-light">
  <form class="bg-light m-4" method="post">
    <img class="mb-4" src="media/img/logo_telkom.png" alt="" width="300">
    <h5 class="mb-3 fw-normal"><b>Telkom Login Panel</b></h5>
<hr>
    <div class="form-floating mb-2">
      <input type="text" class="form-control" id="floatingInput" name="inputUser" placeholder="name@example.com" required>
      <label for="floatingInput">Id Pekerja</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" class="form-control" id="floatingPassword" name="inputPassword" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>
<div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn btn-danger mb-3" type="submit" name="masuk">Masuk</button>
    <p class="mt-5 mb-3 text-muted">&copy; Telkom Regional 1</p>
  </form>
</div>
</main>


    
  </body>
</html>