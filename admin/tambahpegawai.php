<script type="text/javascript">
		 $(document).ready(function(){
		 	$('#daftar').validate({
		 		rules:{
		 			nama:{
		 				minlength : 3,
		 				maxlength : 100
		 			},
		 			id_pekerja:{
		 				minlength : 9,
		 				maxlength : 16
		 			},
		 			email:{
		 				email : true
		 			},
		 			psw:{
		 				minlength: 6
		 			},
		 			psw2:{
		 				equalTo: "#passw"
		 			},
		 		},
		 		messages:{
		 			nama:{
		 				required : "<font color = 'red'>Nama tidak boleh kosong!</font>",
         				minlength : "<font color = 'red'>Nama minimal 3 karakter.</font>",
          				maxlength : "<font color = 'red'>Nama maksimal 100 karakter.</font>"
		 			},
		 			id_pekerja:{
		 				required : "<font color = 'red'>ID Pekerja tidak boleh kosong!</font>",
         				minlength : "<font color = 'red'>Id Pekerja minimal 9 digit.</font>",
          				maxlength : "<font color = 'red'>ID Pekerja maksimal 16 digit.<font>"
		 			},
		 			email:{
		 				required: "<font color = 'red'>Email tidak boleh kosong!</font>",
		 				email: "<font color='red'>Format email salah!</font>"
		 			},
		 			psw:{
		 				required : "<font color = 'red'>Password tidak boleh kosong!</font>",
         				minlength : "<font color = 'red'>Password minimal 6 karakter.</font>"
		 			},
		 			psw2: {
		 				required : "<font color = 'red'>Konfirmasi Password harus diisi!</font>",
          				equalTo : "<font color = 'red'>Password tidak sama!</font>"
		 			},
		 		}
		 	});
		 });
	</script>
	<title>Tambah Pegawai</title>
<div class="bg-light container col-5 p-5 mt-5 rounded-3 bg-opacity-75">
   <div align="center pt-5">
		<h5 class="pt-3"><b>Daftar Pegawai</b></h5>
   </div>
	<hr class="my-2">
	<br>
	<form method="post" id="daftar">
		<table class="table table-borderless">
			<tr class="m-3">
				<h6 class="pt-3">Nama Lengkap</h6>
      	<input class="form-control form-control-md mb-3" type="text" name="nama" placeholder="Masukan Nama" aria-label=".form-control-lg example" required>
      </tr>
			<tr>
				<h6>Email</h6>
      	<input class="form-control form-control-md mb-3" type="email" name="email" placeholder="Masukan Email" aria-label=".form-control-lg example" required>
			</tr>
			<tr>
				<h6>ID Pekerja</h6>
      	<input class="form-control form-control-md mb-3" type="text" name="id_pekerja" placeholder="Masukan ID Pekerja" aria-label=".form-control-lg example" required>
			</tr>
			<tr>
				<h6>Password</h6>
				<input class="form-control form-control-md mb-3" id="passw" type="password" name="psw" placeholder="Masukan Password " aria-label=".form-control-lg example" required>
			</tr>
			<tr>
				<h6>Konfirmasi Password</h6>
		<input class="form-control form-control-md mb-3" type="password" name="psw2" placeholder="Masukan Konfimasi Password " aria-label=".form-control-lg example" required>
			</tr>
		</table>
          <button class="btn btn-primary"  type="submit" name="tambah">Tambah</button>
<?php
	if (isset($_POST['tambah'])) {
  		$email = $_POST['email'];
  		$nama = $_POST['nama'];
  		$id_pekerja = $_POST['id_pekerja'];
  		$psw = $_POST['psw'];

		$ambil=$koneksi->query("SELECT email, id_pekerja FROM user WHERE email='$email' OR id_pekerja='$id_pekerja'");
		$akunyangada = $ambil->num_rows;

		    if ($akunyangada==1) {
				//      $akun = $ambil->fetch_assoc();
				echo "<script>alert('Registrasi Akun Gagal!');</script>";
				echo "<div class='alert alert-danger'>ID Pekerja atau Email sudah terdaftar. Silakan daftar ulang.</div>";
			}
		
			else {
		 	
			$pw = password_hash($psw, PASSWORD_DEFAULT);

			$koneksi->query("INSERT INTO user (level,nama, email ,id_pekerja, password) 
						VALUES('$level',$nama', '$email' ,'$id_pekerja', '$pw')");

			echo "<script>alert('Registrasi Akun Berhasil!');</script>";
			echo "<meta http-equiv='refresh'content='1;url=index.php?halaman=admin'>";
			}
	}
?>
	</form>