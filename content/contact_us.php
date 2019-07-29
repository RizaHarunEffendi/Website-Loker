<?php 
	include './koneksi.php';

	$kontak = mysqli_query($koneksi,"SELECT * FROM tb_contact LIMIT 1");
 ?>
<div class="contact_us mt-3">
	<div class="container">
		<h1 class="text-center">Contact Us</h1><hr>
			<div class="row">
				<div class="col-md-4 col-sm-4 ">
					<div class="card w-55 text-center mousehover">
					  <div class="card-body">
					  	<a href=""><i class="fa-2x fas fa-map-marker-alt"></i></a>
			<?php while ($data = mysqli_fetch_assoc($kontak)) { ?>
					    <p>Our Location</p>
					    <p><?php echo $data['lokasi']; ?></p>
					  </div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="card w-55 text-center mousehover">
					  <div class="card-body">
					  	<a href=""><i class="fa-2x fas fa-envelope"></i></a>
					    <p>Email Us</p>
					    <p><?php echo $data['email']; ?></p>
					  </div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="card w-55 text-center mousehover">
					  <div class="card-body">
					  	<a href=""><i class="fa-2x fab fa-whatsapp"></i></a>
					    <p>Whatsapp</p>
					    <p><?php echo $data['telfon']; ?></p>
					  </div>
					</div>
				</div>
			</div>
			<div class="card-bawah">
				<div class="card mb-4">
			 	 	<div class="card-header">
			    		Profil
				  	</div>
			  		<div class="card-body">
			    		<h5 class="card-title">Loker.id</h5>
			    		<p class="card-text"><?php echo $data['profil']; ?></p>
				    </div>
				    
				</div>
				<div class="card mb-4">
			 	 	<div class="card-header">
			    		Visi & Misi
				  	</div>
			  		<div class="card-body">
			    		<h5 class="card-title">Loker.id</h5>
			    		<p class="card-text"><?php echo $data['visi_misi']; ?></p>
				    </div>
			<?php } ?>
				</div>
			</div>
	</div>
</div>