<?php include'../../data/front-end/index.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>habitación - Hotel Plaza Victoria</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="../css/grid.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/camera.css">
	<!-- tabs -->
	<link rel="stylesheet" type="text/css" href="../css/easy-responsive-tabs.css " />
	<!-- fin tabs -->


	<!-- lib required -->
	<script src="../js/jquery-1.11.3.min.js"></script>
	<script src="../js/jquery-migrate-1.2.1.min.js"></script>

	<!-- slider -->
		<!-- css -->
			<link href="../css/skitter.styles.min.css" type="text/css" media="all" rel="stylesheet" />
		<!-- js -->
			<script type="text/javascript" language="javascript" src="../js/jquery.easing.1.3.js"></script>
			<script type="text/javascript" language="javascript" src="../js/jquery.skitter.min.js"></script>
	<!-- fin slider -->
	<script src="../js/easyResponsiveTabs.js"></script>
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
	<script type="text/javascript" language="javascript">
	    $(document).ready(function() {
	      $('.box_skitter_large').skitter({
	        theme: 'clean',
	        // numbers_align: 'center',
	        // progressbar: true, 
	        // dots: true, 
	        // preview: true
	      });
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
			<h2>Nuestras habitaciones</h2>
			<div class="hline2 v3"></div>
			<div class="row">
			<div id="parentHorizontalTab">
	            <ul class="resp-tabs-list hor_1">
	                <li>Suite Junior</li>
	                <li>Ejecutiva Simple</li>
	                <li>Matrimonial</li>
	                <li>Doble</li>
	                <li>Triple</li>
	                <li>Familiar</li>
	            </ul>
	            <div class="resp-tabs-container hor_1">
	                <div> <!-- Suite junior -->
	                	<div class="container">
		                    <div class="row">
		                   		<div class="grid_8">
		                   			<!-- <div class="border_box"> -->
								        <div class="box_skitter box_skitter_large">
								          <ul>
								            <li>
								            	<a >
								            		<img src="img/suite-junior/1.jpg" class="circlesInside"/>
								            	</a>
								            </li>
								            <li>
								            	<a>
								            		<img src="img/suite-junior/2.jpg" class="circlesInside"/>
								            	 </a>
								            </li>
								            <li>
								            	<a>
								            		<img src="img/suite-junior/3.jpg" class="circlesInside"/>
								            	</a>
								            </li>
								            <li>
								            	<a>
								            		<img src="img/suite-junior/4.jpg" class="circlesInside"/>
								            	</a>
								            </li>
								            <li>
								            	<a >
								            		<img src="img/suite-junior/5.jpg" class="circlesInside"/>
								            	</a>
								            </li>
								          </ul>
								        </div>
								      <!-- </div> -->
		                   		</div>
		                   		<div class="grid_4">
		                   			<div class="dc_b">
		                   				<div class="dc_title">Servicios</div>
			                   			<ol class="rounded-list">
										    <li><a href="">Artículos de aseo gratuitos</a></li>
										    <li><a href="">Armario </a></li>
										    <li><a href="">Terraza</a></li>
										    <li><a href="">Sofá / Escritorio</a></li>
										    <li><a href="">TV / Canales por cable</a></li>
										    <li><a href="">Servicio de despertador</a></li>
										    <li><a href="">Reproductor de CD / DVD</a></li>
										    <li><a href="">Minibar</a></li>
										    <li><a href="">Teléfono</a></li>
										    <li><a href="">Ducha / Inodoro / Cuarto de Baño </a></li>
										    <li><a href="">Vista</a></li>
										</ol>
									</div>
		                   		</div>
		                    </div>
		                    <div class="row" id="dc_abc">
	                    		<div class="dc_contenedor">
	                    			<div class="txt_tile">Informacion Habitación Suite junior</div>
	                    			<div class="pull-left dctexto_habitacion">
		                    		Esta mini suite, cuenta con una decoración de estilo moderno clásico, y dispone de una conexión Wi Fi gratis ilimitada. Tiene capacidad para 2 adultos en una cama King.
		                    		</div>
                    				<div class="pull-right">
                    					<a href="" class="dc_btn_reservar ">Reservar</a>
                    				</div>
	                    		</div>
		                    </div>
		                </div>
	                </div>
	                <div><!-- Ejecutiva Simple -->
	                	<div class="container">
		                    <div class="row">
		                   		<div class="grid_8">
		                   			<!-- <div class="border_box"> -->
								        <div class="box_skitter box_skitter_large">
								          <ul>
								            <li>
								            	<a >
								            		<img src="img/ejecutiva-simple/1.jpg" class="circlesInside"/>
								            	</a>
								            </li>
								            <li>
								            	<a>
								            		<img src="img/ejecutiva-simple/2.jpg" class="circlesInside"/>
								            	 </a>
								            </li>
								            <li>
								            	<a>
								            		<img src="img/ejecutiva-simple/3.jpg" class="circlesInside"/>
								            	</a>
								            </li>
								            <li>
								            	<a>
								            		<img src="img/ejecutiva-simple/4.jpg" class="circlesInside"/>
								            	</a>
								            </li>
								            <li>
								            	<a >
								            		<img src="img/ejecutiva-simple/5.jpg" class="circlesInside"/>
								            	</a>
								            </li>
								          </ul>
								        </div>
								      <!-- </div> -->
		                   		</div>
		                   		<div class="grid_4">
		                   			<div class="dc_b">
		                   				<div class="dc_title">Servicios</div>
			                   			<ol class="rounded-list">
										    <li><a href="">Artículos de aseo gratuitos</a></li>
										    <li><a href="">Armario </a></li>
										    <li><a href="">Terraza</a></li>
										    <li><a href="">Sofá / Escritorio</a></li>
										    <li><a href="">TV / Canales por cable</a></li>
										    <li><a href="">Servicio de despertador</a></li>
										    <li><a href="">Reproductor de CD / DVD</a></li>
										    <li><a href="">Minibar</a></li>
										    <li><a href="">Teléfono</a></li>
										    <li><a href="">Ducha / Inodoro / Cuarto de Baño </a></li>
										    <li><a href="">Vista</a></li>
										</ol>
									</div>
		                   		</div>
		                    </div>
		                    <div class="row" id="dc_abc">
	                    		<div class="dc_contenedor">
	                    			<div class="txt_tile">Informacion Habitación Ejecutiva Simple</div>
	                    			<div class="pull-left dctexto_habitacion">
		                    		Esta habitación, ejecutiva cuenta con una decoración de estilo moderno clásico, y dispone de una conexión Wi Fi gratis ilimitada. Tiene capacidad para 3 adultos en tres camas individuales.
		                    		</div>
                    				<div class="pull-right">
                    					<a href="" class="dc_btn_reservar ">Reservar</a>
                    				</div>
	                    		</div>
		                    </div>
		                </div>
	                </div>
	                <div><!-- SMatrimonial -->
	                    <div class="container">
		                    <div class="row">
		                   		<div class="grid_8">
		                   			<!-- <div class="border_box"> -->
								        <div class="box_skitter box_skitter_large">
								          <ul>
								            <li>
								            	<a >
								            		<img src="img/matrimonial/1.jpg" class="circlesInside"/>
								            	</a>
								            </li>
								            <li>
								            	<a>
								            		<img src="img/matrimonial/2.jpg" class="circlesInside"/>
								            	 </a>
								            </li>
								            <li>
								            	<a>
								            		<img src="img/matrimonial/3.jpg" class="circlesInside"/>
								            	</a>
								            </li>
								            <li>
								            	<a>
								            		<img src="img/matrimonial/4.jpg" class="circlesInside"/>
								            	</a>
								            </li>
								            <li>
								            	<a >
								            		<img src="img/matrimonial/5.jpg" class="circlesInside"/>
								            	</a>
								            </li>
								          </ul>
								        </div>
								      <!-- </div> -->
		                   		</div>
		                   		<div class="grid_4">
		                   			<div class="dc_b">
		                   				<div class="dc_title">Servicios</div>
			                   			<ol class="rounded-list">
										    <li><a href="">Artículos de aseo gratuitos</a></li>
										    <li><a href="">Armario </a></li>
										    <li><a href="">Terraza</a></li>
										    <li><a href="">Sofá / Escritorio</a></li>
										    <li><a href="">TV / Canales por cable</a></li>
										    <li><a href="">Servicio de despertador</a></li>
										    <li><a href="">Reproductor de CD / DVD</a></li>
										    <li><a href="">Minibar</a></li>
										    <li><a href="">Teléfono</a></li>
										    <li><a href="">Ducha / Inodoro / Cuarto de Baño </a></li>
										    <li><a href="">Vista</a></li>
										</ol>
									</div>
		                   		</div>
		                    </div>
		                    <div class="row" id="dc_abc">
	                    		<div class="dc_contenedor">
	                    			<div class="txt_tile">Informacion Habitación Matrimonial</div>
	                    			<div class="pull-left dctexto_habitacion">
		                    		Esta habitación, ejecutiva cuenta con una decoración de estilo moderno clásico , y dispone de una conexión Wi Fi gratis ilimitada. Tiene capacidad para 2 adultos en una cama King.
		                    		</div>
                    				<div class="pull-right">
                    					<a href="" class="dc_btn_reservar ">Reservar</a>
                    				</div>
	                    		</div>
		                    </div>
		                </div>
	                </div>
	                <div><!-- Doble -->
	                    <div class="container">
		                    <div class="row">
		                   		<div class="grid_8">
		                   			<!-- <div class="border_box"> -->
								        <div class="box_skitter box_skitter_large">
								          <ul>
								            <li>
								            	<a >
								            		<img src="img/doble/1.jpg" class="circlesInside"/>
								            	</a>
								            </li>
								            <li>
								            	<a>
								            		<img src="img/doble/2.jpg" class="circlesInside"/>
								            	 </a>
								            </li>
								            <li>
								            	<a>
								            		<img src="img/doble/3.jpg" class="circlesInside"/>
								            	</a>
								            </li>
								            <li>
								            	<a>
								            		<img src="img/doble/4.jpg" class="circlesInside"/>
								            	</a>
								            </li>
								            <li>
								            	<a >
								            		<img src="img/doble/5.jpg" class="circlesInside"/>
								            	</a>
								            </li>
								          </ul>
								        </div>
								      <!-- </div> -->
		                   		</div>
		                   		<div class="grid_4">
		                   			<div class="dc_b">
		                   				<div class="dc_title">Servicios</div>
			                   			<ol class="rounded-list">
										    <li><a href="">Artículos de aseo gratuitos</a></li>
										    <li><a href="">Armario </a></li>
										    <li><a href="">Terraza</a></li>
										    <li><a href="">Sofá / Escritorio</a></li>
										    <li><a href="">TV / Canales por cable</a></li>
										    <li><a href="">Servicio de despertador</a></li>
										    <li><a href="">Reproductor de CD / DVD</a></li>
										    <li><a href="">Minibar</a></li>
										    <li><a href="">Teléfono</a></li>
										    <li><a href="">Ducha / Inodoro / Cuarto de Baño </a></li>
										    <li><a href="">Vista</a></li>
										</ol>
									</div>
		                   		</div>
		                    </div>
		                    <div class="row" id="dc_abc">
	                    		<div class="dc_contenedor">
	                    			<div class="txt_tile">Informacion Habitación Doble</div>
	                    			<div class="pull-left dctexto_habitacion">
		                    		Cuenta con TV por cable y terraza privada con vistas a la montaña.
		                    		</div>
                    				<div class="pull-right">
                    					<a href="" class="dc_btn_reservar ">Reservar</a>
                    				</div>
	                    		</div>
		                    </div>
		                </div>
	                </div>
	                <div><!-- Triple -->
	                    <div class="container">
		                    <div class="row">
		                   		<div class="grid_8">
		                   			<!-- <div class="border_box"> -->
								        <div class="box_skitter box_skitter_large">
								          <ul>
								            <li>
								            	<a >
								            		<img src="img/triple/1.jpg" class="circlesInside"/>
								            	</a>
								            </li>
								            <li>
								            	<a>
								            		<img src="img/triple/2.jpg" class="circlesInside"/>
								            	 </a>
								            </li>
								            <li>
								            	<a>
								            		<img src="img/triple/3.jpg" class="circlesInside"/>
								            	</a>
								            </li>
								            <li>
								            	<a>
								            		<img src="img/triple/4.jpg" class="circlesInside"/>
								            	</a>
								            </li>
								            <li>
								            	<a >
								            		<img src="img/triple/5.jpg" class="circlesInside"/>
								            	</a>
								            </li>
								          </ul>
								        </div>
								      <!-- </div> -->
		                   		</div>
		                   		<div class="grid_4">
		                   			<div class="dc_b">
		                   				<div class="dc_title">Servicios</div>
			                   			<ol class="rounded-list">
										    <li><a href="">Artículos de aseo gratuitos</a></li>
										    <li><a href="">Armario </a></li>
										    <li><a href="">Terraza</a></li>
										    <li><a href="">Sofá / Escritorio</a></li>
										    <li><a href="">TV / Canales por cable</a></li>
										    <li><a href="">Servicio de despertador</a></li>
										    <li><a href="">Reproductor de CD / DVD</a></li>
										    <li><a href="">Minibar</a></li>
										    <li><a href="">Teléfono</a></li>
										    <li><a href="">Ducha / Inodoro / Cuarto de Baño </a></li>
										    <li><a href="">Vista</a></li>
										</ol>
									</div>
		                   		</div>
		                    </div>
		                    <div class="row" id="dc_abc">
	                    		<div class="dc_contenedor">
	                    			<div class="txt_tile">Informacion Habitación Triple</div>
	                    			<div class="pull-left dctexto_habitacion">
		                    		Esta habitación, ejecutiva cuenta con una decoración de estilo moderno clásico, y dispone de una conexión Wi Fi gratis ilimitada. Tiene capacidad para 3 adultos en tres camas individuales.
		                    		</div>
                    				<div class="pull-right">
                    					<a href="" class="dc_btn_reservar ">Reservar</a>
                    				</div>
	                    		</div>
		                    </div>
		                </div>
	                </div>
	                <div><!-- Familiar -->
	                    <div class="container">
		                    <div class="row">
		                   		<div class="grid_8">
		                   			<!-- <div class="border_box"> -->
								        <div class="box_skitter box_skitter_large">
								          <ul>
								            <li>
								            	<a >
								            		<img src="img/familiar/1.jpg" class="circlesInside"/>
								            	</a>
								            </li>
								            <li>
								            	<a>
								            		<img src="img/familiar/2.jpg" class="circlesInside"/>
								            	 </a>
								            </li>
								            <li>
								            	<a>
								            		<img src="img/familiar/3.jpg" class="circlesInside"/>
								            	</a>
								            </li>
								            <li>
								            	<a>
								            		<img src="img/familiar/4.jpg" class="circlesInside"/>
								            	</a>
								            </li>
								            <li>
								            	<a >
								            		<img src="img/familiar/5.jpg" class="circlesInside"/>
								            	</a>
								            </li>
								          </ul>
								        </div>
								      <!-- </div> -->
		                   		</div>
		                   		<div class="grid_4">
		                   			<div class="dc_b">
		                   				<div class="dc_title">Servicios</div>
			                   			<ol class="rounded-list">
										    <li><a href="">Artículos de aseo gratuitos</a></li>
										    <li><a href="">Armario </a></li>
										    <li><a href="">Terraza</a></li>
										    <li><a href="">Sofá / Escritorio</a></li>
										    <li><a href="">TV / Canales por cable</a></li>
										    <li><a href="">Servicio de despertador</a></li>
										    <li><a href="">Reproductor de CD / DVD</a></li>
										    <li><a href="">Minibar</a></li>
										    <li><a href="">Teléfono</a></li>
										    <li><a href="">Ducha / Inodoro / Cuarto de Baño </a></li>
										    <li><a href="">Vista</a></li>
										</ol>
									</div>
		                   		</div>
		                    </div>
		                    <div class="row" id="dc_abc">
	                    		<div class="dc_contenedor">
	                    			<div class="txt_tile">Informacion Habitación Familiar</div>
	                    			<div class="pull-left dctexto_habitacion">
		                    		Esta habitación, ejecutiva cuenta con una decoración de estilo moderno clásico, y dispone de una conexión Wi Fi gratis ilimitada. Tiene capacidad para 3 adultos en tres camas individuales.
		                    		</div>
                    				<div class="pull-right">
                    					<a href="" class="dc_btn_reservar ">Reservar</a>
                    				</div>
	                    		</div>
		                    </div>
		                </div>
	                </div>
	            </div>
	        </div>
	        </div>
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
		</div>
	</section>
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

<script type="text/javascript">
    $(document).ready(function() {
        //Horizontal Tab
        $('#parentHorizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });

        // Child Tab
        $('#ChildVerticalTab_1').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true,
            tabidentify: 'ver_1', // The tab groups identifier
            activetab_bg: '#fff', // background color for active tabs in this group
            inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
            active_border_color: '#c1c1c1', // border color for active tabs heads in this group
            active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
        });

        //Vertical Tab
        $('#parentVerticalTab').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
</script>