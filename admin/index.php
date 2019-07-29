<?php 
session_start();
require '../koneksi.php';
 ?>
<!DOCTYPE html>
<html>
<?php 
require '_partials/header.php';
 ?>
<body>
	<div class="d-flex" id="wrapper">
		<?php require '_partials/sidebar.php'; ?>
		
		<!-- Page Content -->
		<div id="page-content-wrapper">
			<?php 
			require '_partials/navbar.php';
			require 'body.php';
			 ?>
		</div>
		<!-- /#page-content-wrapper -->
	</div>
	<!-- /#wrapper -->

</body>
</html>
