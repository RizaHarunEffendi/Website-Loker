<?php 
	include '../koneksi.php';

	$keahlian = mysqli_query($koneksi,"SELECT * FROM tb_keahlian");
 ?>
<div class="container-fluid">
 	<h3><i class="fas fa-briefcase mr-2 mt-4"></i>Data Keahlian</h3><hr>

 	<a href="?page=tambah_keahlian" class="btn btn-primary mb-3"><i class="fas fa-plus-circle mr-2"></i>Tambah Data</a>

	<div class="table-responsive">
		<table  id="dtHorizontalVerticalScrollExample" class="table table-bordered table-striped table-sm" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Keahlian</th>
					<th>Opsi</th>
				</tr>
			</thead>
				<tr>
					<?php $nomor = 1; ?>
					<?php while ($data = mysqli_fetch_assoc($keahlian)) { ?>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $data['jenis_keahlian']; ?></td>
					<td>
						<a href="?page=edit_keahlian&id=<?php echo $data['id_keahlian']; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
						<a href="?page=delete_keahlian&id=<?php echo $data['id_keahlian']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
					</td>

				</tr>
				<?php 
					$nomor++;
				} ?>
		</table>
	</div>
</div>
      