<?php 
	include '../koneksi.php';

	$faq = mysqli_query($koneksi,"SELECT * FROM tb_faq");
 ?>
<div class="container-fluid">
	<h3><i class="far fa-question-circle mr-2 mt-4"></i>Data FAQ</h3><hr>
	<a href="?page=tambah_faq" class="btn btn-primary mb-3"><i class="fas fa-plus-circle mr-2"></i>Tambah Data</a>

	<div class="table-responsive">
		<table  id="dtHorizontalVerticalScrollExample" class="table table-bordered table-striped table-sm" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Pertanyaan</th>
					<th>Jawaban</th>
					<th>Opsi</th>
				</tr>
			</thead>
				<tr>
					<?php $nomor = 1; ?>
					<?php while ($data = mysqli_fetch_assoc($faq)) { ?>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $data['pertanyaan']; ?></td>
					<td><?php echo $data['jawaban']; ?></td>
					<td>
						<a href="?page=edit_faq&id=<?php echo$data['id_faq']; ?>" class="btn btn-success mt-2">		<i class="fas fa-edit"></i></a>
						<a href="?page=delete_faq&id=<?php echo$data['id_faq']; ?>" class="btn btn-danger mt-2">	<i class="fas fa-trash-alt"></i></a>
					</td>
				</tr>
				<?php 
					$nomor++;
				} ?>
		</table>
	</div>
</div>