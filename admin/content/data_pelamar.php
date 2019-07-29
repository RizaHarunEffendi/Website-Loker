<?php 
	
	require '../koneksi.php';
	$pekerja = mysqli_query($koneksi,"SELECT * FROM tb_pekerja");
	
 ?>
<div class="container-fluid">
	<h3><i class="fas fa-user-tie mr-2 mt-4"></i>Data Pelamar</h3><hr>

	<!-- <a href="" class="btn btn-primary mb-3"><i class="fas fa-plus-circle mr-2"></i>Tambah Data</a> -->

	<div class="table-responsive">
		<table  id="dtHorizontalVerticalScrollExample" class="table table-bordered table-striped table-sm" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>No Telpon</th>
					<th>No WA</th>
					<th>Agama</th>
					<th>Status KTP</th>
					<th>Pendidikan</th>
					<th>Alamat Domisili</th>
					<th>Alamat KTP</th>
					<th>Melamar</th>
					<th>Status Kerja</th>
					<th>Foto</th>
					<th>Opsi</th>
				</tr>
			</thead>
				<tr>
					<?php $nomor = 1; ?>
					<?php while ($data = mysqli_fetch_assoc($pekerja)) { ?>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $data['nama']; ?></td>
					<td><?php echo $data['jenis_kelamin']; ?></td>
					<td><?php echo $data['tempat_lahir']; ?></td>
					<td><?php echo $data['tanggal_lahir']; ?></td>
					<td><?php echo $data['no_telpon']; ?></td>
					<td><?php echo $data['no_wa']; ?></td>
					<td><?php echo $data['agama']; ?></td>
					<td><?php echo $data['status_ktp']; ?></td>
					<td><?php echo $data['pendidikan']; ?></td>
					<td><?php echo $data['alamat_domisili']; ?></td>
					<td><?php echo $data['alamat_ktp']; ?></td>
					<td><?php echo $data['lamaran']; ?></td>
					<td><?php echo $data['status_kerja']; ?></td>
					<td>
						<img src="../foto_pekerja/<?php echo $data['foto']; ?>" width = "100">
					</td>
					<td>
						<a href="?page=edit_pelamar&id=<?php echo$data['id_pekerja']; ?>" class="btn btn-success mt-2"><i class="fas fa-edit"></i></a>
						<a href="?page=delete_pelamar&id=<?php echo$data['id_pekerja']; ?>" class="btn btn-danger mt-2"><i class="fas fa-trash-alt"></i></a>
					</td>
				</tr>
				<?php 
					$nomor++;
				} ?>
		</table>
	</div>
</div>