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
									593 (06) 5001500 / 2600067 / 2600887
								</div>
							</div>
						</div>
						<div class="grid_6">
							<h1 class="wow fadeInLeft">
								<a href="index.php"><img src="images/logo.png" alt="Hotel Plaza Victoria" width="100%"></a>
							</h1>
						</div>
						<div class="grid_3">
							<div class="dc_btn_reserva">
								RESERVACIÓN
							</div>
						</div>
					</div>
					
				</div>
				<nav id="dc_gual">
					<div class="container">
						<ul class="sf-menu">
							<li><a href="index.php">Home<strong></strong></a></li>
							<li><a href="habitacion.php">Habitaciones<strong></strong></a></li>
							<li><a href="servicios.php">Servicios<strong></strong></a></li>
							<li><a >Galería<strong></strong></a>
								<ul class="submenu">								
									<li><a href="imagenes.php">Imagenes</a></li>								
									<li><a href="video.php">Video</a></li>
								</ul>
							</li>
							<li class="current"><a href="paquetes.php">Paquetes<strong></strong></a></li>
							<li id="last-li"><a href="contactos.php">Contactos<strong></strong></a></li>
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
							<h1><a href="index.php"><img src="images/logo_footer.png" alt="Hotel Plaza Victoria"></a> </h1>
						</div>
						<p class="txt_priv wow fadeInLeft">&copy; <span id="copyright-year"></span> | <a href="politicas.php">Politicas de Privacidad</a></p>

					</div>
				</div>
			</div>
		</footer>
	';
}
?>