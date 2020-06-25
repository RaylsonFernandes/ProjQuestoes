<!DOCTYPE html>
<html>
<head>
	<title>Questão 5</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<h1 align="center">Questão 5</h1>
  	<div class="container">
  		<div class="jumbotron jumbotron-fluid">
  			<div class="container">
  				<h1 class="display-4">Resultado</h1>
  				<?php 
            $salario = 1000;//salario
            $aumento = 0.015;//percentual de aumento
            $ano = 2016;
            for($i=0;$i<5;$i++){
              $salario = $salario + ($salario * $aumento);
              $salarioFinal[$i] = $salario;
              echo "<p class='lead'>O salario no ano de " .$ano. " é: " .number_format($salarioFinal[$i],2). "</p>";
              $ano ++;
            }
            
          ?>
  			</div>
  		</div>
  	</div>
</body>
</html>