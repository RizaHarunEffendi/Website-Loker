<div class="container-fluid">
	<h3><i class="fas fa-ad mr-2 mt-4"></i>Tambah Data Lowongan</h3><hr><hr>

	<?php 
		$pendidikan = mysqli_query($koneksi,"SELECT * FROM tb_pendidikan");
	 ?>

	 <?php 
			
		If (isset($_POST['save'])) 
		 	{
		 		$posisi = $_POST['posisi'];		
		 		$perusahaan = $_POST['perusahaan'];
		 		$lokasi = $_POST['lokasi'];
		 		$kontak = $_POST['kontak'];
		 		$pendidikan = $_POST['pendidikan'];
		 		$keahlian = $_POST['keahlian'];
		 		$deskripsi = $_POST['deskripsi'];
		 		$syarat = $_POST['syarat'];
		 		$status = $_POST['status'];
		 		
		 		$query = "INSERT INTO tb_lowongan(posisi,perusahaan,lokasi,kontak,pendidikan,keahlian,
		 				deskripsi,syarat,status)
		 				VALUES ('$posisi','$perusahaan','$lokasi','$kontak','$pendidikan',
		 				'$keahlian','$deskripsi','$syarat','$status')";
		 		$save = mysqli_query($koneksi,$query);

		 		if ($save) {
		 			echo "<script>alert('Data Berhasil Tersimpan');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '?page=data_lowongan'}, 500);
				</script>";
				}else{
					echo "<script>alert('Data Gagal Tersimpan');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '?page=tambah_lowongan'}, 500);
				</script>";
		 		}
		 	}

	?>

	<form method="post" enctype="multipart/form-data">
		  <div class="form-row">
		    <div class="col-md-6 mb-3">
		      <label for="validationDefault01">Nama Posisi</label>
		      <input type="text" class="form-control" id="validationDefault01" name="posisi" required>
		    </div>
		    <div class="col-md-6 mb-3">
		      <label for="validationDefault02">Nama Perusahaan</label>
		      <input type="text" class="form-control" id="validationDefault02" name="perusahaan" required>
		    </div>
		    <div class="col-md-6 mb-3">
		      <label for="validationDefault03">Lokasi</label>
		      <input type="text" class="form-control" id="validationDefault03" name="lokasi" required>
		    </div>
		    <div class="col-md-6 mb-3">
		      <label for="validationDefault04">Contact</label>
		      <input type="text" class="form-control" id="validationDefault04" name="kontak" required>
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="col-md-6 mb-3">
		      <label>Pendidikan Minimal</label>
		      <select class="form-control" name="pendidikan" required>
		      	<option value="">Pilih Pendidikan</option>
		      	<?php while ($data = mysqli_fetch_assoc($pendidikan)) { ?>
		      	<option value="<?php echo $data['pendidikan']; ?>"><?php echo $data['pendidikan']; ?></option>
		      <?php } ?>
		      </select>
		    </div>
		    <div class="col-md-6 mb-3">
		      <label for="validationDefault06">Keahlian</label>
		      <input type="text" class="form-control" id="validationDefault06" name="keahlian" required>
		    </div>
		  </div>
		  <div class="form-group">
	    	 <label for="validationDefault07">Deskripsi</label>
	    	 <textarea class="form-control" id="validationDefault07" rows="5"  name="deskripsi" required></textarea>
	  	  </div>
	  	  <div class="form-group">
	    	 <label for="validationDefault08">Persyaratan</label>
	    	 <textarea class="form-control" id="validationDefault08" rows="5" name="syarat" required></textarea>
	  	  </div>
	  	  <div class="form-group">
	  	  	<label>Status</label>
	    	<select class="form-control" name="status" required>
	    		<option value="">Pilih Status</option>
	    		<option value="aktif">aktif</option>
	    		<option value="tidak_aktif">tidak_aktif</option>
	    	</select>
	  	  </div>
		  <div class="form-group">
		    <div class="form-check">
		      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
		      <label class="form-check-label" for="invalidCheck2">
		       Dengan ini saya menyatakan bahwa saya mengisi data dengan sejujur-jujurnya
		      </label>
		    </div>
		  </div>
	  		<button class="btn btn-success mb-3" type="submit" name="save">Simpan</button>
		</form>
</div>