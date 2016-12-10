<?php
include_once 'database.php';

class cliente{
	private $pdo;

	public $id_cliente;
	public $nombre;
	public $apellido;
	public $dni;
	public $direccion;
	public $telefono;
	public $sexo;

	public function __CONSTRUCT(){
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function registrar(cliente $data){
		try 
		{
		$sql = "INSERT INTO cliente VALUES (null, ?, ?, ?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre,
                    $data->apellido,
                    $data->dni,
                    $data->direccion,
                    $data->telefono, 
                    $data->sexo
                )
			);
		return true;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

		public function Obtener_cliente($dni){
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM cliente WHERE dni = ?");
			          

			$stm->execute(array($dni));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

}
?>