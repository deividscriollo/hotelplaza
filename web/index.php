<?php include'../data/front-end/index.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio - Hotel Plaza Victoria</title>
	<meta charset="utf-8">
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/camera.css">
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/camera.js"></script>
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
		<!-- start Camera -->
		<div class="camera_main_container  wow fadeIn">
				<div class="slider_wrapper">
					<div class="" id="camera_wrap">
							<div data-src="images/slide1.jpg">
									<div class="caption fadeIn">
											<div class="caption_bg">
													<!-- <span class="slider_txt1">MAKE YOUR VACATION <br>COMFORTABLE</span> -->
											</div>
									</div>
							</div>

							<div data-src="images/slide2.jpg">
									<div class="caption fadeIn">
											<div class="caption_bg">
													<!-- <span class="slider_txt1">View our rooms, <br>restaurant, pool &amp; other</span> -->
											</div>
									</div>
							</div>

							<div data-src="images/slide3.jpg">
									<div class="caption fadeIn">
											<div class="caption_bg">
													<!-- <span class="slider_txt1">Make a reservation <br>to get new experience!</span> -->
											</div>
									</div>
							</div>

					</div>
				</div>
		</div>
		
		<!-- end Camera -->


		<div class="box-2  wow fadeInUp">
			<div class="container">
					<div class="wrapper txt_cntr">
						<ul class="camera_pagination">
							<li><a href="#"></a></li>
							<li><a href="#"></a></li>
							<li><a href="#"></a></li>
						</ul>
			
						<ul class="camera_slogans">
							<li><span class="slider_txt1 animated fadeInUp">Haga de sus vacaciones <br> más confortables</span></li>
							<li><span class="slider_txt1 animated fadeInUp">Vea nuestras habitaciones,<br> restaurante y más</span></li>
							<li><span class="slider_txt1 animated fadeInUp">Hacer una reserva para <br> conseguir nuevas experiencias!</span></li>
						</ul>
					</div>
		
				<div class="row">
					<div class="grid_3 " >
						<div class="banner1 vline">
							<img src="images/page1_icon1.png" alt="" class="no_resize wow fadeInUp" data-wow-delay="1.2s">
							<p class="txt1 wow fadeInUp" data-wow-delay="1.3s">Promociones especiales:</p>
							<p class="txt2 wow fadeInUp" data-wow-delay="1.4s">ver paquetes especiales de este mes</p>
							<a href="#" class="more_btn wow fadeInUp" data-wow-delay="1.5s">Leer mas..</a>
						</div>
					</div>

					<div class="grid_3 ">
						<div class="banner1 vline">
							<img src="images/page1_icon2.png" alt="" class="no_resize wow fadeInUp" data-wow-delay="0.4s">
							<p class="txt1 wow fadeInUp" data-wow-delay="0.5s">bed &amp; <br>breakfast <br>package</p>
							<p class="txt2 wow fadeInUp" data-wow-delay="0.6s">view our promotion</p>
							<a href="#" class="more_btn wow fadeInUp" data-wow-delay="0.7s">read more</a>
						</div>
					</div>


					<div class="grid_3 ">
						<div class="banner1 vline">
							<img src="images/page1_icon3.png" alt="" class="no_resize wow fadeInUp" data-wow-delay="0.8s">
							<p class="txt1 wow fadeInUp" data-wow-delay="0.9s">hotel <br>restaurant</p>
							<p class="txt2 wow fadeInUp" data-wow-delay="1.0s">perfect menu from <br>our cook</p>
							<a href="#" class="more_btn wow fadeInUp" data-wow-delay="1.1s">read more</a>
						</div>
					</div>

					<div class="grid_3 ">
						<div class="banner1">
							<img src="images/page1_icon4.png" alt="" class="no_resize wow fadeInUp" data-wow-delay="1.6s">
							<p class="txt1 wow fadeInUp" data-wow-delay="1.7s">Tax Free</p>
							<p class="txt2 wow fadeInUp" data-wow-delay="1.8s">Servicio Libre de Impuestos</p>
							<a href="#" class="more_btn wow fadeInUp" data-wow-delay="1.9s">Leer mas..</a>
						</div>
					</div>

				</div>


			</div>
		</div>







		<div class="container txt_cntr wow fadeInUp">
			<div class="hline"></div>
			<div class="row">
				<div class="grid_4" data-wow-duration="" data-wow-delay="0.4s">
					<h2 class="vline2">Family packages</h2>
					<h3>from $85</h3>
					<div class="hline2"></div>
					<a href="#" class="banner2">
						<img src="images/page1_pic1.jpg" alt="" class="img_round">
						<div class="banner2_txt">
							<p>reservar ahora!</p>
						</div>
					</a>
					<p>Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus et mgnis dis parturient montes ascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus a lorem.</p>
					<div class="hline2 v2"></div>
				</div>

				<div class="grid_4" data-wow-duration="" data-wow-delay="0.6s">
					<h2 class="vline2">business packages</h2>
					<h3>from $120</h3>
					<div class="hline2"></div>
					<a href="#" class="banner2">
						<img src="images/page1_pic2.jpg" alt="" class="img_round">
						<div class="banner2_txt">
							<p>reservar ahora!</p>
						</div>
					</a>
					<p>Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus et mgnis dis parturient montes ascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus a lorem.</p>
					<div class="hline2 v2"></div>
				</div>

				<div class="grid_4" data-wow-duration="" data-wow-delay="0.7s">
					<h2>just married packages</h2>
					<h3>from $250</h3>
					<div class="hline2"></div>
					<a href="#" class="banner2">
						<img src="images/page1_pic3.jpg" alt="" class="img_round">
						<div class="banner2_txt">
							<p>reservar ahora!</p>
						</div>
					</a>
					<p>Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus et mgnis dis parturient montes ascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus a lorem.</p>
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

<!--[if (gt IE 9)|!(IE)]><!-->
<script src="js/jquery.mobile.customized.min.js"></script>
<!--<![endif]-->

<script type="text/javascript">

	$(document).ready(function(){
		var $camera = $('#camera_wrap');
		jQuery('#camera_wrap').camera({
				loader: false,
            pagination: true,
            // minHeight: '627',
            thumbnails: false,
            height: '32.65625%',
            caption: true,
            navigation: false,
            fx: 'mosaic',
            time: 4000,
            onStartTransition:function(){
              var ind = $camera.find('.camera_pag_ul>li.cameracurrent').index();
              (ind < 0)&&(ind = 0);

              $('li',".camera_pagination")
                .removeClass('active')
                .eq(ind).addClass('active');

	             $('li',".camera_slogans")
	              .removeClass('active')
	              .eq(ind).addClass('active');

            }
			});
	 });


	$(".camera_pagination").find('li').click(function(){
		var $this = $(this),
		ind = $this.index();

		$(this).addClass("active");
    $(this).siblings().removeClass("active");
		// console.log("ind = " + ind);
		 $('.camera_pag_ul>li').eq(ind).click();

		 $('li',".camera_slogans")
      .removeClass('active')
      .eq(ind).addClass('active');

		return false;
	})




	 $(document).ready(function(){
		// Initialize the gallery
		$('.magnifier2').touchTouch();
	 });
</script>



<script>
	$('.banner1').hover(function(){
		$(this).addClass('animated pulse');
		$('img',this).addClass('animated swing');
		$(this).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', end_animation_function);
			}, function(){
			//$(this).removeClass('animated pulse');
		})

	function end_animation_function(){
		$(this).removeClass('animated pulse');
		$('img',this).removeClass('animated swing');
	}
</script>




<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7078796-5']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script></body>
</html>