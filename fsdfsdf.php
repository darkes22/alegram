<?php 
session_start();
include "conexion.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Alegram</title>
	
</head>
<style type="text/css">
	img
	{
		width: 200px;
		height: 200px;
	}
</style>
<body>
	<h2>Fotos de: <?php print $_SESSION['nombre']; ?></h2>
	
	<table border="1">
		<tr>
			<th>titulo</th>
			<th>descripcion</th>
			<th>imagen</th>
			<th>Eliminar</th>
		</tr>

		<?php 
	$sql1="SELECT * FROM fotos where id_usuario=$_SESSION[quien]";
	$q1=mysqli_query($conex,$sql1);
	$cuantos=mysqli_num_rows($q1);
	$pag=ceil($cuantos/8);
	if(@!$_GET['va'])
	{
		$ini=0;
	}
	else 
		{
			$ini=((@$_GET['va']-1)*8);
		}
	$sql="SELECT * FROM fotos where id_usuario=$_SESSION[quien] limit $ini,8";
	$q=mysqli_query($conex,$sql);
	while ($ver=mysqli_fetch_array($q)) { ?>		
		<tr>
			<td><?php echo $ver[2]; ?></td>
			<td><?php echo $ver[3]; ?></td>
			<td><img src="<?php echo $ver[4]; ?>"></td>
			<td><a href="eli.php?eli=<?php echo $ver[0];?>">X</a></td>
		</tr> 
		<?php } ?>

		<div id="numeritos" align="left">
		<?php for ($i=1; $i<=$pag ; $i++) { ?>
			<a href="index.php?va=<?php echo $i; ?>">
		<?php echo $i." ";?> </a>
		<?php } ?> 
	</div>	

		

	
</body>

</html>
<a href="index.php">Volver.</a>
