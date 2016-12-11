<?php

    include_once 'controller/afiliacion.controller.php';
    $afi=new afiliacionController();
    $data=$afi->listar_estado();
?>
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
<table table class="table table-condensed">
    <tr>
    <td> NOMBRES</td>
    <td>APELLIDOS</td>
    <td>DNI</td>
    <td>ESTADO</td>
    <td>OPERACION</td>
    </tr>
    <?php
    foreach ($data as $clave=> $valor) {
        echo("<tr>");
        echo("<td>".$valor['nombre']."</td>");
        echo("<td>".$valor['apellido']."</td>");
        echo("<td>".$valor{'dni'}."</td>");
        echo("<td>POR APROBAR</td>");
        echo("<td> <a href='?dni=".$valor['id_cliente']."&estado=aprobado'><button>APROBAR</button></a> </td>");
        echo("</tr>");
    }
    ?>
</table>
</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="assets/js/bootstrap.min.js" type="javascript"></script>
	</body>
</html>