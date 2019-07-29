<?php 
	include './koneksi.php';

	$faq = mysqli_query($koneksi,"SELECT * FROM tb_faq");

 ?>
<div class="faq">
	<div class="container mt-3">
		<h1 class="text-center">Frequently Asked Question</h1><hr>
		<div class="row">
			<?php while ($data = mysqli_fetch_assoc($faq)) { ?>
				<div class="col-md-4 col-sm-6">
					<h3><?php echo $data ['pertanyaan']; ?></h3>
					<p><?php echo $data ['jawaban']; ?></p>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

