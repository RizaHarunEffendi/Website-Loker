<?php 
	
	require '../koneksi.php';

	$query2 = mysqli_query($koneksi,"SELECT * FROM tb_pendidikan");
	$query3 = mysqli_query($koneksi,"SELECT * FROM tb_keahlian");

	$ambil = "SELECT * FROM tb_pekerja WHERE id_pekerja='$_GET[id]'";
	$sql = mysqli_query($koneksi,$ambil);
	$data = mysqli_fetch_assoc($sql);

 ?>
 <?php 
			
			If (isset($_POST['edit'])) 
		 	{
		 		$nama = $_POST['nama'];		
		 		$tempat_lahir = $_POST['tempat_lahir'];
		 		$tanggal_lahir = $_POST['tanggal_lahir'];
		 		$jenis_kelamin = $_POST['jk'];
		 		$no_telpon = $_POST['telpon'];
		 		$no_wa = $_POST['wa'];
		 		$agama = $_POST['agama'];
		 		$status_ktp = $_POST['status_ktp'];
		 		$pendidikan = $_POST['pendidikan'];
		 		$alamat_domisili = $_POST['domisili'];
		 		$alamat_ktp = $_POST['alamat_ktp'];
		 		$lamaran = $_POST['lamaran'];
		 		$status_kerja = $_POST['status_kerja'];
		 		
		 		
		 		$query = "UPDATE tb_pekerja SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', 
		 				tempat_lahir = '$tempat_lahir' , tanggal_lahir = '$tanggal_lahir' , 
		 				no_telpon = '$no_telpon' , no_wa = '$no_wa',agama = '$agama', status_ktp = '$status_ktp' , 
		 				pendidikan = '$pendidikan' , alamat_domisili = '$alamat_domisili' , 
		 				alamat_ktp = '$alamat_ktp' , lamaran = '$lamaran' ,status_kerja = '$status_kerja'
		 				WHERE id_pekerja = '$_GET[id]'";
		 		$save = mysqli_query($koneksi,$query);

		 		if ($save) {
		 			echo "<script>alert('Data Berhasil Diubah');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '?page=data_pelamar'}, 500);
				</script>";
				}else{
					echo "<script>alert('Data Gagal Diubah');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '?page=edit_pelamar'}, 500);
				</script>";
		 		}
		 	}

		?>

<div class="container-fluid">
	<h3><i class="fas fa-user-tie mr-2 mt-4"></i>Edit Data Pelamar</h3><hr><hr>
		<form method="post" enctype="multipart/form-data">
		<div class="form-row">
			<div class="col-md-4 mb-3">
				<div class="form-group">
			      <label>Nama</label>
			      <input type="text" class="form-control" name="nama" value="<?php echo$data['nama']; ?>" required>	
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<div class="form-group">
			      <label>Tempat Lahir</label>
			      <input type="text" class="form-control" name="tempat_lahir" value="<?php echo$data['tempat_lahir']; ?>" required>	
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<div class="form-group">
				    <label>Tanggal Lahir</label>
				    <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo$data
				    ['tanggal_lahir']; ?>" required>
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<div class="form-group">
				    <label>Jenis Kelamin</label>
					<select class="form-control" name="jk">
						<option value="<?php echo $data['jenis_kelamin']; ?>">
							<?php echo $data['jenis_kelamin']; ?>
						</option>
						<option value="">-Pilih Jenis Kelamin-</option>
						<option value="Laki-Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<div class="form-group">
				    <label for="validationDefault04">Nomer Telp</label>
				    <input type="text" class="form-control" id="validationDefault04" name="telpon"
				    value="<?php echo$data['no_telpon']; ?>" required>
				    <small id="validationDefault04" class="form-text text-muted">Masukan nomor yang bisa dihubungi</small>
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<div class="form-group">
				      <label>Nomer Telp WA</label>
				      <input type="text" class="form-control" name="wa" 
				      value="<?php echo$data['no_wa']; ?>" required>
				      <small class="form-text text-muted">Masukan nomor yang bisa dihubungi</small>
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<div class="form-group">
				      <label>Agama</label>
				      <select class="form-control" name="agama" required>
				      	<option value="<?php echo$data['agama']; ?>"><?php echo$data['agama']; ?></option>
				      	<option value="">-Pilih Agama-</option>
				      	<option value="Islam">Islam</option>
				      	<option value="Hindu">Hindu</option>
				      	<option value="Budha">Budha</option>
				      	<option value="Katolik">Katolik</option>
				      	<option value="Konghuchu">Konghuchu</option>
				      	<option value="Kristen Protestan">Kristen Protestan</option>
				      	<option value="Tidak Tahu">Tidak Tahu</option>
				      </select>
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<div class="form-group">
				      <label>Status Menikah</label>
				      <select class="form-control" name="status_ktp" required>
				      	<option value="<?php echo$data['status_ktp']; ?>"><?php echo$data['status_ktp']; ?></option>
				      	<option value="">-Status Menikah-</option>
				      	<option value="Single">Single</option>
				      	<option value="Nikah">Nikah</option>
				      	<option value="Cerai">Cerai</option>
				      	<option value="Duda">Duda</option>
				      	<option value="Janda">Janda</option>
				      </select>
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<div class="form-group">
				      <label>Pendidikan Terakhir</label>
				      <select class="form-control" name="pendidikan" required>
				      	<option value="<?php echo$data['pendidikan']; ?>"><?php echo$data['pendidikan']; ?></option>
				      	<option value="">-Pendidikan Terakhir-</option>
				      	<?php while ($pendidikan = mysqli_fetch_assoc($query2)) { ?>
	      				<option value="<?php echo $pendidikan['pendidikan']; ?>">
	      					<?php echo $pendidikan['pendidikan']; ?>
	      				</option>
	      				<?php } ?>
				      </select>
				</div>
			</div>
		  	<div class="col-md-6 mb-3">
		  		<div class="form-group">
			    	<label for="validationDefault08">Alamat Domisili</label>
			    	<textarea class="form-control" id="validationDefault08" rows="3" name="domisili" required><?php echo$data['alamat_domisili']; ?>
			    	</textarea>
			  	</div>
			</div>
			<div class="col-md-6 mb-3">
				<div class="form-group">
			    	<label for="validationDefault09">Alamat KTP</label>
			     	<textarea class="form-control" id="validationDefault09" rows="3" name="alamat_ktp" required><?php echo$data['alamat_ktp']; ?>
			     	</textarea>
			  	</div>
			</div>
			<div class="col-md-6 mb-3">
				<div class="form-group">
					<label>Pilihan Kerja</label>
					<select class="form-control" name="lamaran">
			  	  		<option value="<?php echo$data['lamaran']; ?>">
			  	  			<?php echo $data['lamaran']; ?>
			  	  		</option>
			  	  		<option value="">-Pilih Jenis Pekerjaan-</option>
			  	  		<?php while ($pekerjaan = mysqli_fetch_assoc($query3)) { ?>
	      				<option value="<?php echo $pekerjaan['jenis_keahlian']; ?>">
	      					<?php echo $pekerjaan['jenis_keahlian']; ?>
	      				</option>
	      				<?php } ?>
			  	  	</select>
				</div>
			</div>
		 	<div class="col-md-6 mb-3">
				<div class="form-group">
				      <label>Cara Tinggal</label>
				      <select class="form-control" name="status_kerja" required>
				      	<option value="<?php echo$data['status_kerja']; ?>">
				      		<?php echo$data['status_kerja']; ?>
				      	</option>
				      	<option value="">-Pilih Cara Tinggal-</option>
				      	<option value="Pulang Pergi">Pulang Pergi</option>
				      	<option value="Menginap">Menginap</option>
				      </select>
				</div>
			</div>
			<div class="col-sm-12 mb-3">
				<div class="form-group">
					<label>Foto Pekerja</label><br>
		    		<img src="../foto_pekerja/<?php echo$data['foto']; ?>" width="200">
		  		</div>
		 	 </div>
		 	 <div class="col-sm-12 mb-3">
				<div class="form-group">
				    <div class="form-check">
				      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
				      <label class="form-check-label" for="invalidCheck2">Dengan ini saya menyatakan bahwa saya mengisi data dengan sejujur-jujurnya</label>
				    </div>
				</div>
			</div>
			  <button class="btn btn-success mb-3" type="submit" name="edit">Simpan</button>
		</div>
		</form>
</div>