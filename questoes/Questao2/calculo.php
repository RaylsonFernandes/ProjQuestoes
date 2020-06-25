<!DOCTYPE html>
<html>
<head>
	<title>Questão 1 - Média Resultado</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<h1 align="center">Quetão 2 - Resultado</h1>
  	<div class="container">
  		<div class="jumbotron jumbotron-fluid">
  			<div class="container">
  				<h1 class="display-4">Média</h1>
  				<?php 
  					$val1 = $_POST['numero1'];
  					$val2 = $_POST['numero2'];
            $val3 = $_POST['numero3'];
  					$media = ($val1 + $val2 + $val3) / 3;
  					echo "<p class='lead'>A média é: " .number_format($media,2). "</p>";
  				 ?>
  			</div>
  		</div>
  	</div>
</body>
</html>