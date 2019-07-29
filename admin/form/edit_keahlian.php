<div class="container-fluid">
 	<h3><i class="fas fa-briefcase mr-2 mt-4"></i>Edit Data Keahlian</h3><hr><hr>

 	<?php 
			
			If (isset($_POST['edit'])) 
		 	{
		 		$keahlian = $_POST['keahlian'];
		 		
		 		
		 		$query = "UPDATE tb_keahlian SET jenis_keahlian = '$keahlian' 
		 				  WHERE id_keahlian = '$_GET[id]'";
		 		$save = mysqli_query($koneksi,$query);

		 		if ($save) {
		 			echo "<script>alert('Data Berhasil Diubah');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '?page=data_keahlian'}, 500);
				</script>";
				}else{
					echo "<script>alert('Data Gagal Diubah');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '?page=edit_keahlian'}, 500);
				</script>";
		 		}
		 	}

		?>

		<?php 
		
			$ambil = "SELECT * FROM tb_keahlian WHERE id_keahlian='$_GET[id]'";
			$edit = mysqli_query($koneksi,$ambil);
			$data = mysqli_fetch_assoc($edit);


 		?>	

	<form method="post" enctype="multipart/form-data" action="">
			<div class="form-group">
				<label>Keahlian</label>
				<input type="text" class="form-control" name="keahlian" value="<?php echo $data
				['jenis_keahlian']; ?>" required>
			</div>
			<button class="btn btn-success" name="edit">Simpan</button>
	</form>

</div>