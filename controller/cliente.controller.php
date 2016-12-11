<?php
include_once 'model/cliente.php';

class clienteController{
	private $model;
	
	public function __CONSTRUCT(){
        $this->model = new cliente();
    }

    public function registrar($nombre,$apellido,$dni,$direccion,$telefono,$sexo){
    	$cliente=new cliente();
    	$cliente->nombre=$nombre;
    	$cliente->apellido=$apellido;
    	$cliente->dni=$dni;
    	$cliente->direccion=$direccion;
    	$cliente->telefono=$telefono;
    	$cliente->sexo=$sexo;
    	$this->model->registrar($cliente);
}    
    public function obtener_cliente($dni){
    	if($this->model->obtener_cliente($dni)){
            return $this->model->obtener_cliente($dni);
        }else{
        echo("<script>");
            echo("alert('Cliente no Encontrado');");
            echo("</script>");
        include_once 'view/header.php';
        include_once 'view/buscar_cliente.php';
        include_once 'view/footer.php';
        exit();
        }
        }
  

}
?>