<!DOCTYPE html>
<html>
<head>
  <title>Questão 4</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
  <h1 align="center">Quetão 4</h1>
  <div class="container">
    <form name="form_calculo" method="POST" action="calculo.php">
      <div class="form-group">
        <label for="metro">Escreva distância percorrida em metros(m)</label>
        <input type="number" class="form-control" id="metro" name="metro">
      </div>
      <div class="form-group">
        <label for="tempo">Escreva tempo </label>
        <input type="number" class="form-control" id="tempo" name="tempo">
      </div>
      <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
  </div>
  

</body>
</html>

