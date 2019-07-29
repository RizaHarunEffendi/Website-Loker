<div class="container-fluid">
 	<h3><i class="fas fa-cogs mr-2 mt-4"></i>Ubah Gambar Profil</h3><hr><hr>
 	<?php 

 		require '../koneksi.php';

		$query = mysqli_query($koneksi,"SELECT * FROM tb_profil LIMIT 1");
		$data = mysqli_fetch_assoc($query);
 	 ?>

 	<?php 
			
		If (isset($_POST['save'])) 
		 	{
		 		
		 		$nama_foto = $_FILES['gambar_profil']['name'];
				$lokasi = $_FILES['gambar_profil']['tmp_name'];
				move_uploaded_file($lokasi, "images/".$nama_foto);
		 		
		 		
		 		$query = "UPDATE tb_profil SET gambar_profil = '$nama_foto'";
		 		$save = mysqli_query($koneksi,$query);

		 		if ($save) {
		 			echo "<script>alert('Data Berhasil Tersimpan');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '?page=edit_profil'}, 500);
				</script>";
				}else{
					echo "<script>alert('Data Gagal Tersimpan');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '?page=edit_profil'}, 500);
				</script>";
		 		}
		 	}

	?>
 	
 	 <form method="post" enctype="multipart/form-data">
 	 	<div class="col-sm-12 mb-3">
				<div class="form-group">
					<label>Foto Profil</label><br>
		    		<img src="images/<?php echo$data['gambar_profil']; ?>" width="200">
		  		</div>
		</div>
		<div class="col-sm-12 mb-3">
				<div class="form-group">
					<label>Edit Gambar Profil</label><br>
		    		<input type="file" name="gambar_profil">

		  		</div>
		</div>
	
		<button class="btn btn-success" name="save">Edit Profil</button>
 	 	
 	 </form>

 </div>