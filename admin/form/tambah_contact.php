<div class="container-fluid">
	<h3><i class="far fa-id-card mr-2 mt-4"></i>Tambah Data Contact Us</h3><hr><hr>

	<?php 
			
		If (isset($_POST['save'])) 
		 	{
		 		$lokasi = $_POST['lokasi'];
		 		$email = $_POST['email'];
		 		$telpon = $_POST['telpon'];
		 		$profil = $_POST['profil'];
		 		$visi_misi = $_POST['visi_misi'];
		 		
		 		$query = "INSERT INTO tb_contact(lokasi,email,telfon,profil,visi_misi)
		 				VALUES ('$lokasi','$email','$telpon','$profil','$visi_misi')";
		 		$save = mysqli_query($koneksi,$query);

		 		if ($save) {
		 			echo "<script>alert('Data Berhasil Tersimpan');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '?page=data_contact'}, 500);
				</script>";
				}else{
					echo "<script>alert('Data Gagal Tersimpan');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '?page=tambah_contact'}, 500);
				</script>";
		 		}
		 	}

	?>
		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Lokasi</label>
				<input type="text" class="form-control" name="lokasi" required>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" required>
			</div>
			<div class="form-group">
				<label>No Telpon</label>
				<input type="text" class="form-control" name="telpon" required>
			</div>
			<div class="form-group">
				<label>Profil</label>
				<textarea class="form-control" name="profil" rows="5" required></textarea>
			</div>
			<div class="form-group">
				<label>Visi/Misi</label>
				<textarea class="form-control" name="visi_misi" rows="5" required></textarea>
			</div>
			<button class="btn btn-success mb-3" name="save">Simpan</button>
		</form>
</div>