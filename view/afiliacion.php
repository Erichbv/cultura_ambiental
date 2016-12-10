<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ficha de Afiliacion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Ficha de Afiliacion</h2>
  <form action="index.php" method="POST">
    <div class="form-group">
      <label for="nombre">NOMBRE:</label>
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="INGRESE NOMBRE" required>
    </div>
    <div class="form-group">
      <label for="apellido">APELLIDO:</label>
      <input type="text" class="form-control" id="apellido" name="apellido" placeholder="INGRESE APELLIDO" required>
    </div>
    <div class="form-group">
      <label for="dni">DNI:</label>
      <input type="number" class="form-control" id="dni" name="dni"  placeholder="INGRESE DNI" required>
    </div>
    <div class="form-group">
      <label for="direccion">DIRECCION:</label>
      <input type="text" class="form-control" id="direccion" name="direccion" placeholder="INGRESE DIRECCION" required>
    </div> 
    <div class="form-group">
      <label for="telefono">TELEFONO:</label>
      <input type="number" class="form-control" id="telefono" name="telefono" placeholder="INGRESE TELEFONO" required>
    </div>
    <div class="form-group">
      <label for="sexo">SEXO:</label>
      <select name="sexo">
      <option value="#"></option>
        <option value="M">MASCULINO</option>
        <option value="F">FEMENINO</option>
      </select>
      </div>         
    <div class="checkbox" required>
      <label><input type="checkbox"> ACEPTO</label>
    </div>
    <button type="submit" class="btn btn-default">REGISTRAR</button>
    </form>
    <BR>
</div>
  <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js" type="javascript"></script>
</body>
</html>
