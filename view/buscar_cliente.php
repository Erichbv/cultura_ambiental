
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" type="assets/text/css" href="bootstrap-theme.min.css"> 
	<body>
<div class="container">
  <form action="index.php" method="POST">
    <div class="row">
        <div class="col-sm-1 col-sm-offset-2">
            <label>DNI:</label>
        </div>
        <div class="col-sm-1">
            <input type="text" name="dni_b"/>
        </div>
        <div class="col-sm-1 col-sm-offset-1">
            <input type="submit" name="buscar" value="BUSCAR">
        </div>

    </div>
  </form>  
 <br>
<?php if(isset($data)){
echo('<table table class="table table-condensed">
    <tr>
    <td> NOMBRES</td>
    <td>APELLIDOS</td>
    <td>DNI</td>
    <td>DIRECCION</td>
    <td>TELEFONO</td>
    <td>SEXO</td>
    </tr>');

echo ("<tr>");
echo ("<td>".$data->nombre."</td>");
echo ("<td>".$data->apellido."</td>");
echo ("<td>".$data->dni."</td>");
echo ("<td>".$data->direccion."</td>");
echo ("<td>".$data->telefono."</td>");
if(strcasecmp($data->sexo,'m')==0){
echo ("<td>MACULINO</td>");
}else{
    echo ("<td>FEMENINO</td>");
}
echo ("</tr>");
echo ("</table>");
}?>

</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="assets/js/bootstrap.min.js" type="javascript"></script>
	</body>
</html>