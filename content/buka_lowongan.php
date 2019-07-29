<?php 
	include './koneksi.php';

	$pendidikan = mysqli_query($koneksi,"SELECT * FROM tb_pendidikan");


 ?>
<div class="buka_lowongan"> 
	<div class="container mt-3">
		<h1 class="text-center">Buka Lowongan</h1><hr>
		<form method="post" enctype="multipart/form-data" action="fungsi/tambah_lowongan.php">
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
		      	<option value="1"><?php echo $data['pendidikan']; ?></option>
		      <?php } ?>
		      </select>
		    </div>
		    <div class="col-md-6 mb-3">
		      <label for="validationDefault06">Keahlian</label>
		      <input type="text" class="form-control" id="validationDefault06" name="keahlian" required>
		    </div>
		  	<div class="col-md-12 mb-3">
			  <div class="form-group">
		    	 <label for="validationDefault07">Deskripsi</label>
		    	 <textarea class="form-control" id="validationDefault07" rows="5"  name="deskripsi" required></textarea>
		  	  </div>
	  		</div>
	  		<div class="col-md-12 mb-3">
		  	  <div class="form-group">
		    	 <label for="validationDefault08">Persyaratan</label>
		    	 <textarea class="form-control" id="validationDefault08" rows="5" name="syarat" required></textarea>
		  	  </div>
	  		</div>
	  		<div class="col-md-4 mb-3">
		  	  <div class="form-group">
		    	 <label><b>Captcha</b></label><br>
		    	 <img class="mb-3" src="content/captcha.php" /><br>
		    	 <input type="text" class="form-control" name="captcha" placeholder="Masukan Captcha" required>
		  	  </div>
		  	</div>
	  	  </div>
	  	  <!-- <div class="form-group">
	    	<select hidden="" name="status">
	    		<option>tidak_aktif</option>
	    	</select>
	  	  </div> -->
		  <div class="form-group">
		    <div class="form-check">
		      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
		      <label class="form-check-label" for="invalidCheck2">
		       Dengan ini saya menyatakan bahwa saya mengisi data dengan sejujur-jujurnya
		      </label>
		    </div>
		  </div>
	  		<button class="btn btn-success mb-3" type="submit" name="simpan" data-toggle="alert">Simpan</button>
		</form>
</div>
</div>