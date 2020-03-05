<?php session_start();
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
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle active"><i></i></a>
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
					<?php } else { ?>
						<li><a href="registro.php">Registro</a></li>
					<?php } ?>					
					<?php if (@$_SESSION['quien']>0){?>
						<li><a href="subidafotos.php?id_u=<?php echo $_SESSION['quien']; ?>">Subir fotos</a></li>
					<?php } ?>
					<?php if (@$_SESSION['quien']>0){?>
						<li><a href="eliminarfoto.php?id_u=<?php echo $_SESSION['quien']; ?>">Eliminar fotos</a></li>
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
						<h2 class="intro-heading"> <?php if (@$_SESSION['quien']>0){ print "Bienvenido: " .@$_SESSION['nombre'];} ?> </h2>
						
						<?php if (@$_SESSION['quien']>0){ ?>
						<a href="salir.php">Cerrar sesion</a>
						<?php } ?>

						
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-photos-section">
			<div class="container">
				
	<div id="wrapper">
		<div id="wrappertop"></div>

		<div id="wrappermiddle">

			<div align="center">
							<?php $sql="SELECT * FROM usuarios where id='$_GET[mod]'"; 
								$query=mysqli_query($conex,$sql);
								$ver=mysqli_fetch_array($query);			
		 					?>

				<form id="formulario" name="f1"	method="post" action="modi2.php">
					<table>
						<input type="hidden" name="oculto" value="<?php echo $ver[0];?>">
						<tr>
							<td><label for="nombre">Nombre:</label></td>
			 				<td><input type="text" name="nombre" value="<?php echo $ver[1];?>" id="name"></td>
						</tr>
						<tr>
							<td><label for="clave">Clave:</label></td>
			  					<td><input type="password" name="clave" id="password1" required></td>
						</tr>
						<tr>
							<td><label for="clave">Repita clave:</label></td>
			  					<td><input type="password" name="clave1" id="password2" required></td>
						</tr>
					</table>		 	
			 	
			  	<input type="button" name="button" value="Modificar" onclick="validar()">
			</form>
			<br>
			<a href="index.php">Volver al inicio</a>
		</div>


		<script type="text/javascript">
			function validar() {
				var error =""
				var exp1= /^(([a-zA-Z0-9_\.\-])+\@)(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9\.]{2,10})+$/;

				if (document.getElementById('name').value=="") {
					error +="no debe dejar el nombre vacio\n"
					document.getElementById('name').style.borderColor='#F00'
						}

				else if ((document.getElementById('password1').value != document.getElementById('password2').value) || (document.getElementById('password1').value=="") )
				 {
					error+="las contraseñas no coinciden o esta vacio  \n "
						document.getElementById('password1').style.borderColor='#F00'
						document.getElementById('password2').style.borderColor='#F00'
		
				} 

				if (error != "") 
				{
					alert(error)
				}
				else
				{
					document.getElementById('formulario').submit()
				}



			}
		</script>

		</div>

		<div id="wrapperbottom"></div>

	</div>
			</div>
			</div>
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
								$sql="SELECT * FROM usuarios where status=1"; 
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
								<a href="https://www.facebook.com/Ale.Mayora22"><i class="icon-facebook2"></i></a>
							</p>
							<p>Copyright 2018.Todos los derechos reservados.<br>
							Alex_b27@hotmail.com</i> 
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

	</body>
</html>

