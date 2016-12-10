<?php
session_start();
include_once 'controller/sesion.php';

//LOGIN
if(isset($_POST['user']) && isset($_POST['password'])){
	include_once 'controller/empleado.controller.php';
	$empleado = new empleadoController();
	if($empleado->acceso($_POST['user'],$_POST['password'])){
		include_once 'view/header.php';
		include_once 'view/body.php';
		include_once 'view/footer.php';
	}else{
		cerrar_sesion();
		include 'index.php';
	}
//cerrar sesion
}else if(isset($_GET['cerrar'])){
	cerrar_sesion();
include_once 'view/login.php';
//mostrar formularrio afiliacion	
}else if(isset($_GET['action'])){
	if(strcasecmp($_GET['action'],"afiliacion")==0){
		include_once 'view/header.php';
		include_once 'view/afiliacion.php';
		include_once 'view/footer.php';
	}else{
		include_once 'view/header.php';
		include_once 'view/body.php';
		include_once 'view/footer.php';
	}

//grabar afiliacion	
}else if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['dni']) && isset($_POST['direccion']) && isset($_POST['telefono']) && isset($_POST['sexo'])){
	include_once 'controller/cliente.controller.php';
	$cliente=new clienteController();
	$cliente->registrar($_POST['nombre'],$_POST['apellido'],$_POST['dni'],$_POST['direccion'],$_POST['telefono'],$_POST['sexo']);
	$cli=$cliente->obtener_cliente($_POST['dni']);
	include_once 'controller/afiliacion.controller.php';
	$afiliacion=new afiliacionController();
	$afiliacion->registrar($cli->id_cliente,$_SESSION['codigo'],0);

//checking sesion	
} else if(checking()){
	include_once 'view/header.php';
		include_once 'view/body.php';
		include_once 'view/footer.php';
}else{

//mostrar login	
//cerrar_sesion();
include_once 'view/login.php';	
}

?>