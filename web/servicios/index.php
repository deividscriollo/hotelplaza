<?php include'../../data/front-end/index.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Servicios  - Hotel Plaza Victoria</title>
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




		<div class="container txt_cntr wow fadeInUp">
			<div class="row">
				<div class="grid_4 wow fadeInLeft" data-wow-duration="" data-wow-delay="0.4s">
					<div class="wrapper">
						<h2>RECEPCIÓN</h2>
						<div class="hline2"></div>
						<!-- <p class="txt3 v2"><img src="../images/page2_pic1.jpg"></p> -->
						<p>Recepción con atención las 24 horas, estamos para servirle.</p>
						<div class="hline2 v2"></div>
					</div>

					<div class="wrapper marTop3">
						<h2>Parqueadero</h2>
						<div class="hline2"></div>
						<p class="txt3 v2"></p>
						<p>Contamos con servicio de parqueadero privado para que su vehículo este seguro con vigilancia de cámaras.</p>
						<div class="hline2 v2"></div>
					</div>

				</div>

				<div class="grid_4 wow fadeInUp" data-wow-duration="" data-wow-delay="0.1s">
					<div class="wrapper">
						<h2>SERVICIO A LA HABITACION</h2>
						<div class="hline2"></div>
						<p class="txt3 v2"></p>
						<p>Disfrute de nuestro servicio de restaurante en la comodidad de su habitación.</p>
						<div class="hline2 v2"></div>
					</div>

					<div class="wrapper marTop3">
						<h2>INTERNET, WI FI</h2>
						<div class="hline2"></div>
						<p class="txt3 v2"></p>
						<p>Todas nuestras instalaciones cuentan con acceso a servicio de Internet.</p>
						<div class="hline2 v2"></div>
					</div>
				</div>

				<div class="grid_4 wow fadeInRight" data-wow-duration="" data-wow-delay="0.7s">
					<div class="wrapper">
						<h2>Servicio de taxi</h2>
						<div class="hline2"></div>
						<p class="txt3 v2"></p>
						<p>Contáctenos y evite molestias de movilización, le aseguramos, confort y seguridad en su arribo a nuestras instalaciones.</p>
						<div class="hline2 v2"></div>
					</div>

					<div class="wrapper marTop3">
						<h2>Servicio de seguridad</h2>
						<div class="hline2"></div>
						<p class="txt3 v2"></p>
						<p>Vigilancia por cámaras de video las 24 horas del día.</p>
						<div class="hline2 v2"></div>
					</div>
				</div>
			</div>



			
			<div class="row txt_left">
				<div class="grid_8 wow fadeInLeft" data-wow-duration="" data-wow-delay="0.6s">
					<h2 class="marTop2">Hotel Plaza Victoria</h2>
					<img src="../images/page3_pic1.jpg" alt="" class="img2 img_round">
					<div class="box2">
						<p>Se encuentra en el sector financiero de la ciudad de Ibarra. A solo 8 minutos a pie del centro comercial Laguna Mall. Cerca de parques, bancos restaurantes y a 5 minutos de la estación del tren. Presenta unas instalaciones modernas y una decoración cálida para sus distinguidos clientes.</p>
						<p>Las habitaciones están decoradas en tonos alegres, cálidos y disponen de ventanas grandes que dan mucha claridad y otras sin ventana para personas que les gusta la tranquilidad y armonía.</p>
						<p>El establecimiento está en la zona comercial y financiera de Ibarra, y el aeropuerto Mariscal Sucre se encuentra a 1 hora y media en coche.</p>
					</div>
				</div>


				<div class="grid_4 wow fadeInRight" data-wow-duration="" data-wow-delay="0.8s">
					<h2 class="marTop2">LE OFRECEMOS</h2>
					<ul class="listWithMarker">
						<li><a >El restaurante anexo Parrilladas La Herencia está ubicado frente al hotel, En el cual se sirven almuerzos, cenas, parrilladas y platos a la carta.</a></li>
						<li><a >Este establecimiento proporciona aparcamiento gratuito, en las inmediaciones del hotel Ubicado a 200 metros del mismo</a></li>
						<li><a >Las habitaciones cuentan con suelo de cerámica, mesa o escritorio. TV por cable con 60 canales y conexión Wi-Fi ilimitada.</a></li>
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