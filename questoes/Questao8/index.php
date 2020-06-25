<!DOCTYPE html>
<html>
<head>
  <title>Questão 8</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
  <h1 align="center">Quetão 8</h1>
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
      <div class="form-group">
        <label for="operacao">Selecione operação</label>
        <select class="custom-select" name="operacao">
          <option disabled selected> - </option>
          <option value="soma">Soma</option>
          <option value="subtracao">Subtracao</option>
          <option value="mutiplicacao">Mutiplicacao</option>
          <option value="divisao">Divisao</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
  </div>
  

</body>
</html>

