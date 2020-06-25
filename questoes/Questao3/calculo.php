<!DOCTYPE html>
<html>
<head>
	<title>Questão 3 - Cálculo dos quadrados</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<h1 align="center">Quetão 3 - Resultado</h1>
  	<div class="container">
  		<div class="jumbotron jumbotron-fluid">
  			<div class="container">
  				<h1 class="display-4"></h1>
  				<?php 
  					$n1 = $_POST['numero1'];
  					$n2 = $_POST['numero2'];
            //calculo dos quadrados
            $n1 = $n1 * $n1;
            $n2 = $n2 * $n2;
            //soma dos quadrados
  					$result = $n1 + $n2;
            echo "<p class='lead'>O quadrado do primeiro número é: " .$n1. "</p><br>";
            echo "<p class='lead'>O quadrado do segundo número é: " .$n2. "</p><br>";
  					echo "<p class='lead'>A SOMA DOS QUADRADOS É: " .$result. "</p><br>";
  				 ?>
  			</div>
  		</div>
  	</div>
</body>
</html>