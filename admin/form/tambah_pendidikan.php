<div class="container-fluid">
	<h3><i class="fas fa-graduation-cap mr-2 mt-4"></i>Tambah Data Pendidikan</h3><hr><hr>

	<?php 
			
		If (isset($_POST['save'])) 
		 	{
		 		$pendidikan = $_POST['pendidikan'];
		 		
		 		
		 		$query = "INSERT INTO tb_pendidikan(pendidikan)
		 				VALUES ('$pendidikan')";
		 		$save = mysqli_query($koneksi,$query);

		 		if ($save) {
		 			echo "<script>alert('Data Berhasil Tersimpan');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '?page=data_pendidikan'}, 500);
				</script>";
				}else{
					echo "<script>alert('Data Gagal Tersimpan');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '?page=tambah_pendidikan'}, 500);
				</script>";
		 		}
		 	}

	?>


	<form method="post" enctype="multipart/form-data" action="">
			<div class="form-group">
				<label>Pendidikan</label>
				<input type="text" class="form-control" name="pendidikan" required>
			</div>
			<button class="btn btn-success" name="save">Simpan</button>
	</form>

</div>