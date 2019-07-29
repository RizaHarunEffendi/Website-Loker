<?php  
	
	require '../koneksi.php';

	$query = "DELETE FROM tb_keahlian WHERE id_keahlian='$_GET[id]'";
	$delete = mysqli_query($koneksi,$query);

	if ($delete) {
		echo "<script>alert('Data Berhasil Dihapus');</script>";
		echo "<script>var timer = setTimeout(function()
			{ window.location= '?page=data_keahlian'}, 500);
			</script>";
	}else{
		echo "<script>alert('Data Gagal Dihapus');</script>";
		echo "<script>var timer = setTimeout(function()
		{ window.location= '?page=data_keahlian'}, 500);
		</script>";
	}

 ?>