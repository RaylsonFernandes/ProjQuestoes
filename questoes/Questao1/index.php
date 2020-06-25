<!DOCTYPE html>
<html>
<head>
  <title>Questão 1</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
  <h1 align="center">Quetão 1</h1>
  <div class="container">
    <form name="form_calculo" method="POST" action="calculo.php">
      <div class="form-group">
        <label for="numero1">Escreva primeiro número</label>
        <input type="number" class="form-control" id="numero1" name="numero1">
      </div>
      <div class="form-group">
        <label for="numero2">Escreva segundo número</label>
        <input type="number" class="form-control" id="numero2" name="numero2">
      </div>
      <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
  </div>
  

</body>
</html>

