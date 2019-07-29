<div class="container-fluid">
	<h3><i class="fas fa-user mr-2 mt-4"></i>Tambah Data User</h3><hr><hr>
		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="username">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password"class="form-control"name="password">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email"class="form-control"name="password">
			</div>
			<div class="form-group">
				<label>Nama</label>
				<input type="text" class="form-control"name="nama">
			</div>
			<div class="form-group">
				<label>Level</label>
				<select required="" class="form-control" name="level">
					<option>Admin</option>
					<option>Guest</option>
				</select>
			</div>
			<button class="btn btn-success" name="save">Simpan</button>
		</form>
</div>