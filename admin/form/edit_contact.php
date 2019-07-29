<div class="container-fluid">
	<h3><i class="far fa-id-card mr-2 mt-4"></i>Edit Data Contact Us</h3><hr><hr>

	<?php 
		
			$ambil = "SELECT * FROM tb_contact WHERE id_contact='$_GET[id]'";
			$edit = mysqli_query($koneksi,$ambil);
			$data = mysqli_fetch_assoc($edit);
 	?>	
 	<?php 
			
			If (isset($_POST['edit'])) 
		 	{
		 		$lokasi = $_POST['lokasi'];
		 		$email = $_POST['email'];
		 		$telpon = $_POST['telpon'];
		 		$profil = $_POST['profil'];
		 		$visi_misi = $_POST['visi_misi'];
		 		
		 		$query = "UPDATE tb_contact SET lokasi = '$lokasi', email = '$email', telfon = '$telpon' ,
		 				  profil = '$profil' , visi_misi = '$visi_misi'
		 				  WHERE id_contact = '$_GET[id]'";
		 		$save = mysqli_query($koneksi,$query);

		 		if ($save) {
		 			echo "<script>alert('Data Berhasil Diubah');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '?page=data_contact'}, 500);
				</script>";
				}else{
					echo "<script>alert('Data Gagal Diubah');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '?page=edit_contact'}, 500);
				</script>";
		 		}
		 	}

		?>

		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Lokasi</label>
				<input type="text" class="form-control" name="lokasi" value="<?php echo $data['lokasi']; ?>">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" value="<?php echo $data['email']; ?>">
			</div>
			<div class="form-group">
				<label>No Telpon</label>
				<input type="text" class="form-control" name="telpon" value="<?php echo $data['telfon']; ?>">
			</div>
			<div class="form-group">
				<label>Profil</label>
				<textarea class="form-control" name="profil" rows="5"><?php echo $data['profil']; ?>"
				</textarea>
			</div>
			<div class="form-group">
				<label>Visi/Misi</label>
				<textarea class="form-control" name="visi_misi" rows="5"><?php echo $data['visi_misi']; ?>"
				</textarea>
			</div>
			<button class="btn btn-success mb-3" name="edit">Simpan</button>
		</form>
</div>