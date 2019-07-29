<?php 
	
	require '../koneksi.php';
	$lowongan = mysqli_query($koneksi,"SELECT * FROM tb_lowongan");
	
 ?>
<div class="container-fluid">
	<h3><i class="fas fa-ad mr-2 mt-4"></i>Data Lowongan</h3><hr>

	<a href="?page=tambah_lowongan" class="btn btn-primary mb-3"><i class="fas fa-plus-circle mr-2"></i>Tambah Data</a>

	<!-- <div class="table-wrapper-scroll-y my-custom-scrollbar"> -->
	<div class="table-responsive">
		<table  id="dtHorizontalVerticalScrollExample" class="table table-bordered table-striped table-sm" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Posisi</th>
					<th>Perusahaan</th>
					<th>Lokasi</th>
					<th>No Telfon</th>
					<th>Pendidikan</th>
					<th>Keahlian</th>
					<th>Deskripsi</th>
					<th>Persyaratan</th>
					<th>Status</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<?php $nomor = 1; ?>
				<?php while ($data = mysqli_fetch_assoc($lowongan)) { ?>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $data['posisi']; ?></td>
					<td><?php echo $data['perusahaan']; ?></td>
					<td><?php echo $data['lokasi']; ?></td>
					<td><?php echo $data['kontak']; ?></td>
					<td><?php echo $data['pendidikan']; ?></td>
					<td><?php echo $data['keahlian']; ?></td>
					<td><?php echo $data['deskripsi']; ?></td>
					<td><?php echo $data['syarat']; ?></td>
					<td><?php echo $data['status']; ?></td>
					<td>
						<a href="?page=edit_lowongan&id=<?php echo $data['id_lowongan']; ?>" class="btn btn-success mt-2"><i class="fas fa-edit"></i></a>
						<a href="?page=delete_lowongan&id=<?php echo $data['id_lowongan']; ?>" class="btn btn-danger mt-2"><i class="fas fa-trash-alt"></i></a>
					</td>
				</tr>
				<?php 
					$nomor++;
				} ?>
			</tbody>
		</table>
	</div>
</div>