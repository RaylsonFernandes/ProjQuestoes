<!DOCTYPE html>
<html>
<head>
	<title>Questão 4 - Resultado</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<h1 align="center">Quetão 4 - Velocidade</h1>
  	<div class="container">
  		<div class="jumbotron jumbotron-fluid">
  			<div class="container">
  				<h1 class="display-4">Velocidade em Km/h</h1>
  				<?php 
  					$metro = $_POST['metro'];
  					$tempo = $_POST['tempo'];
  					$result = $metro / $tempo;
            $velocidade = $result * 3.6;
  					echo "<p class='lead'>A velocidade é: " .$velocidade. " Km/h</p>";
  				 ?>
  			</div>
  		</div>
  	</div>
</body>
</html>