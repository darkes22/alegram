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

						<?php if (@$_SESSION['quien']>0){?>
						<li><a href="modificar.php?id_u=<?php echo $_SESSION['quien']; ?>">Configuracion</a></li>
					<?php } ?>

					<?php if (@$_SESSION['quien']>0){?>
						<li><a href="editarfoto.php?id_u=<?php echo $_SESSION['quien']; ?>">Editar foto</a></li>
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
				<h3 align="	center">Alegram</h3>
			</div>
		</header>
		<div id="fh5co-intro-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 animate-box text-center">
						<h2 class="intro-heading"> <?php if (@$_SESSION['quien']>0){ print "Bienvenido, " .@$_SESSION['nombre'];} ?> </h2>
						
						<?php if (@$_SESSION['quien']>0){ ?>
						<a href="salir.php">Cerrar sesion</a>
						<?php } ?>

						
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-photos-section">
			<div class="container">
				<div>

						<h2 align="center">Alegram</h2>
						<h3 align="center">Una página para compartir tus fotos.</h3>
						<h3>Proyecto final del diplomado de programación web realizado en el Instituto de Comunicación Web <b>UNEWEB</b>.</h3>

						<b>1.Objetivos del proyecto</b>
						<p align="justify">
							
							<ul>
								<li>Objetivo general: la presente página web tiene como objetivo ser una aplicación web donde los usuarios registrados pueden compartir sus fotos con otros usuarios.</li> <br>

								<li>Propósito: el propósito de este proyecto es realizar una concexión entre varios usuarios para que puedan compartir sus fotos favoritas con la comunidad de <b>ALEGRAM</b> y que las fotos se hagan públicas.</li>
								 <br>

								<li>Meta: se logró realizar la pagina web con varias funcionalidades que le permiten a los usuarios registrarse, subir fotos, editar fotos, eliminar fotos, ver galerias de otros usuarios, entre otros.</li><br>
							</ul>
						</p>
						<b>2. Área de desarrolo del proyecto: Programación web</b>	

							
								<ul>
									<li>Desarrollo web es un término que define la creación de sitios web para Internet o una intranet. Para realizar el proyecto se uso como lenguaje de programa PHP, lenguaje de estilo CSS y el lenguaje de marcado HTML.</li>
								</ul> <br>
							

						<b>3. Descripción del Proyecto</b>
						
							<ul>
								<li>El proyecto se realizó para que los usuarios registrados en <b>ALEGRAM</b> puedan compartir sus fotos favoritas con otros usuarios registrados, los usuarios tienen la libertad de manipular sus fotos, es decir, pueden publicar, editar o eliminar sus fotos.</li><br>

								<li>Para la esquematización de la base de datos fue utilizada la tecnia de un modelo relacional y para la construcción de la base de datos se utilizo el programa XAMPP; para el diseño general de la pagina (Front-end) usamos se utilizo una platilla descargada de internet, la cual fue editada posteriormente con mis gustos (utilizando html y css) y para la programacion de las funcionalidades (Back-end) se utilizó la herramienta de editos de texto Sublime Text3, programando con lenguaje PHP.</li>
							
							</ul><br>

						<b>4. Alcance del proyecto</b>
							<ul>
								<li>En el inicio (index.php) se muestran las fotos más recientes publicadas por los usuarios registrados, tiene un menú que se despliega en una ventana modal la cual tiene las siguientes opciones que mencionare a continuación.</li>
								<li>Registro de usuarios: se creó una pagina con el formulario para registar al usuario.</li>
								<li>Login: se creó una pagina donde el usuario tiene que escribir su correo y clave con los que se registró para acceder al sistema.</li>
								<li>Buscador: se creo una pagina donde el usuario escribe el nombre o usuario de la persona a buscar, dandole click en su nombre puede ir a la galería de dicho usuario para ver sus fotos.</li>
								<li>Galeria: es una opcion la cual solo se muestra a los usuarios que esten registrados y logeados en la pagina, contiene las fotos subidas por dicho usuario.</li>
								<li>Subir fotos: se creo una pagina con un formulario para que el usuario pueda subir fotos a la pagina y compartirla con los demas usuarios.</li>
								<li>Eliminar/editar fotos:se creo una pagina donde el usuario puede eliminar o editar su foto.</li>
								<li>Configuración: se creo una pagina donde el usuario puede modificar su nombre y clave.</li> <br>
								<b>No realizado:</b> <br>
								<li>Sistema para indicar si a una persona le gusta o no una foto.</li>
								<li>Sistema para hacer comentarios de las fotos publicadas</li>
								<br><br>
								-Los resultados fueron obtenidos al realizar una serie de pruebas para estar seguros de la funcionalidad de dicha página.
							</ul>
						<b>5. Cronograma de actividades</b>
							<br>
							<table border="1">
								<tr align="center">
									<td colspan="5">Semana 1</td>
									<td colspan="5">Semana 2</td>
								</tr>
								<tr>
									<td>Lunes</td>
									<td>Martes</td>
									<td>Miércoles</td>
									<td>Jueves</td>
									<td>Viernes</td>
									<td>Lunes</td>
									<td>Martes</td>
									<td>Míercoles</td>
									<td>Jueves</td>
									<td>Viernes</td>
								</tr>
								<tr>
									<td colspan="5">
										*Realización del modelo relacional de la base de datos. <br>
										*Construcción de la base de datos en Mysql. <br>
										*Busqueda de la plantilla para el diseño Front-end. <br>
									</td>
									<td>*Creación del formulario de registro.<br>
										*Creación del Login. <br>
										*Creación del index.php. <br>
										*Modificación del diseño web.
									</td>
									<td>
										*Creación del buscador. <br>
										*Creación de la galeria. <br>
										*Creación de edición de fotos. <br>
										
									</td>
									<td>
										*Creación de configuración. <br>
										*Creación de eliminar/editar. <br>
																				
									</td>
									<td>
										*Realización del Informe final.
									</td>
									<td>
										*Modificaciones finales y entrega del proyecto.
									</td>
								</tr>

								
							</table>

						</p>



						












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
							<p>¿Quieres saber más? <a href="informacion.php"> ------>Click AQUI!<------ </a></p>
							<p>Proyecto realizado para el diplomado web (uneweb).</p>
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

