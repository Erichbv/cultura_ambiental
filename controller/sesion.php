<?php

function cerrar_sesion(){
	unset($_SESSION['login']);
	unset($_SESSION['codigo']);
	unset($_SESSION['nombre']);
	unset($_SESSION['user']);
	unset($_SESSION['cargo']);
	session_destroy();

}
function checking(){
	if(isset($_SESSION['login']) && strcasecmp($_SESSION['login'], 'true')==0){
		return true;
	}else{
		return false;
	}
}
?>