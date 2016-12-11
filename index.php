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
//cliente
	} else if(strcasecmp($_GET['action'],"cliente")==0){
		include_once 'view/header.php';
		include_once 'view/buscar_cliente.php';
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

//listar estado false	
}else if (isset($_GET['listar']) && strcasecmp($_GET['listar'],'afiliacion_estado')==0){
		include_once 'view/header.php';
		include_once 'view/lista_afiliacion.php';
		include_once 'view/footer.php';

//actualizar estado afiliacion
}else if (isset($_GET["dni"]) && isset($_GET["estado"])) {
include_once 'controller/afiliacion.controller.php';
$afi= new afiliacionController();
$afi->actualizar_estado($_GET["dni"]);

//listar estado true afiliacion
}else if (isset($_GET['listar']) && strcasecmp($_GET['listar'], 'listar')==0) {
		include_once 'view/header.php';
		include_once 'view/afiliacion_lista.php';
		include_once 'view/footer.php';

}else if(isset($_POST['dni_b'])){
    include_once 'controller/cliente.controller.php';
	$cliente=new clienteController();
    $data=$cliente->obtener_cliente($_POST['dni_b']);
		include_once 'view/header.php';
		include_once 'view/buscar_cliente.php';
		include_once 'view/footer.php';

//checking login		
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