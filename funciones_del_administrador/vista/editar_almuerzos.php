<?php

	$conexion=mysqli_connect('localhost', 'root', '', 'restaurante');
	mysqli_query($conexion, "SET NAMES 'utf8'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">
	
	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	
	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />
	
	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />
	
	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/all.css">
	
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link rel="shortcut icon" type="image/png" href="img/restaurante/favicon.png">
	
    <title>Document</title>
</head>
<body>

                        <table class="table table-striped table-responsive"> 
							<tr>
								<td>#</td>
								<td>Nombre</td>
								<td>Precio</td>
							</tr>

							<?php

								$sql="SELECT * from almuerzo";
								$result=mysqli_query($conexion,$sql);

								while($mostrar=mysqli_fetch_array($result)){

			

							?>

							<tr>
								<td><?php echo $mostrar['idalmuerzo'] ?></td>
								<td><?php echo $mostrar['nombrealmuerzo'] ?></td>
								<td><?php echo $mostrar['valor'] ?></td>							
							</tr>
							<?php 
		
							}
		
							?>
							</table>
								




							<div id="preloader">
								<div class="preloader">
									<span></span>
									<span></span>
									<span></span>
									<span></span>
								</div>
							</div>
							<!-- /Preloader -->
							
							<!-- jQuery Plugins -->
							<script type="text/javascript" src="../../js/jquery.min.js"></script>
							<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
							<script type="text/javascript" src="../../js/owl.carousel.min.js"></script>
							<script type="text/javascript" src="../../js/jquery.magnific-popup.js"></script>
							<script type="text/javascript" src="../../js/main.js"></script>
							<script src="js/all.js"></script>
							<link rel="stylesheet" href="../../css/estilo.css">
</body>
</html>