<?php require('../menu/index.php'); ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Hotel Plaza Victoría</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="icon" type="image/png" href="../dist/img/logo.png" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="../dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../dist/font-awesome/4.2.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="../dist/fonts/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="../dist/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="../dist/css/bootstrap-editable.min.css" />
		<link rel="stylesheet" href="../dist/css/jquery.gritter.min.css" />
		<link rel="stylesheet" href="../dist/css/chosen.min.css" />

		
		<link rel="stylesheet" href="../dist/css/datepicker.min.css" />
		<link rel="stylesheet" href="../dist/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="../dist/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="../dist/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="../dist/css/colorpicker.min.css" />
		<link rel="stylesheet" href="../dist/css/ui.jqgrid.min.css" />
		

		<!-- ace styles -->
		<link rel="stylesheet" href="../dist/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />		

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="../dist/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="../dist/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="../dist/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="../dist/js/html5shiv.min.js"></script>
		<script src="../dist/js/respond.min.js"></script>
		<![endif]-->
		
	</head>

	<body class="no-skin">
		<!-- cabecera menu -->		
		<?php cabecera_menu(); ?>
		<!-- fin cavecera menu -->

		<div class="main-container" id="main-container">
			<!-- menu lateral -->
			<?php lateral_menu(); ?>
			<!-- fin menu lateral -->

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Inicio</a>
							</li>

							<li>
								<a href="#">Administración</a>
							</li>
							<li class="active">Lista de cargos</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12 col-sm-12 widget-container-col">
								<div class="widget-box">
									<div class="widget-header">
										<h5 class="widget-title"><i class="ace-icon fa fa-user"></i> Cargos</h5>

										<div class="widget-toolbar">
											<a href="#" data-action="fullscreen" class="orange2">
												<i class="ace-icon fa fa-expand"></i>
											</a>

											<a href="#" id="reload" data-action="reload">
												<i class="ace-icon fa fa-refresh"></i>
											</a>
										</div>
									</div>

									<div class="widget-body">
										<div class="widget-main">
											<div class="row">																								
												<div class="col-xs-10">																											
                                    				 <table id="grid-table"></table>
                                   					 <div id="grid-pager"></div>
												</div>												
											</div>
										</div>
									</div>
								</div>
							</div>		
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			
			 <!-- Modal -->
		   <!-- inicion llamar funcion footer -->
			<?php footer(); ?>
			<!-- fin llamar funcion footer -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="../dist/js/jquery.2.1.1.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="../dist/js/jquery.1.11.1.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='../dist/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='../dist/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../dist/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="../dist/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="../dist/js/bootstrap-datepicker.min.js"></script>
		<script src="../dist/js/jquery.maskedinput.min.js"></script>
		<script src="../dist/js/bootstrap-editable.min.js"></script>
		<script src="../dist/js/ace-editable.min.js"></script>			
		<script src="../dist/js/jquery.gritter.min.js"></script>
		<script src="../dist/js/chosen.jquery.min.js"></script>
		<script src="../dist/js/ace-elements.min.js"></script>
		<script src="../dist/js/ace.min.js"></script>	
		
		<script src="../dist/js/grid.locale-en.js"></script>	
		<script src="../dist/js/jquery.jqGrid.min.js"></script>	
		<!-- inline scripts related to this page -->		
		<!--systems scrips -->
		<script src="cargo.js"></script>		
		<script src="../procesos/funciones_generales.js"></script>		
		
		<!-- -->
	</body>
</html>
