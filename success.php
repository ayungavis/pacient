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

	<?php if(isset($_SESSION['info'])) { ?>
		<main>
			<div class="container margin_120">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div id="confirm">
							<div class="icon icon--order-success svg add_bottom_15">
								<svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
									<g fill="none" stroke="#8EC343" stroke-width="2">
										<circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
										<path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
									</g>
								</svg>
							</div>
						<h2>Sukses!</h2>
						<p><?php echo $_SESSION['info']; ?></p>
						<?php if(isset($_SESSION['params'])) { ?>
							<a href="./register?action=<?php echo $_SESSION['params']; ?>" class="btn_1 medium">Daftar Lagi</a>
							&nbsp&nbspatau&nbsp&nbsp
							<a href="./view?name=<?php echo $_SESSION['params']; ?>" class="btn_1 medium">Lihat Data</a>
						<?php } ?>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</main>
		<!-- /main -->
		<?php unset($_SESSION['info']); ?>
		<?php unset($_SESSION['params']); ?>
	<?php } else { ?>
		<?php header("Location: ../index"); ?>
	<?php } ?>
	
	<?php require_once($folder_pgs.'/footer.php'); ?>

	<div id="toTop"></div>
	<!-- Back to top button -->

	<?php require_once($folder_pgs.'/script.php'); ?>

</body>

</html>