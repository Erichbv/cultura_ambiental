<?php
require_once 'model/afiliacion.php';

class afiliacionController{
	private $model;

	public $id_cliente;
	public $id_empleado;

	public function __CONSTRUCT(){
        $this->model = new afiliacion();
    }

    public function registrar($id_cliente,$id_empleado,$estado){

    	$af= new afiliacion();
    	$af->id_cliente=$id_cliente;
    	$af->id_empleado=$id_empleado;
    	$af->estado=$estado;
    	$this->model->registrar($af);
    	include_once 'view/header.php';
    	include_once 'view/body.php';
    	include_once 'view/footer.php';
    }

	public function mensaje(){
		return $this->model->mensaje();
    }
    public function listar_estado(){
        return $this->model->listar_estado();
    }
    public function actualizar_estado($dni){
        if($this->model->actualizar_estado($dni)){
        include_once 'view/header.php';
        include_once 'view/body.php';
        include_once 'view/footer.php';   
        }
    }
    public function listar(){
        return $this->model->listar();
    }
}
?>