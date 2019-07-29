<?php 
	include '../koneksi.php';

 	If (isset($_POST['simpan'])) 
 	{
 		session_start();
		if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
			{
		// echo "Captcha Okay!";
				$posisi = $_POST['posisi'];
		 		$perusahaan = $_POST['perusahaan'];
		 		$lokasi = $_POST['lokasi'];
		 		$kontak = $_POST['kontak'];
		 		$pendidikan = $_POST['pendidikan'];
		 		$keahlian = $_POST['keahlian'];
		 		$deskripsi = trim($_POST['deskripsi']);
		 		$syarat = trim($_POST['syarat']);
		 		$status = "tidak aktif";
		 		
		 		$query = "INSERT INTO tb_lowongan(posisi,perusahaan,lokasi,kontak,pendidikan,keahlian,deskripsi,syarat,status)
		 			VALUES ('$posisi','$perusahaan','$lokasi','$kontak','$pendidikan','$keahlian',
		 			'$deskripsi','$syarat','$status')";
		 		$simpan = mysqli_query($koneksi,$query);

		 		if ($simpan) {
		 			echo "<script>alert('Data Berhasil Tersimpan');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '../index.php'}, 500);
				</script>";
				}else{
					echo "<script>alert('Data Gagal Tersimpan');</script>";
					echo "<script>var timer = setTimeout(function()
					{ window.location= '../index.php?page=buka_lowongan'}, 500);
				</script>";
		 		}
		}else{
				echo "<script>alert('Captcha Salah');</script>";
				echo "<script>var timer = setTimeout(function()
				{ window.location= '../index.php?page=buka_lowongan'}, 500);
				</script>";
		}
 	}
  ?>