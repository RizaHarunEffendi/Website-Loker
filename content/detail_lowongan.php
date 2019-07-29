<?php 
	
	include 'koneksi.php';
	include 'fungsi/statistik.php';
	$id_lowongan = $_GET['id'];
	$ambil = "SELECT * FROM tb_lowongan WHERE id_lowongan='$id_lowongan'";
	$detail = mysqli_query($koneksi,$ambil);

	$ip = $_SERVER['REMOTE_ADDR'];
	$tgl = date('Y-m-d');

	klik($ip,$tgl,$id_lowongan);

	//go ng admin ngundange kaya kye
	$q = "SELECT id_lowongan,SUM(klik) as jumlah FROM tb_backup GROUP BY id_lowongan";
	$res = mysqli_query($koneksi,$q);
	while($data = mysqli_fetch_assoc($res)){
		echo "Id lowongan : " . $data['id_lowongan'] . "<br>";
		echo "Jumlah klik : " . $data['jumlah'] . "<br>"; 
	};

 ?>

 <div class="detail_lowongan mt-3">
	<div class="container mb-2">
		<?php while ($data = mysqli_fetch_assoc($detail)) { ?>
		<h1 class="text-center">Lowongan Kerja <?php echo $data['perusahaan']; ?></h1><hr>
		
		<div class="card-group">	
			<!-- <div class="col-md-4">
				<div class="page_content">
					<div class="col-md-12">
						<div class="cover_img">
							<a href="http://srikandimandiri.co.id/daftar/sm.admin/efratsys_files/pekerja/1563525006.jpg" class="right "><img src="http://srikandimandiri.co.id/daftar/sm.admin/efratsys_files/pekerja/thumb/thumb_1563525006.jpg"></a>
						</div>
 					</div>	
				</div>
			</div> -->
  			
  			<div class="col-md-12">
  				<div class="col-md-12" style="border:0px solid;">
					<table class="table table-striped">
				    	<tbody>
							<tr width="200px">
								<td>Posisi</td>
								<td width="10px">:</td>
								<td class="text-uppercase"><?php echo $data['posisi']; ?></td>
							</tr>
							<tr>
								<td>Perusahaan</td>
								<td>:</td>
								<td><?php echo $data['perusahaan']; ?></td>
							</tr>
		
							<tr>
								<td>Lokasi</td>
								<td>:</td>
								<td><?php echo $data['lokasi']; ?></td>
							</tr>
							<tr>
								<td>Kontak</td>
								<td>:</td>
								<td><?php echo $data['kontak']; ?></td>
							</tr>
							<tr>
								<td>Pendidikan Minimal</td>
								<td>:</td>
								<td><?php echo $data['pendidikan']; ?></td>
							</tr>
							<tr>
								<td>Keahlian</td>
								<td>:</td>
								<td><?php echo $data['keahlian']; ?></td>
							</tr>
							<tr>
								<td>Deskripsi</td>
								<td>:</td>
								<td><?php echo $data['deskripsi']; ?></td>
							</tr>
							<tr>
								<td>Syarat</td>
								<td>:</td>
								<td><textarea class="form-control" rows="5" disabled=""><?php echo $data['syarat']; ?></textarea>
								</td>
							</tr>
		<?php } ?>
				    	</tbody>
				  	</table>
				</div>
  			</div>
  		</div>		
  	</div>
</div>

