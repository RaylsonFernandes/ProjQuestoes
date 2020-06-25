<!DOCTYPE html>
<html>
<head>
	<title>Questão 9 - Resultado</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<h1 align="center">Quetão 9 - Resultado</h1>
  	<div class="container">
  		<div class="jumbotron jumbotron-fluid">
  			<div class="container">
  				<h1 class="display-4">Resultado</h1>
  				<?php 
  					$valor = $_POST['valor'];
  					$valorFinal = $valor + ( $valor * 0.16 );
            $parcela = $valorFinal / 10;

  					echo "<p class='lead'>Valor da parcela: " .$parcela. "</p>";
            echo "<p class='lead'>Valor total: " .$valorFinal. "</p>";
  				 ?>
  			</div>
  		</div>
  	</div>
</body>
</html>