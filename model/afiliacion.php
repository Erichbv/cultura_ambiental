<?php
date_default_timezone_set('America/Lima');
include_once 'database.php';


class afiliacion {
	private $pdo;

	public $numero;
	public $id_cliente;
	public $id_empleado;
	public $etado;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function mensaje(){
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT count(*) as 'numero' FROM afiliacion WHERE estado = ?");
			          
			$stm->execute(array('0'));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function registrar(afiliacion $data){
		$fecha=date('d/m/Y');
		$hora=date('H:i:s');

		try 
		{
		$sql = "INSERT INTO afiliacion VALUES (null, ?, ?, ?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->id_cliente,
                    $data->id_empleado,
                    $fecha,
                    $hora,
                    $data->estado
                )
			);

		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}

?>