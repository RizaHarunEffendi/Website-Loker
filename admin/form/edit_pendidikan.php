<div class="container-fluid">
	<h3><i class="fas fa-graduation-cap mr-2 mt-4"></i>Edit Data Pendidikan</h3><hr><hr>

	<?php 
			
			If (isset($_POST['edit'])) 
		 	{
		 		$pendidikan = $_POST['pendidikan'];
		 		
		 		
		 		$query = "UPDATE tb_pendidikan SET pendidikan = '$pendidikan' 
		 				  WHERE id_pendidikan = '$_GET[id]'";
		 		$save = mysqli_query($koneksi,$query);

		 		if ($save) {
		 			echo "<script>alert('Data Berhasil Diubah');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '?page=data_pendidikan'}, 500);
				</script>";
				}else{
					echo "<script>alert('Data Gagal Diubah');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '?page=edit_pendidikan'}, 500);
				</script>";
		 		}
		 	}

		?>

		<?php 
		
			$ambil = "SELECT * FROM tb_pendidikan WHERE id_pendidikan='$_GET[id]'";
			$edit = mysqli_query($koneksi,$ambil);
			$data = mysqli_fetch_assoc($edit);


 		?>	

	<form method="post" enctype="multipart/form-data" action="">
			<div class="form-group">
				<label>Pendidikan</label>
				<input type="text" class="form-control" name="pendidikan" value="<?php echo $data['pendidikan']; ?>" required>
			</div>
			<button class="btn btn-success" name="edit">Simpan</button>
	</form>

</div>