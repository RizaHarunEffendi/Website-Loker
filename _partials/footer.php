<!-- Footer -->
<?php 
	
	include './koneksi.php';
	$footer = "SELECT * FROM tb_contact";
	$sql = mysqli_query($koneksi,$footer);

 ?>
<div class="footer">
	<div class="container fluid">
		<div class="row">
			<?php while ($data = mysqli_fetch_assoc($sql)) { ?>
			<div class=" col-md-5 col-sm-12 mt-3">
				<h3>Tentang Kami</h3>			
				<div>
				<p><?php echo $data['profil']; ?></p>
				</div>
			</div>
			<div class="col-md-3 col-sm-12 mt-3">
				<h3>Lihat Kami Di</h3>
				<div class="sosmed">
					<a href="https://www.facebook.com/" target="new" class="fb"><i class="fa-2x fab fa-facebook-square"></i></a>
					<a href="https://web.whatsapp.com/" target="new" class="wa"><i class="fa-2x fab fa-whatsapp-square ml-2"></i></a>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 mt-3">
				<h3>Contact</h3>
				<div class="contact">
					<span>Please contact Us below for more detail information.</span><br>
						<i class="fas fa-home mb-2 mr-2"></i><span><?php echo $data['lokasi']; ?></span><br>
						<i class="fas fa-phone-alt mr-2"></i><span><?php echo $data['telfon']; ?></span>
				</div>
				<?php } ?>
			</div>
			
		</div>
	</div>
	<!-- .container -->
</div>
<div class="footer1 py-2">
	<p class="m-0 text-center">Copyright &copy 2019-Loker.id</p>
</div>

<!-- Bootstrap core JavaScript -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/fontawesome-free/js/fontawesome.js"></script>
<script src="assets/js/script.js"></script>

