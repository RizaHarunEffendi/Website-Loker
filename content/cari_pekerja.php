<?php 
	include 'koneksi.php';

	$ambil = "SELECT * FROM tb_pekerja";
	$pekerja = mysqli_query($koneksi,$ambil);

 ?>
<div class="cari_pekerja mt-3">
	<div class="container mb-2">
		<h1 class="text-center">Stok Pekerja</h1><hr class="clear">
		<div class="row">
			<?php while ($data=mysqli_fetch_assoc($pekerja)) { ?>
			<div class="col-md-6 col-sm-12">
				<div class="card mb-3" style="width: 500px;">
				  <div class="row">
				    <div class="col-md-5 col-sm-5">
				      <img src="foto_pekerja/<?php echo$data['foto']; ?>" style="width: 200px; height: 250px;">
				    </div>
				    <div class="col-md-7 col-sm-7">
				      <div class="card-body">
				        <h5 class="card-title font-weight-bold"><?php echo $data['nama']; ?></h5>
				        <p class="card-text">Tanggal Lahir : <?php echo $data['tanggal_lahir']; ?> <br>
				        	Alamat : <?php echo $data['alamat_domisili']; ?> <br><br>
				        	<?php echo $data['lamaran']; ?><br><br></p>
				        <a href="?page=profil_pekerja&id=<?php echo$data['id_pekerja']; ?>" class="btn btn-primary">Profil</a>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
			 <?php } ?>
		
		</div>
	</div>
</div>