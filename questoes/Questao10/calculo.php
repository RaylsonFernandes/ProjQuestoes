<!DOCTYPE html>
<html>
<head>
	<title>Questão 10 - Resultado</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<h1 align="center">Quetão 10 - Resultado</h1>
  	<div class="container">
  		<div class="jumbotron jumbotron-fluid">
  			<div class="container">
  				<h1 class="display-4">Consumo médio</h1>
  				<?php 
  					$distancia = $_POST['distancia'];
  					$litro = $_POST['litro'];
  					$consumo = $distancia / $litro;
  					echo "<p class='lead'>O consumo médio do veiculo é: " .$consumo. " Km/l.</p>";
  				 ?>
  			</div>
  		</div>
  	</div>
</body>
</html>