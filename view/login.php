<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>INICIAR SESION -- MI BANCO</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css"> 
		<style type="text/css">
			body {
  				background: url('http://revistaganamas.com.pe/wp-content/uploads/2016/05/Mibanco-foto.jpg');
 	 			background-position: center center;
 	 			background-repeat: no-repeat;
 	 			background-attachment: fixed;
 	 			background-size: cover;
 	 			background-color: #464646;

  			}

		</style>
	
	</head>
	<body>
    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">          
        <br><br><br><br><br><br>          
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">INCIAS SESION</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">OLVIDE LA CONTRASEÑA</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
  
                        <form id="loginform" class="form-horizontal" method="POST" action="index.php" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="user" value="" placeholder="USUARIO">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="CONTRASEÑA">
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-2 col-sm-offset-8 controls">
                                      <input  type="submit" id="btn-login" class="btn btn-success" value="INICIAR SESION" />
                                    </div>
                                </div>

    
                            </form>     



                        </div>                     
                    </div>  
        </div>
 
    </div>
    

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.min.js" type="javascript"></script>
	</body>
</html>