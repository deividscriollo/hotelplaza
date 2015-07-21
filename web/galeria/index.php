<?php include'../../data/front-end/index.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio - Hotel Plaza Victoria</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="../css/grid.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/camera.css">
	<script src="../js/jquery-1.11.3.min.js"></script>
	<script src="../js/jquery-migrate-1.2.1.min.js"></script>
	<script src="../js/camera.js"></script>
	<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="../js/jquery.mobile.customized.min.js"></script>
	<script src="../js/wow.js"></script>
	<script>
		$(document).ready(function () {
			if ($('html').hasClass('desktop')) {
				new WOW().init();
			}
		});
	</script>
</head>

<body>

	<!--========================================================
														HEADER 
	=========================================================-->
	<?php print menu(); ?>
	<!--========================================================
														CONTENT 
	=========================================================-->
	<section id="content">
		<iframe class="dc" scrolling="no" src="index1.php" width="100%" height="650" frameborder="0">
		</iframe> 

	</section>
	<style type="text/css">
		iframe {
		  border-top: #FFF 0px dotted;
		  border-right: #FFF 0px dotted;
		  border-left: #FFF 0px dotted;
		  border-bottom: #FFF 0px dotted;
		  padding-top: 20px!important;
		}
	</style>


	<!--========================================================
														FOOTER 
	=========================================================-->
	<?php footer(); ?>



<script src="../js/script.js"></script>

<!--[if (gt IE 9)|!(IE)]><!-->
<script src="../js/jquery.mobile.customized.min.js"></script>
<!--<![endif]-->

</body>
</html>