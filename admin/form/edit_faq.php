<div class="container-fluid">
	<h3><i class="far fa-question-circle mr-2 mt-4"></i>Edit Data FAQ</h3><hr><hr>

		<?php 
			
			If (isset($_POST['edit'])) 
		 	{
		 		$pertanyaan = $_POST['pertanyaan'];
		 		$jawaban = $_POST['jawaban'];
		 		
		 		$query = "UPDATE tb_faq SET pertanyaan = '$pertanyaan', jawaban = '$jawaban' 
		 				  WHERE id_faq = '$_GET[id]'";
		 		$save = mysqli_query($koneksi,$query);

		 		if ($save) {
		 			echo "<script>alert('Data Berhasil Diubah');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '?page=data_faq'}, 500);
				</script>";
				}else{
					echo "<script>alert('Data Gagal Diubah');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '?page=edit_faq'}, 500);
				</script>";
		 		}
		 	}

		?>

		<?php 
		
			$ambil = "SELECT * FROM tb_faq WHERE id_faq='$_GET[id]'";
			$edit = mysqli_query($koneksi,$ambil);
			$data = mysqli_fetch_assoc($edit);


 		?>	

		<form method="post" enctype="multipart/form-data" action="">
			<div class="form-group">
				<label>Pertanyaan</label>
				<textarea class="form-control" name="pertanyaan" rows="5" required><?php  echo $data['pertanyaan']; ?></textarea>
			</div>
			<div class="form-group">
				<label>Jawaban</label>
				<textarea class="form-control" name="jawaban" rows="5" required><?php echo $data['jawaban']; ?>
				</textarea>
			</div>
			<button class="btn btn-success" name="edit">Simpan</button>
		</form>
</div>