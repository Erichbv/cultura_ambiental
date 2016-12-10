<?php
include_once 'database.php';
class empleado{
	private $pdo;

	public $id_empleado;
	public $nombre;
	public $apellido;
	public $cargo;
	public $dni;
	public $id_usuario;

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

	public function acceso($user){
	try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM usuario WHERE user = ?");
			          

			$stm->execute(array($user));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
		}

	public function obtener_empleado_usuario($id_usuario){
	try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM empleado WHERE id_usuario = ?");
			          

			$stm->execute(array($id_usuario));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	
	}

	
}


?>