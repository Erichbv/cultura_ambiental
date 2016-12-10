<?php

require_once 'model/empleado.php';

class empleadoController{
	private $model;

    public function __CONSTRUCT(){
        $this->model = new empleado();
    }

    public function acceso($user,$password){
    	$dato=$this->model->acceso($user);
    if(isset($dato) && $dato!= null){
    	if(strcmp($dato->password,$password)==0){
    		$_SESSION['login']='true';
    		$empleado=$this->model->obtener_empleado_usuario($dato->id_usuario);
            
      		$_SESSION['codigo']=$empleado->id_empleado;
    		$_SESSION['nombre']=$empleado->nombre;
    		$_SESSION['user']=$empleado->id_usuario;
            $_SESSION['cargo']=$empleado->cargo;

            return true;
    	}else{
    		echo("<script type='javascript'>");
    		echo("alert('Usuario o Contraseña Incorrecta');");
    		echo("</script>");
    		return false;
    	}
    }else{
    		echo("<script type='javascript'>");
    		echo("alert('Intentelo Nuevamente');");
    		echo("</script>");
    		return false;
    }

    }
	
}

?>