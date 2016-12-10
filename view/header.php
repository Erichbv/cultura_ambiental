<!DOCTYPE html>
<html lang="">
  <head>
  <title>MENU</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
  <body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">MI BANCO</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">INICIO</a></li>
      <li><a href="#">CLIENTE</a></li>
      <li><a href="?action=afiliacion">AFILIACION</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <?php if(strcasecmp($_SESSION['cargo'],'supervisor')==0){
      include_once 'controller/afiliacion.controller.php';
      $af=new afiliacionController();
      $numero=$af->mensaje();
      echo('<li><a href="#"><span class=" glyphicon glyphicon-envelope"></span>'.$numero->numero.' MENSAJES</a></li>');
    }
    ?>
      <li><a href="?cerrar=true"><span class="glyphicon glyphicon-user"></span>CERRAR SESION</a></li>

    </ul>
  </div>
</nav>
    

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js" type="javascript"></script>
  </body>
</html>