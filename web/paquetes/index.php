<?php include'../../data/front-end/index.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Paqutes - Hotel Plaza Victoria</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="../css/grid.css">
	<link rel="stylesheet" href="../css/style.css">
	<script src="../js/jquery-1.11.3.min.js"></script>
	<script src="../js/jquery-migrate-1.2.1.min.js"></script>
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
	<!--<![endif]-->


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
		<div class="container wow fadeInUp">
			<div class="row">
				<h2>Packages overview</h2>
				<div class="hline2 v3"></div>
				<div class="grid_6 wow fadeInLeft" data-wow-duration="" data-wow-delay="0.4s">
					<div class="wrapper">
						<img src="../images/page4_pic1.jpg" alt="" class="img2 img_round no_resize">
						<div class="box2">
							<p class="txt3 v3"><a href="#" class="link3">Fusce et sem interdum, tincid ligula sed, scele.</a></p>
							<p>Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus et mgnis dis parturient montes ascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus a lorem. </p>
						</div>
					</div>

					<div class="wrapper marTop4">
						<img src="../images/page4_pic2.jpg" alt="" class="img2 img_round no_resize">
						<div class="box2">
							<p class="txt3 v3"><a href="#" class="link3">isque dol Vestibulum ac mas sa ultricies.</a></p>
							<p>Pellentesque sed risus vitae erat vulputate maximus. Cras fermentum sem sit amet nunc rhoncus, a dignissim justo scelerisque dolor. Vestibulum ac massa ultricies, sollicitudin risus et, semper arcu. Donec et arcu diam. Duis sit amet sem egestas, venena.</p>
						</div>
					</div>

					<div class="wrapper marTop4">
						<img src="../images/page4_pic3.jpg" alt="" class="img2 img_round no_resize">
						<div class="box2">
							<p class="txt3 v3"><a href="#" class="link3">Nulla risus neque maluada viverra sem id.</a></p>
							<p>Pellentesque accumsan mauris sit amet facilisis aliquet. Sed lorem nisi, porta vel velit et, accumsan feugiat dui. Donec sit amet ipsum at nibh bibendum porttitor. Vivamus tempus purus, a euismod orci ipsum at ipsum. Sed volutpat, erat ac pretium ultrices.</p>
						</div>
					</div>

				</div>


				<div class="grid_6 wow fadeInRight" data-wow-duration="" data-wow-delay="0.7s">
					
					<div class="wrapper">
						<img src="../images/page4_pic4.jpg" alt="" class="img2 img_round no_resize">
						<div class="box2">
							<p class="txt3 v3"><a href="#" class="link3">sollicitudin risus et, semper arcu. Donec et.</a></p>
							<p>Integer ornare justo faucibus enim aliquam, eu luctus odio vehicula maximus massa. Pellentesque sed risus vitae interdum, tincidunt ligula sed, scelerisque dolor. Vestibulum ac massa ultricies, sollicitudin risus et, semper arcu. Donec et arcu diam.</p>
						</div>
					</div>

					<div class="wrapper marTop4">
						<img src="../images/page4_pic5.jpg" alt="" class="img2 img_round no_resize">
						<div class="box2">
							<p class="txt3 v3"><a href="#" class="link3">Vestibulum ac massa ultri cies, sollicit.</a></p>
							<p>In ligula nunc, eleifend lobortis cursus nec, vehicula maximus massa. Pellentesque sed risus vitae erat vulputate maximus. Cras fermentum sem sit amet nunc rhoncus, a dignissim justo finibus. Fusce et sem interdum, tincidunt ligula sed, scelerisque dolor. </p>
						</div>
					</div>

					<div class="wrapper marTop4">
						<img src="../images/page4_pic6.jpg" alt="" class="img2 img_round no_resize">
						<div class="box2">
							<p class="txt3 v3"><a href="#" class="link3">neque, malesuada viverra sem id, pellentesque.</a></p>
							<p>Vivamus ullamcorper, velit eget aliquam fermentum, justo nunc tempus purus, a euismod orci ipsum at ipsum. Sed volutpat, erat ac pretium ultrices, mauris velit ultrices lacus, eu dictum risus tortor ac elit. Pellentesque at tellus imperdiet, dictum tortor.</p>
						</div>
					</div>

				</div>
			</div>



			
			<h2 class="marTop5">Spa Packages</h2>
			<div class="hline2 v3"></div>

			<div class="row">
				<div class="grid_4 wow fadeInLeft" data-wow-duration="" data-wow-delay="0.4s">
					<img src="../images/page4_pic7.jpg" alt="" class="img1 img_round">
					<ul class="listWithMarker v2">
						<li><a href="#">Pellentesque accumsan mauris sit </a></li>
						<li><a href="#">Sed lorem nisi porta vel velit e</a></li>
						<li><a href="#">Donec sit amet ipsum at nibh bibendum porttitor</a></li>
						<li><a href="#">Vivamus ullamcorper velit eget aliquam </a></li>
						<li><a href="#">Ermentum justo nunc tempus purus euismod </a></li>
						<li><a href="#">Sed volutpat, erat ac pretium </a></li>
					</ul>
				</div>

				<div class="grid_4 wow fadeInUp" data-wow-duration="" data-wow-delay="0.1s">
					<img src="../images/page4_pic8.jpg" alt="" class="img1 img_round">
					<ul class="listWithMarker v2">
						<li><a href="#">Donec sit amet ipsum at nibh bibendum porttitor</a></li>
						<li><a href="#">Vivamus ullamcorper velit eget aliquam </a></li>
						<li><a href="#">Ermentum justo nunc tempus purus euismod </a></li>
						<li><a href="#">Sed volutpat erat ac pretium </a></li>
						<li><a href="#">Ultrices mauris velit ultrices lacus eu dict</a></li>
						<li><a href="#">Um risus tortor ac elit pellentesque at tellus </a></li>
					</ul>
				</div>


				<div class="grid_4 wow fadeInRight" data-wow-duration="" data-wow-delay="0.7s">
					<img src="../images/page4_pic9.jpg" alt="" class="img1 img_round">
					<ul class="listWithMarker v2">
						<li><a href="#">Praesent bibendum mi eget hendrerit </a></li>
						<li><a href="#">sagittis augue nulla porttitor nisl sed efficitur </a></li>
						<li><a href="#">Suspendisse pulvinar magna viverra </a></li>
						<li><a href="#">Maecenas a rutrum quam Duis</a></li>
						<li><a href="#">Egestas tortor eu magna euisod eu commodo </a></li>
						<li><a href="#">In arcu purus aliquam eget loreuis</a></li>
					</ul>
				</div>




			</div>



		</div>



	</section>



	<!--========================================================
														FOOTER 
	=========================================================-->
	<?php footer(); ?>

<script src="../js/script.js"></script>
</body>
</html>