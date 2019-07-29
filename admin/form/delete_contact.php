<?php  
	
	require '../koneksi.php';

	$query = "DELETE FROM tb_contact WHERE id_contact='$_GET[id]'";
	$delete = mysqli_query($koneksi,$query);

	if ($delete) {
		echo "<script>alert('Data Berhasil Dihapus');</script>";
		echo "<script>var timer = setTimeout(function()
			{ window.location= '?page=data_contact'}, 500);
			</script>";
	}else{
		echo "<script>alert('Data Gagal Dihapus');</script>";
		echo "<script>var timer = setTimeout(function()
		{ window.location= '?page=data_contact'}, 500);
		</script>";
	}

 ?>