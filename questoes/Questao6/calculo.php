<!DOCTYPE html>
<html>
<head>
	<title>Questão 6 - Resultado</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<h1 align="center">Quetão 6 - Resultado</h1>
  	<div class="container">
  		<div class="jumbotron jumbotron-fluid">
  			<div class="container">
  				<h1 class="display-4">Desconto</h1>
  				<?php 
  					$valor = $_POST['valor'];
  					$desconto = $valor * 0.07;
            $valorFinal = $valor - $desconto;
  					echo "<p class='lead'>Valor original: " .$valor. "</p>";
            echo "<p class='lead'>Valor do desconto: " .number_format($desconto,2). "</p>";
            echo "<p class='lead'>Valor com desconto: " .number_format($valorFinal,2). "</p>";
  				 ?>
  			</div>
  		</div>
  	</div>
</body>
</html>