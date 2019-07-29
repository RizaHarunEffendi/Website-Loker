<body>
	<?php 
		require '_partials/navbar.php';
	 ?>
	
		<?php 
 		$content = (isset($_GET["page"])) ? $_GET["page"] : "";

 		switch ($content) {
 			case 'buka_lowongan':
 				echo "<title>Buka Lowongan</title>";
 				require 'content/buka_lowongan.php';
 				break;
 			case 'lihat_lowongan':
 				echo "<title>Buka Lowongan</title>";
 				require 'content/lihat_lowongan.php';
 				break;				 
 			case 'cari_kerja':
 				echo "<title>Cari Kerja</title>";
 				require 'content/cari_kerja.php';
 				break;
 			case 'cari_pekerja':
 				echo "<title>Cari Pekerja</title>";
 				require 'content/cari_pekerja.php';
 				break;
 			case 'faq':
 				echo "<title>FAQ</title>";
 				require 'content/faq.php';
 				break;
 			case 'contact_us':
 				echo "<title>Contact Us</title>";
 				require 'content/contact_us.php';
 				break;
 			case 'detail_lowongan':
 				echo "<title>Detail Lowongan</title>";
 				require 'content/detail_lowongan.php';
 				break;
 			case 'profil_pekerja':
 				echo "<title>Profil Pekerja</title>";
 				require 'content/profil_pekerja.php';
 				break;
 			default:
 				echo "<title>Home</title>";
 				require 'content/home.php';
 				break;
 		}
 		?>

<?php require '_partials/footer.php'; ?>
</body>


