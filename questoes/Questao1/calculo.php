<!DOCTYPE html>
<html>
<head>
	<title>Questão 1 - Resultado</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<h1 align="center">Quetão 1 - Resultado</h1>
  	<div class="container">
  		<div class="jumbotron jumbotron-fluid">
  			<div class="container">
  				<h1 class="display-4">Resultado</h1>
  				<?php 
  					$n1 = $_POST['numero1'];
  					$n2 = $_POST['numero2'];
  					$result = ($n1 + $n2) * $n1;
  					echo "<p class='lead'>O resultado é: " .$result. "</p>";
  				 ?>
  			</div>
  		</div>
  	</div>
</body>
</html>