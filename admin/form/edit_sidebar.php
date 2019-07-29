<div class="container-fluid">
 	<h3><i class="fas fa-cogs mr-2 mt-4"></i>Ubah Gambar Slide</h3><hr><hr>
 	<?php 

 		require '../koneksi.php';

		$query = mysqli_query($koneksi,"SELECT * FROM tb_profil LIMIT 1");
		$data = mysqli_fetch_assoc($query);
 	 ?>

 	<?php 
			
		If (isset($_POST['save'])) 
		 	{
		 		
		 		$nama_foto = $_FILES['sidebar1']['sidebar2']['sidebar3']['name'];
				$lokasi = $_FILES['sidebar1']['sidebar2']['sidebar3']['tmp_name'];
				move_uploaded_file($lokasi, "images/".$nama_foto);
		 		
		 		
		 		$query = "UPDATE tb_profil SET sidebar1 = '$nama_foto',sidebar2 = '$nama_foto',
		 		sidebar3 = '$nama_foto'";
		 		$save = mysqli_query($koneksi,$query);

		 		if ($save) {
		 			echo "<script>alert('Data Berhasil Tersimpan');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '?page=edit_sidebar'}, 500);
				</script>";
				}else{
					echo "<script>alert('Data Gagal Tersimpan');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '?page=edit_sidebar'}, 500);
				</script>";
		 		}
		 	}

	?>
 	
 	 <form method="post" enctype="multipart/form-data">
 	 	<div class="col-sm-12 mb-3">
				<div class="form-group">
					<label>Gambar Slide 1</label><br>
		    		<img src="images/<?php echo$data['sidebar1']; ?>" width="500">
		  		</div>
		</div>
		<div class="col-sm-12 mb-3">
				<div class="form-group">
					<label>Edit Gambar Slide 1</label><br>
		    		<input type="file" name="sidebar1">
		  		</div>
		</div>
		<div class="col-sm-12 mb-3">
				<div class="form-group">
					<label>Gambar Slide 2</label><br>
		    		<img src="images/<?php echo$data['sidebar2']; ?>" width="500">
		  		</div>
		</div>
		<div class="col-sm-12 mb-3">
				<div class="form-group">
					<label>Edit Gambar Slide 2</label><br>
		    		<input type="file" name="sidebar2">

		  		</div>
		</div>
		<div class="col-sm-12 mb-3">
				<div class="form-group">
					<label>Gambar Slide 3</label><br>
		    		<img src="images/<?php echo$data['sidebar3']; ?>" width="500">
		  		</div>
		</div>
		<div class="col-sm-12 mb-3">
				<div class="form-group">
					<label>Edit Gambar Slide 3</label><br>
		    		<input type="file" name="sidebar3">

		  		</div>
		</div>
	
		<button class="btn btn-success" name="save">Edit Profil</button>
 	 	
 	 </form>

 </div>