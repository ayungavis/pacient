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

	<link rel="stylesheet" href="<?php echo $folder_css; ?>/datepicker.css">

</head>

<body>

	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

	<?php 
		require_once($folder_pgs.'/preload.php');
		require_once($folder_pgs.'/navbar.php');
	?>
	
	<?php 
		if(isset($_GET['action'])) {
			$action = $_GET['action'];

			switch ($action) {
				case 'rawat-darurat':
					include "register-darurat.php";
					break;
				case 'rawat-jalan':
					include "register-jalan.php";
					break;
				case 'rawat-inap':
					include "register-inap.php";
					break;
				default:
					header("Location: ./404");
					break;
			}
		}
	?>
	
	<?php require_once($folder_pgs.'/footer.php'); ?>

	<div id="toTop"></div>
	<!-- Back to top button -->

	<?php require_once($folder_pgs.'/script.php'); ?>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="<?php echo $folder_js; ?>/validate.js"></script>
	<script src="<?php echo $folder_js; ?>/datepicker.js"></script>

	<script>
		$( function() {
			$("#tanggal_lahir").datepicker();
		} );
	</script>

</body>
</html>