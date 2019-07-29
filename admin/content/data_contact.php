<?php 
	include '../koneksi.php';

	$kontak = mysqli_query($koneksi,"SELECT * FROM tb_contact");
 ?>
<div class="container-fluid">
	<h3><i class="far fa-id-card mr-2 mt-4"></i>Data Contact Us</h3><hr>

	<a href="?page=tambah_contact" class="btn btn-primary mb-3"><i class="fas fa-plus-circle mr-2"></i>Tambah Data</a>

		<div class="table-responsive">
		<table  id="dtHorizontalVerticalScrollExample" class="table table-bordered table-striped table-sm" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Lokasi</th>
					<th>Email</th>
					<th>No Telpon</th>
					<th>Profil</th>
					<th>Visi/Misi</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tr>
				<?php $nomor = 1; ?>
				<?php while ($data = mysqli_fetch_assoc($kontak)) { ?>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $data['lokasi']; ?></td>
					<td><?php echo $data['email']; ?></td>
					<td><?php echo $data['telfon']?></td>
					<td><?php echo $data['profil']; ?></td>
					<td><?php echo $data['visi_misi']; ?></td>
					<td>
						<a href="?page=edit_contact&id=<?php echo $data['id_contact']; ?>" class="btn btn-success mt-2"><i class="fas fa-edit"></i></a>
						<a href="?page=delete_contact&id=<?php echo $data['id_contact']; ?>" class="btn btn-danger mt-2"><i class="fas fa-trash-alt"></i></a>
					</td>
				</tr>
				<?php 
					$nomor++;
				} ?>
		</table>
	</div>
</div>