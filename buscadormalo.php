<?php
include "conexion.php";
 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Alegram</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<script src="jss/jquery.js"></script>
	<script src="jss/jquery.dataTables.min.js"></script>

	

	<link rel="stylesheet" href="css/estilos.css">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- animatedresponsiveImagegrid  -->
	<link rel="stylesheet" href="css/animatedresponsiveImagegrid.css">
	<!-- Magnifoc Popup  -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<nav id="fh5co-main-nav" role="navigation">
		<div class="js-fullheight fh5co-table">
			<div class="fh5co-table-cell js-fullheight">
				<ul>
					<li class="active"><a href="index.php">Inicio</a></li>
					<?php if (@$_SESSION['quien']>0){?>
						<li><a href="galeria.php">Galeria</a></li>
					<?php } ?>

					<?php if (@$_SESSION['quien']>0){?>
					<?php } else { ?>
						<li><a href="login.php">Login</a></li>
					<?php } ?>
				
					<?php if (@$_SESSION['quien']>0){?>
						<li><a href="subidafotos.php?id_u=<?php echo $_SESSION['quien']; ?>">Subir fotos</a></li>
					<?php } ?>

					<?php if (@$_SESSION['quien']>0){?>
						<li><a href="eliminarfoto.php?id_u=<?php echo $_SESSION['quien']; ?>">Eliminar fotos</a></li>
					<?php } ?>

					<?php if (@$_SESSION['quien']>0){?>
					<?php } else { ?>
						<li><a href="registro.php">Registro</a></li>
					<?php } ?>
					<li><a href="buscador.php">Buscador</a></li>


				</ul>
			</div>
		</div>
	</nav>
	
	<div id="fh5co-page">
		<header>
			<div class="container">
				<div class="fh5co-navbar-brand">
					<h1 class="text-center"><a class="fh5co-logo" href="index.php"><i class="icon-camera2"></i></a></h1>
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
				</div>
			</div>
		</header>

		<div id="fh5co-intro-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 animate-box text-center">
						<h2 class="intro-heading">

						
					</div>
				</div>
			</div>
		</div>
	
			<div class="container">
				<div id="ri-grid" class="ri-grid animate-box">
					
					<header>
						<div class="header-top">
							<div class="navegacion">
								<input type="search" placeholder="Buscar . . ." id="inputBusqueda">
							</div>
						</div>
						<div class="search" id="search">
							<table class="search-table" id="searchTable">
								<thead>
									<tr>
										<td></td>
									</tr>
								</thead>
								<tbody>
									<?php 
									$sql="SELECT usuarios.nombre, usuarios.id FROM usuarios";
									$q=mysqli_query($conex,$sql);
									while ($ver=mysqli_fetch_array($q)) { ?>

									<tr>
										<td><a href="buscar.php?id=<?php echo $ver[1];?>"> <?php echo $ver[0]; ?></a></td>
									</tr>
									<?php } ?>
									
								</tbody>
							</table>
						</div>
					</header>

		<div class="wrap"> </div>
		</div>
		<div class="fh5co-counters" style="background-image: url(images/hero.jpg);" data-stellar-background-ratio="0.5" id="counter-animate">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box">
						<div class="heading-section">
							<h2>Contador</h2>
						</div>
					</div>
				</div>
				<div class="fh5co-narrow-content animate-box">
					<div class="row" >
						<div class="col-md-5 text-center"> 
							<?php 
								$sql="SELECT * FROM usuarios"; 
								$q1=mysqli_query($conex,$sql);
								$cuantos=mysqli_num_rows($q1);

							?>
							<span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $cuantos; ?>" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Client</span>
						</div>
						<div class="col-md-5 text-right">
							<?php 
								$sql="SELECT * FROM fotos"; 
								$q1=mysqli_query($conex,$sql);
								$cuantos=mysqli_num_rows($q1);

							?>
							<span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $cuantos; ?>" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">fotos</span>
						</div>
					</div>
				</div>
			</div>
		<footer>
			<div id="footer">
				<div class="container">
			
					<div class="row copy-right">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icon">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright 2016 Free Html5 <a href="#">Focus</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash </a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- gridrotator -->
	<script type="text/javascript" src="js/jquery.gridrotator.js"></script>
	<!-- Magnific Popup -->
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>
	
	<script type="text/javascript">	
		$(function() {
		
			$( '#ri-grid' ).gridrotator( {
				rows : 3,
				// number of columns 
				columns : 6,
				w1024 : { rows : 3, columns : 5 },
				w768 : {rows : 3,columns : 4 },
				w480 : {rows : 3,columns : 3 },
				w320 : {rows : 2,columns : 2 },
				w240 : {rows : 1,columns : 1 },
				preventClick : false
			} );
		
		});
	</script>
	
	<script src="jss/buscador.js"></script>
	</body>
</html>

