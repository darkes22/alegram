<?php 
include "conexion.php";
	extract($_POST);

		$sql="SELECT correo FROM usuarios where correo='$correo' or alias='$alias'";
        $q=mysqli_query($conex,$sql);
        if(mysqli_num_rows($q)>0)
        {
            header("location:registro.php?ya"); //existe correo o alias
        }
        else
        {
            $clave=md5($clave);
			$sql1="INSERT INTO usuarios VALUES ('','$nombre','$alias','$correo','$clave',1)";
            $q1=mysqli_query($conex,$sql1);
           
        }


	
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


	<!-- General meta information -->
	<title>Alegram</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="robots" content="index, follow" />
	<meta charset="utf-8" />
	<!-- // General meta information -->
	
	
	<!-- Load Javascript -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.query-2.1.7.js"></script>
	<script type="text/javascript" src="js/rainbows.js"></script>
	<!-- // Load Javascipt -->

	<!-- Load stylesheets -->
	<link type="text/css" rel="stylesheet" href="xHTML/css/style.css" media="screen" />
	<!-- // Load stylesheets -->
	
<script>


	$(document).ready(function(){
 
	$("#submit1").hover(
	function() {
	$(this).animate({"opacity": "0"}, "slow");
	},
	function() {
	$(this).animate({"opacity": "1"}, "slow");
	});
 	});


</script>
	
</head>
<body>

	<div id="wrapper">
		<div id="wrappertop"></div>

		<div id="wrappermiddle">

			<div align="center"> Registrado exitosamente!<br> <a href="index.php">Volver.</a></div>

		</div>

		<div id="wrapperbottom"></div>

	</div>

</body>
</html>





