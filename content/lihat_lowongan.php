<?php 
	include './koneksi.php';

	$lowongan = mysqli_query($koneksi,"SELECT * FROM tb_lowongan WHERE status = 'aktif'");
	$profil = mysqli_query($koneksi,"SELECT * FROM tb_contact");
 ?>
<div class="lihat_lowongan mt-3">
	<div class="container mb-2">
		<h1 class="text-center">Daftar Lowongan</h1><hr>
		<div class="row">
				<?php while($data =mysqli_fetch_assoc($lowongan)) { ?>
				<div class="col-md-3 col-sm-6">
					<div class="card border-dark mb-3" style="max-width: 15rem;">
					  <div class="card-header"><strong><?php echo $data['posisi']; ?></strong></div>
					  <div class="card-body text-dark">
					    <h5 class="card-title"><?php echo $data['perusahaan']; ?></h5>
					    <p class="card-text">
					    	Pendidikan Min :<br><?php echo $data['pendidikan']; ?><br>	
					    	Keahlian :<br><?php echo $data['keahlian']; ?></p>

					    <a href="?page=detail_lowongan&id=<?php echo $data['id_lowongan']; ?>" class="btn btn-primary">Detail</a>
					  </div>
					</div>
				</div>
				<?php } ?>
		</div>
	</div>
</div>