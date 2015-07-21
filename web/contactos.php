<?php include'../data/front-end/index.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Contactos - Hotel Plaza Victoria</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/contact-form.css">
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>
	<script src='//maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false'></script>  
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
	<!--<![endif]-->


	<script src="js/TMForm.js"></script>
	<script src="js/modal.js"></script>

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
			<h2>How to Find Us</h2>
			<div class="hline2 v3"></div>

			<section class="content_map  wow fadeInUp">
				<div class="google-map-api"> 
					<div id="map-canvas" class="gmap"></div> 
				</div> 
			</section>


			<div class="row">

				<div class="grid_4 txt_cntr wow fadeInLeft" data-wow-duration="" data-wow-delay="0.5s">
					<address class="address1">
						<dl>
							<dt class="fz15 color1">
									8901 Marmora Road,<br>Glasgow, D04 89GR.
							</dt>
							<dd><span>Freephone:</span>+1 800 559 6580</dd>
							<dd><span>Telephone:</span>+1 800 603 6035</dd>
							<dd><span>FAX:</span>+1 800 889 9898</dd>
							<dd>E-mail: <strong><a href="mailto:" class="link2">mail@demolink.org</a></strong></dd>
						</dl>
					</address>
					<div class="hline2"></div>
				</div>


				<div class="grid_4 txt_cntr wow fadeInUp" data-wow-duration="" data-wow-delay="0.2s">
					<address class="address1">
						<dl>
							<dt class="fz15 color1">
									9863 - 9867 Mill Road, <br>Cambridge, MG09 99HT.
							</dt>
							<dd><span>Freephone:</span>+1 800 559 6580</dd>
							<dd><span>Telephone:</span>+1 800 603 6035</dd>
							<dd><span>FAX:</span>+1 800 889 9898</dd>
							<dd>E-mail: <strong><a href="mailto:" class="link2">mail@demolink.org</a></strong></dd>
						</dl>
					</address>
					<div class="hline2"></div>
				</div>


				<div class="grid_4 txt_cntr wow fadeInRight" data-wow-duration="" data-wow-delay="0.8s">
					<address class="address1">
						<dl>
							<dt class="fz15 color1">
									9870 St Vincent Place,<br>Glasgow, DC 45 Fr 45.
							</dt>
							<dd><span>Freephone:</span>+1 800 559 6580</dd>
							<dd><span>Telephone:</span>+1 800 603 6035</dd>
							<dd><span>FAX:</span>+1 800 889 9898</dd>
							<dd>E-mail: <strong><a href="mailto:" class="link2">mail@demolink.org</a></strong></dd>
						</dl>
					</address>
					<div class="hline2"></div>
				</div>



			</div>



			
			<h2 class="marTop5">contact form</h2>
			<div class="hline2 v3"></div>


			<form id="contact-form">
				<div class="contact-form-loader"></div>
				<fieldset>

					<div class="row">
						<div class="grid_4">
							<label class="name">
								<input type="text" name="name" placeholder="Name:" value="" data-constraints="@Required @JustLetters"  />
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*This is not a valid name.</span>
							</label>
						</div>

						<div class="grid_4">
							<label class="email">
								<input type="text" name="email" placeholder="E-mail:" value="" data-constraints="@Required @Email" />
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*This is not a valid email.</span>
							</label>
						</div>

						<div class="grid_4">
							<label class="phone">
								<input type="text" name="phone" placeholder="Phone:" value="" data-constraints="@Required @JustNumbers" />
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*This is not a valid phone.</span>
							</label>
						</div>
					</div>

					<label class="message">
						<textarea name="message" placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
						<span class="empty-message">*This field is required.</span>
						<span class="error-message">*The message is too short.</span>
					</label>
					<div class="btns">
						<a href="#" class="more_btn line_up" data-type="reset">Clear</a>
						<a href="#" class="more_btn line_up" data-type="submit">Send</a>
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



<script src="js/script.js"></script>


<script type="text/javascript"> 
	google_api_map_init();
	function google_api_map_init(){
		var map;
		var coordData = new google.maps.LatLng(parseFloat(40.646197), parseFloat(-73.9724068,14)); 
		var marker;

		var markerIcon = { 
				url: "images/gmap_marker.png", 
				size: new google.maps.Size(42, 65), 
				origin: new google.maps.Point(0,0), 
				anchor: new google.maps.Point(21, 70) 
		};

		// styleArray=[{"featureType":"all","stylers":[{"saturation":-100},{"gamma":0.5}]}]

		function initialize() { 
			var mapOptions = { 
				zoom: 14, 
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