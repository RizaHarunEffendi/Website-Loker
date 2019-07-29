<div class="container-fluid">
 	<h3><i class="fas fa-briefcase mr-2 mt-4"></i>Tambah Data Keahlian</h3><hr><hr>

 	<?php 
			
		If (isset($_POST['save'])) 
		 	{
		 		$keahlian = $_POST['keahlian'];
		 		
		 		
		 		$query = "INSERT INTO tb_keahlian(jenis_keahlian)
		 				VALUES ('$keahlian')";
		 		$save = mysqli_query($koneksi,$query);

		 		if ($save) {
		 			echo "<script>alert('Data Berhasil Tersimpan');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '?page=data_keahlian'}, 500);
				</script>";
				}else{
					echo "<script>alert('Data Gagal Tersimpan');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '?page=tambah_keahlian'}, 500);
				</script>";
		 		}
		 	}

	?>


	<form method="post" enctype="multipart/form-data" action="">
			<div class="form-group">
				<label>Keahlian</label>
				<input type="text" class="form-control" name="keahlian" required>
			</div>
			<button class="btn btn-success" name="save">Simpan</button>
	</form>

</div>