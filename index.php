<?php 
	include('inc/config.php');
	include('inc/function.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<?php 
		require_once($folder_pgs.'/header.php');
		require_once($folder_pgs.'/favicon.php');
		require_once($folder_pgs.'/css.php');
	?>

</head>

<body>

	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

	<?php 
		require_once($folder_pgs.'/preload.php');
		require_once($folder_pgs.'/navbar.php');
	?>

	<main>
		<div class="hero_home version_3">
			<div class="content">
				<h3>Selamat Datang!</h3>
				<p>
					<?php echo $title; ?> merupakan salah satu rumah sakit swasta yang didirikan oleh Yayasan Bhakti Wiyata.
				</p>
				<!-- <a href="./login" class="btn_1 medium">Masuk</a>
				<a href="./register" class="btn_1 medium">Daftar</a> -->
			</div>
		</div>
		<!-- /Hero -->

		<div class="container margin_120_95">
			<div class="main_title">
				<h2>Melayani dengan <strong>setulus hati</strong></h2>
				<p><?php echo $title; ?> memberikan layanan yang terbaik melalui layanan unggulan seperti Instalasi Rawat Darurat, Instalasi Rawat Jalan, dan Instalasi Rawat Inap.</p>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="box_feat" id="icon_1">
						<!-- <span></span> -->
						<h3>Instalasi Rawat Darurat</h3>
						<p>Melayani pertolongan pertama pada kasus/penyakit yang tergolong emergency.</p>
						<br>
						<p class="text-center"><a href="register?action=rawat-darurat" class="btn_1 medium">Daftar</a></p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="box_feat" id="icon_2">
						<!-- <span></span> -->
						<h3>Instalasi Rawat Jalan</h3>
						<p>Melayani tindakan observasi, diagnosis, pengobatan, rehabilitasi medik, serta pelayanan kesehatan lainnya.</p>
						<br>
						<p class="text-center"><a href="register?action=rawat-jalan" class="btn_1 medium">Daftar</a></p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="box_feat" id="icon_3">
						<h3>Instalasi Rawat Inap</h3>
						<p>Melayani upaya penyembuhan pasien melalui pengobatan dan perawatan yang dilaksanakan dalam ruang rawat inap di rumah sakit.</p>
						<p class="text-center"><a href="./register?action=rawat-inap" class="btn_1 medium">Daftar</a></p>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->

	</main>
	<!-- /main content -->
	
	<?php require_once($folder_pgs.'/footer.php'); ?>

	<div id="toTop"></div>
	<!-- Back to top button -->

	<?php require_once($folder_pgs.'/script.php'); ?>

</body>

</html>