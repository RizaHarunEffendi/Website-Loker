<?php 
	include '../koneksi.php';

 	If (isset($_POST['simpan'])) 
 	{
 		// var_dump($_POST['lamar']);
 		// die();
 		session_start();
		if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
			{
				
				$nama = $_POST['nama'];
		 		$tempat_lahir = $_POST['tempat_lahir'];
		 		$tanggal_lahir = $_POST['tanggal_lahir'];
		 		$jenis_kelamin = $_POST['jk'];
		 		$telpon = $_POST['telpon'];
		 		$wa = $_POST['wa'];
		 		$agama = $_POST['agama'];
		 		$status_ktp = $_POST['status_ktp'];
		 		$pendidikan = $_POST['pendidikan'];
		 		$domisili = trim($_POST['domisili']);
		 		$alamat_ktp = trim($_POST['alamat_ktp']);
		 		$lamar = implode(',', $_POST['lamar']);
				$status_kerja = $_POST['status_kerja'];

				// untuk move foto
				$nama_foto = $_FILES['foto']['name'];
				$lokasi = $_FILES['foto']['tmp_name'];
				move_uploaded_file($lokasi, "../foto_pekerja/".$nama_foto);


		 		$query = "INSERT INTO tb_pekerja(nama,jenis_kelamin,tempat_lahir,tanggal_lahir,no_telpon,no_wa,agama,
		 				  status_ktp,pendidikan,alamat_domisili,alamat_ktp,lamaran,status_kerja,foto)
		 				  VALUES ('$nama','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$telpon','$wa','$agama',
		 				  '$status_ktp','$pendidikan','$domisili','$alamat_ktp','$lamar','$status_kerja','$nama_foto')";
		 		$simpan = mysqli_query($koneksi,$query);

		 		if ($simpan) {
		 			echo "<script>alert('Data Berhasil Tersimpan');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '../index.php?page=cari_pekerja'}, 500);
				</script>";
				}else{
					echo "<script>alert('Data Gagal Tersimpan');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '../index.php?page=cari_kerja'}, 500);
				</script>";
		 		}
			}else{
				echo "<script>alert('Captcha Salah');</script>";
				echo "<script>var timer = setTimeout(function()
				{ window.location= '../index.php?page=cari_kerja'}, 500);
				</script>";
		}	
 	}
  ?>