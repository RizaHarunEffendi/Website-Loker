<?php 

require '../koneksi.php';

$ambil = "SELECT * FROM tb_pekerja WHERE id_pekerja  = '$_GET[id]'";
$sql = mysqli_query($koneksi,$ambil);
$data = mysqli_fetch_assoc($sql);
$foto_pekerja = $data['foto'];

if (file_exists("foto_pekerja/$foto_pekerja")) 
{
	unlink("foto_pekerja/$foto_pekerja");
}

$query = mysqli_query($koneksi, "DELETE FROM tb_pekerja WHERE id_pekerja='$_GET[id]'");

if ($query) {
		echo "<script>alert('Data Berhasil Dihapus');</script>";
		echo "<script>var timer = setTimeout(function()
			{ window.location= '?page=data_pelamar'}, 500);
			</script>";
	}else{
		echo "<script>alert('Data Gagal Dihapus');</script>";
		echo "<script>var timer = setTimeout(function()
		{ window.location= '?page=data_pelamar'}, 500);
		</script>";
	}

 ?>