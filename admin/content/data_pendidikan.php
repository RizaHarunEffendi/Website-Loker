<?php 
	include '../koneksi.php';

	$pendidikan = mysqli_query($koneksi,"SELECT * FROM tb_pendidikan");
 ?>
<div class="container-fluid">
	<h3><i class="fas fa-graduation-cap mr-2 mt-4"></i>Data Pendidikan</h3><hr>

	<a href="?page=tambah_pendidikan" class="btn btn-primary mb-3"><i class="fas fa-plus-circle mr-2"></i>Tambah Data</a>

	<div class="table-responsive">
		<table  id="dtHorizontalVerticalScrollExample" class="table table-bordered table-striped table-sm" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Pendidikan</th>
					<th>Opsi</th>
				</tr>
			</thead>
				<tr>
					<?php $nomor = 1; ?>
					<?php while ($data = mysqli_fetch_assoc($pendidikan)) { ?>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $data['pendidikan']; ?></td>
					<td>
						<a href="?page=edit_pendidikan&id=<?php echo $data['id_pendidikan']; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
						<a href="?page=delete_pendidikan&id=<?php echo $data['id_pendidikan']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
					</td>
				</tr>
				<?php 
					$nomor++;
				} ?>
		</table>
	</div>
 </div>

      