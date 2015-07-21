<?php include'../data/front-end/index.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Habitaciones - Hotel Plaza Victoria</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>
	<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/wow.js"></script>
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




		<div class="container txt_cntr wow fadeInUp">
			<h2>The Deluxe Queen Size Rooms</h2>
			<div class="row">
				<div class="grid_4 wow fadeInLeft" data-wow-duration="" data-wow-delay="0.4s">
					<div class="wrapper">
						<a href="images/page2_big_pic1.jpg" class="magnifier2" >
							<img src="images/page2_pic1.jpg" alt="">
							<span class="zoom"></span>
						</a>
						<div class="box-3">
							<p class="txt3">Duis sit amet sem egestas</p>
							<p>Aenean id est vestibulum, euismod diam males uada, posuere ante. Aliquam sit amet nisi.</p>
							<div class="hline2"></div>
							<a href="#" class="more_btn">read more</a>
						</div>
					</div>

					<div class="wrapper">
						<a href="images/page2_big_pic2.jpg" class="magnifier2" >
							<img src="images/page2_pic2.jpg" alt="">
							<span class="zoom"></span>
						</a>
						<div class="box-3">
							<p class="txt3">venenatis mauris sit</p>
							<p>Aenean id est vestibulum, euismod diam males uada, posuere ante. Aliquam sit amet nisi.</p>
							<div class="hline2"></div>
							<a href="#" class="more_btn">read more</a>
						</div>
					</div>

				</div>

				<div class="grid_4 wow fadeInUp" data-wow-duration="" data-wow-delay="0.1s">
					<div class="wrapper">
						<a href="images/page2_big_pic3.jpg" class="magnifier2" >
							<img src="images/page2_pic3.jpg" alt="">
							<span class="zoom"></span>
						</a>
						<div class="box-3">
							<p class="txt3">amet sem egestas, venen</p>
							<p>Aenean id est vestibulum, euismod diam males uada, posuere ante. Aliquam sit amet nisi.</p>
							<div class="hline2"></div>
							<a href="#" class="more_btn">read more</a>
						</div>
					</div>

					<div class="wrapper">
						<a href="images/page2_big_pic4.jpg" class="magnifier2" >
							<img src="images/page2_pic4.jpg" alt="">
							<span class="zoom"></span>
						</a>
						<div class="box-3">
							<p class="txt3">Pellentesque accumsan</p>
							<p>Aenean id est vestibulum, euismod diam males uada, posuere ante. Aliquam sit amet nisi.</p>
							<div class="hline2"></div>
							<a href="#" class="more_btn">read more</a>
						</div>
					</div>
				</div>

				<div class="grid_4 wow fadeInRight" data-wow-duration="" data-wow-delay="0.7s">
					<div class="wrapper">
						<a href="images/page2_big_pic5.jpg" class="magnifier2" >
							<img src="images/page2_pic5.jpg" alt="">
							<span class="zoom"></span>
						</a>
						<div class="box-3">
							<p class="txt3">sem egestas, venenatis maur</p>
							<p>Aenean id est vestibulum, euismod diam males uada, posuere ante. Aliquam sit amet nisi.</p>
							<div class="hline2"></div>
							<a href="#" class="more_btn">read more</a>
						</div>
					</div>

					<div class="wrapper">
						<a href="images/page2_big_pic6.jpg" class="magnifier2" >
							<img src="images/page2_pic6.jpg" alt="">
							<span class="zoom"></span>
						</a>
						<div class="box-3">
							<p class="txt3">sit amet sem egestas vene</p>
							<p>Aenean id est vestibulum, euismod diam males uada, posuere ante. Aliquam sit amet nisi.</p>
							<div class="hline2"></div>
							<a href="#" class="more_btn">read more</a>
						</div>
					</div>
				</div>
			</div>



			<h2 class="marTop2">The Deluxe Twin Size Rooms</h2>
			<div class="row">
				<div class="grid_3 wow fadeInLeft" data-wow-duration="" data-wow-delay="0.6s">
					<img src="images/page2_pic7.jpg" alt="" class="img1 img_round">
					<p>Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque atibus et mgnis dis.</p>
					<div class="hline2 v2"></div>
				</div>

				<div class="grid_3 wow fadeInLeft" data-wow-duration="" data-wow-delay="0.2s">
					<img src="images/page2_pic8.jpg" alt="" class="img1 img_round">
					<p>Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque atibus et mgnis dis.</p>
					<div class="hline2 v2"></div>
				</div>

				<div class="grid_3 wow fadeInRight" data-wow-duration="" data-wow-delay="0.4s">
					<img src="images/page2_pic9.jpg" alt="" class="img1 img_round">
					<p>Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque atibus et mgnis dis.</p>
					<div class="hline2 v2"></div>
				</div>

				<div class="grid_3 wow fadeInRight" data-wow-duration="" data-wow-delay="0.8s">
					<img src="images/page2_pic10.jpg" alt="" class="img1 img_round">
					<p>Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque atibus et mgnis dis.</p>
					<div class="hline2 v2"></div>
				</div>

			</div>



		</div>



	</section>



	<!--========================================================
														FOOTER 
	=========================================================-->
	<?php footer(); ?>



<script src="js/script.js"></script>



</body>
</html>