<?php 
	require './koneksi.php';

	$query = mysqli_query($koneksi,"SELECT * FROM tb_keahlian");
	$query2 = mysqli_query($koneksi,"SELECT * FROM tb_pendidikan");

 ?>
 <div class="cari_kerja">
	<div class="container mt-3 mb-2">
		<h2>Isi Formulir Berikut</h2><hr>
			<form method="post" enctype="multipart/form-data" action="fungsi/tambah_cari_kerja.php">
			<div class="form-row">
				<div class="col-md-4 mb-3">
					<div class="form-group">
				      <label>Nama</label>
				      <input type="text" class="form-control" name="nama" required>	
					</div>
				</div>
				<div class="col-md-4 mb-3">
					<div class="form-group">
				      <label>Tempat Lahir</label>
				      <input type="text" class="form-control" name="tempat_lahir" required>	
					</div>
				</div>
				<div class="col-md-4 mb-3">
					<div class="form-group">
					    <label>Tanggal Lahir</label>
					    <input type="date" class="form-control" name="tanggal_lahir" required>
					</div>
				</div>
				<div class="col-md-4 mb-3">
					<div class="form-group">
					    <label>Jenis Kelamin</label>
					    <select class="form-control" name="jk" required>
					    	<option value="">Pilih Jenis Kelamin</option>
					     	<option value="Laki-Laki">Laki-Laki</option>
					      	<option value="Perempuan">Perempuan</option>
					    </select>
					</div>
				</div>
				<div class="col-md-4 mb-3">
					<div class="form-group">
					    <label for="validationDefault04">Nomer Telp</label>
					    <input type="text" class="form-control" id="validationDefault04" name="telpon" required>
					    <small id="validationDefault04" class="form-text text-muted">Masukan nomor yang bisa dihubungi</small>
					</div>
				</div>
				<div class="col-md-4 mb-3">
					<div class="form-group">
					      <label>Nomer Telp WA</label>
					      <input type="text" class="form-control" name="wa" required>
					      <small class="form-text text-muted">Masukan nomor yang bisa dihubungi</small>
					</div>
				</div>
				<div class="col-md-4 mb-3">
					<div class="form-group">
					      <label>Agama</label>
					      <select class="form-control" name="agama" required>
					      	<option value="">Pilih Agama</option>
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
					      <label>Status</label>
					      <select class="form-control" name="status_ktp" required>
					      	<option value="">Status Menikah</option>
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
					      		<option value="">Pendidikan Terakhir</option>
					      	<?php while ($data = mysqli_fetch_assoc($query2)) { ?>
		      					<option value="<?php echo $data['pendidikan']; ?>">
		      						<?php echo $data['pendidikan']; ?></option>
		      				<?php } ?>
					      </select>
					</div>
				</div>
			  	<div class="col-md-6 mb-3">
			  		<div class="form-group">
				    	<label for="validationDefault08">Alamat Domisili</label>
				    	<textarea class="form-control" id="validationDefault08" rows="3" name="domisili" required></textarea>
				  	</div>
				</div>
				<div class="col-md-6 mb-3">
					<div class="form-group">
				    	<label for="validationDefault09">Alamat KTP</label>
				     	<textarea class="form-control" id="validationDefault09" rows="3" name="alamat_ktp" 
				     	required></textarea>
				  	</div>
				</div>
				<div class="col-sm-12 mb-3">
					<div class="form-group">
				  	  	<div class="card text-white bg-primary">
				  	  		<div class="card-header">Melamar Sebagai :</div>
				  	  		<div class="form-group">
					  	  		<div class="card-body">
					  	  		<?php while ($data = mysqli_fetch_array($query)) { ?>
								<div class="form-check-inline">
						  			<input class="form-check-input" type="checkbox" name="lamar[]" id="checkbox1" 
						  				value="<?php echo$data['jenis_keahlian']; ?>">
						  			<label class="form-check-label" for="checkbox1">
						  				<?php echo $data['jenis_keahlian']; ?>
						  			</label>
								</div>
								<?php } ?>
								<div class="input-group mt-2" style="width: 30%;">
									  <div class="input-group-prepend">
									    <div class="input-group-text">
									      <input type="checkbox" aria-label="Checkbox for following text input">
									    </div>
									  </div>
	  									<input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="lainnya..." name="lamar[]">
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			 	<div class="col-md-12 mb-3">
					<div class="form-group">
					      <label>Status Kerja</label>
					      <select class="form-control" name="status_kerja" required>
					      	<option value="">Pilih Status Kerja</option>
					      	<option value="Pulang Pergi">Pulang Pergi</option>
					      	<option value="Menginap">Menginap</option>
					      </select>
					</div>
				</div>
				<div class="col-md-12 mb-3">
					<div class="form-group">
			    		<label for="exampleFormControlFile1">Masukan Foto Anda</label>
			    		<input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto" required>
			  		</div>
			 	 </div>
			 	 <div class="col-md-4">
				 	 <div class="form-group">
				    	 <label><b>Captcha</b></label><br>
				    	 <img class="mb-3" src="content/captcha.php" /><br>
				    	 <input type="text" class="form-control" name="captcha" placeholder="Masukan Captcha" required>
		  	  		</div>
	  	  		</div>
			 	 <div class="col-md-12 mb-3">
					<div class="form-group">
					    <div class="form-check">
					      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
					      <label class="form-check-label" for="invalidCheck2">Dengan ini saya menyatakan bahwa saya mengisi data dengan sejujur-jujurnya</label>
					    </div>
					</div>
				</div>
				  <button class="btn btn-success mb-3" type="submit" name="simpan">Daftar Sekarang</button>
			</div>
			</form>
	</div>
</div>

