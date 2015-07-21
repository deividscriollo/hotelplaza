<?php 
// menu de frontal
function menu(){
	print'
		<header id="header">
			<div id="stuck_container">
				<div class="container">
					<div class="row">
						<div class="grid_3">
							<div class="grid_3">
								<div class="dc_contexto_reserva">
									593 (06) 5001500
								</div>
							</div>
						</div>
						<div class="grid_6">
								<div class="dvian"><img src="../images/logo.png" alt="Hotel Plaza Victoria"></div>
						</div>
						<div class="grid_3">
							<div class="dc_btn_reserva">
								RESERVACIÓN
							</div>
						</div>
					</div>
				</div>';
				error_reporting(0);
				$url = $_SERVER['PHP_SELF'];
				$acus = parse_url($url, PHP_URL_PATH);
				$acus = split ('/', $acus);
				// print($acus[3]);
				print'
				<nav>
					<div class="container">
						<ul class="sf-menu">
							<li ';if($acus[3]=='index')
								print'class="current"';
								print'><a href="../index/">Home<strong></strong></a></li>
							<li ';if($acus[3]=='habitacion'||$acus[3]=='habitacion2')
								print'class="current"';
								print'><a href="../habitacion/">Habitaciones<strong></strong></a></li>
							<li ';if($acus[3]=='servicios')
								print'class="current"';
								print'><a href="../servicios/">Servicios<strong></strong></a></li>
							<li ';if($acus[3]=='galeria')
								print'class="current"';
								print'><a href="../galeria/">Galeria<strong></strong></a></li>
							</li>
							<li ';if($acus[3]=='paquetes')
								print'class="current"';
								print'><a href="../paquetes/">Paquetes<strong></strong></a></li>
							<li ';if($acus[3]=='contactos')
								print'class="current"';
								print'><a href="../contactos/">Contactos<strong></strong></a></li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
	';
}

// procesando funcion pie de pagina footer 
function footer(){
	print'
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="grid_12">
						<div class="wrapper  wow fadeInRight">
							<h1><a href="index.php"><img src="../images/logo_footer.png" alt="Hotel Plaza Victoria"></a> </h1>
						</div>
						<p class="txt_priv wow fadeInLeft">&copy; <span id="copyright-year"></span> | <a href="politicas.php">Politicas de Privacidad</a></p>

					</div>
				</div>
			</div>
		</footer>
	';
}
?>