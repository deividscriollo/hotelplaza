<?php include'../../data/front-end/index.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Contactos - Hotel Plaza Victoria</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="../css/grid.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/contact-form.css">
	<script src="../js/jquery-1.11.3.min.js"></script>
	<script src="../js/jquery-migrate-1.2.1.min.js"></script>
	<script src='//maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false'></script>  
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


	<script src="../js/TMForm.js"></script>
	<script src="../js/modal.js"></script>

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




		<div class="container">
			<h2>COMO ENCONTRARNOS</h2>
			<div class="hline2 v3"></div>

			<section class="content_map  wow fadeInUp">
				<div class="google-map-api"> 
					<div id="map-canvas" class="gmap"></div> 
				</div> 
			</section>


			<div class="row">

				<div class="grid_4 txt_cntr wow fadeInLeft" data-wow-duration="" data-wow-delay="0.5s">
					<img src="../images/telefono.png" alt="" class="img2 img_round">
					<address class="address1">
						<dl>
							<dt class="fz15 color1">
								593 (06) 5001500 / 2600067 / 2600887
							</dt>
						</dl>
					</address>
					<div class="hline2"></div>
				</div>


				<div class="grid_4 txt_cntr wow fadeInUp" data-wow-duration="" data-wow-delay="0.2s">
					<img src="../images/gmap_marker.png" alt="" class="img2 img_round">
					<address class="address1">
						<dl>
							<dt class="fz15 color1">
								Calle Bolívar 12-101 Y Rafael Larrea
								Ibarra, EC100150, Ecuador
							</dt>
						</dl>
					</address>
					<div class="hline2"></div>
				</div>


				<div class="grid_4 txt_cntr wow fadeInRight" data-wow-duration="" data-wow-delay="0.8s">
					<img src="../images/correo.png" alt="" class="img2 img_round">
					<address class="address1">
						<dl>
							<dt class="fz15 color1">
								h.gerencia@hotmail.com
							</dt>
						</dl>
					</address>
					<div class="hline2"></div>
				</div>
			</div>
			<h2 class="marTop5">FORMULARIO DE CONTACTO</h2>
			<div class="hline2 v3"></div>


			<form id="contact-form">
				<div class="contact-form-loader"></div>
				<fieldset>

					<div class="row">
						<div class="grid_4">
							<label class="name">
								<input type="text" name="name" placeholder="Nombre:" value="" data-constraints="@Required @JustLetters"  />
								<span class="empty-message">*Este campo es requerido.</span>
								<span class="error-message">*Esto no es un nombre válido.</span>
							</label>
						</div>

						<div class="grid_4">
							<label class="email">
								<input type="text" name="email" placeholder="E-mail:" value="" data-constraints="@Required @Email" />
								<span class="empty-message">*Este campo es requerido.</span>
								<span class="error-message">*Esto no es un correo válido.</span>
							</label>
						</div>

						<div class="grid_4">
							<label class="phone">
								<input type="text" name="phone" placeholder="Telefono:" value="" data-constraints="@Required @JustNumbers" />
								<span class="empty-message">*Este campo es requerido.</span>
								<span class="error-message">*Esto no es un teléfono válido.</span>
							</label>
						</div>
					</div>

					<label class="message">
						<textarea name="message" placeholder="Mensaje:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
						<span class="empty-message">*Este campo es requerido.</span>
						<span class="error-message">*El mensaje es demasiado corto.</span>
					</label>
					<div class="btns">
						<a href="#" class="more_btn line_up" data-type="reset">Limpiar</a>
						<a href="#" class="more_btn line_up" data-type="submit">Enviar</a>
					</div>
				</fieldset> 
				<div class="modal fade response-message">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Modal title</h4>
							</div>
							<div class="modal-body">
								You message has been sent! We will be in touch soon.
							</div>      
						</div>
					</div>
				</div>
			</form>




		</div>



	</section>



	<!--========================================================
														FOOTER 
	=========================================================-->
	<?php footer(); ?>



<script src="../js/script.js"></script>


<script type="text/javascript"> 
	google_api_map_init();
	function google_api_map_init(){
		var map;
		var coordData = new google.maps.LatLng(0.344371, -78.119405); 
		var marker;

		var markerIcon = { 
				url: "../images/gmap_marker.png", 
				size: new google.maps.Size(42, 65), 
				origin: new google.maps.Point(0,0), 
				anchor: new google.maps.Point(21, 70) 
		};

		// styleArray=[{"featureType":"all","stylers":[{"saturation":-100},{"gamma":0.5}]}]

		function initialize() { 
			var mapOptions = { 
				zoom: 17, 
				center: coordData, 
				scrollwheel: false, 
				// styles: styleArray 
			}

			var contentString = "<div></div>"; 
			var infowindow = new google.maps.InfoWindow({ 
				content: contentString, 
				maxWidth: 200 
			});
			 
			var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions); 
			marker = new google.maps.Marker({ 
				map:map, 
				draggable:true, 
				position: coordData, 
				icon: markerIcon 
			});
			
		}
		google.maps.event.addDomListener(window, "load", initialize); 
	}
</script>

</body>
</html>