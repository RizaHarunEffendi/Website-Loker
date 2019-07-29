<div class="container-fluid">
	<h3><i class="far fa-question-circle mr-2 mt-4"></i>Tambah Data FAQ</h3><hr><hr>

	<?php 
			
		If (isset($_POST['save'])) 
		 	{
		 		$pertanyaan = $_POST['pertanyaan'];
		 		$jawaban = $_POST['jawaban'];
		 		
		 		$query = "INSERT INTO tb_faq(pertanyaan,jawaban)
		 				VALUES ('$pertanyaan','$jawaban')";
		 		$save = mysqli_query($koneksi,$query);

		 		if ($save) {
		 			echo "<script>alert('Data Berhasil Tersimpan');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '?page=data_faq'}, 500);
				</script>";
				}else{
					echo "<script>alert('Data Gagal Tersimpan');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '?page=tambah_faq'}, 500);
				</script>";
		 		}
		 	}

	?>

		<form method="post" enctype="multipart/form-data" action="">
			<div class="form-group">
				<label>Pertanyaan</label>
				<textarea class="form-control" name="pertanyaan" rows="5" required></textarea>
			</div>
			<div class="form-group">
				<label>Jawaban</label>
				<textarea class="form-control" name="jawaban" rows="5" required></textarea>
			</div>
			<button class="btn btn-success" name="save">Simpan</button>
		</form>
 
</div>