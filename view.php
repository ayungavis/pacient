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

	<!-- Plugin styles -->
	<link href="<?php echo $folder_vdr; ?>/datatables/jquery.dataTables.min.css" rel="stylesheet">
	<link href="<?php echo $folder_vdr; ?>/datatables/rowReorder.dataTables.min.css" rel="stylesheet">
	<link href="<?php echo $folder_vdr; ?>/datatables/responsive.dataTables.min.css" rel="stylesheet">

</head>

<body>

	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

	<?php 
		require_once($folder_pgs.'/preload.php');
		require_once($folder_pgs.'/navbar.php');
	?>
	
	<?php 
		if(isset($_GET['name'])) {
			$action = $_GET['name'];

			switch ($action) {
				case 'rawat-darurat':
					include "view-darurat.php";
					break;
				case 'rawat-jalan':
					include "view-jalan.php";
					break;
				case 'rawat-inap':
					include "view-inap.php";
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
	
	<!-- Page level plugin JavaScript-->
	<script src="<?php echo $folder_vdr; ?>/datatables/jquery-3.3.1.js"></script>
	<script src="<?php echo $folder_vdr; ?>/datatables/jquery.dataTables.min.js"></script>
	<script src="<?php echo $folder_vdr; ?>/datatables/dataTables.rowReorder.min.js"></script>
	<script src="<?php echo $folder_vdr; ?>/datatables/dataTables.responsive.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
		    var table = $('#tabel-jalan').DataTable( {
		        rowReorder: {
		            selector: 'td:nth-child(2)'
		        },
		        responsive: true
		    });
		});
	</script>

</body>
</html>