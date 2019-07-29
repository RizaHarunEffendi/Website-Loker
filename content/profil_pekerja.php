<?php 
	
	include 'koneksi.php';

	$ambil = "SELECT * FROM tb_pekerja WHERE id_pekerja='$_GET[id]'";
	$profil = mysqli_query($koneksi,$ambil);

 ?>

 <div class="profil_pekerja mt-3">
	<div class="container mb-2">
		<?php while ($data = mysqli_fetch_assoc($profil)) { ?>
		<h1>Profil <?php echo $data['nama']; ?>-<?php echo $data['lamaran']; ?></h1><hr>
		<div class="row">	
			<div class="col-md-3">
				<div class="page_content">
					<div class="col-md-12">
						<div class="cover_img">
							<img src="foto_pekerja/<?php echo$data['foto'];  ?>" style="width: 200px; height: 250px;">
						</div>
 					</div>	
				</div>
			</div>
  			
  			<div class="col-md-9">
  				<div class="col-md-12" style="border:0px solid;">
					<table class="table table-striped">
				    	<tbody>
							<tr>
								<td width="300px">Nama</td>
								<td width="10px">:</td>
								<td class="text-uppercase"><?php echo $data['nama']; ?></td>
							</tr>
							<tr>
								<td>Tempat/Tgl Lahir</td>
								<td>:</td>
								<td class="text-uppercase"><?php echo $data['tempat_lahir']; ?>, <?php echo $data
								['tanggal_lahir']; ?></td>
							</tr>
		
							<tr>
								<td>Jenis Kelamin</td>
								<td>:</td>
								<td><?php echo $data['jenis_kelamin']; ?></td>
							</tr>
							<tr>
								<td>Alamat Domisili</td>
								<td>:</td>
								<td><?php echo $data['alamat_domisili']; ?></td>
							</tr>
							<tr>
								<td>Alamat KTP</td>
								<td>:</td>
								<td><?php echo $data['alamat_ktp']; ?></td>
							</tr>
							<tr>
								<td>Agama</td>
								<td>:</td>
								<td><?php echo $data['agama']; ?></td>
							</tr>
							<tr>
								<td>Status Menikah</td>
								<td>:</td>
								<td><?php echo $data['status_ktp']; ?></td>
							</tr>
							<tr>
								<td>Pendidikan</td>
								<td>:</td>
								<td><?php echo $data['pendidikan']; ?>
								</td>
							</tr>
							<tr>
								<td>Posisi yang di Lamar</td>
								<td>:</td>
								<td><strong><?php echo $data['lamaran']; ?></strong>
								</td>
							</tr>
							<tr>
								<td>Cara Tinggal</td>
								<td>:</td>
								<td><?php echo $data['status_kerja']; ?>
								</td>
							</tr>
							<tr>
								<td>No Telpon</td>
								<td>:</td>
								<td><?php echo $data['no_telpon']; ?>
								</td>
							</tr>
							<tr>
								<td>No WhatsApp</td>
								<td>:</td>
								<td><?php echo $data['no_wa']; ?>
								</td>
							</tr>
	
				    	</tbody>
				    		<?php } ?>
				  	</table>
				</div>
  			</div>
  		</div>	
  	</div>
</div>

