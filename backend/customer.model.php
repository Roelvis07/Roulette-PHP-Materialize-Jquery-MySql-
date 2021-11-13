<?php

class customer
{
	private $pdo;
    
    public $id;
    public $fullname; 
    public $email;
    public $phone;
	public $datecreate;
	public $activate;
	public $award;

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

	public function Listar($id="")
	{
		try
		{
			$result = array();
			if(isset($id))
				$stm = $this->pdo->prepare("SELECT
				c.id_customer,
				c.`name`,
				c.email,
				c.phone,
				c.date_create,
				(SELECT ca.award FROM customer_award ca WHERE ca.id_customer = c.id_customer ORDER BY ca.create_date DESC LIMIT 1) award,
				c.active
				FROM
				customer c
				ORDER BY c.date_create ASC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			else
				$stm = $this->pdo->prepare("SELECT * FROM customer where id = $id");
			$stm->execute();

			$datos = array();
			$i=0;
			$total = $stm->rowCount();

			while ($fila = $stm->fetch(PDO::FETCH_ASSOC, PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
				$datos[$i] = $fila;
				$i++;
			}

			return $datos;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function setAward($award_param)
	{
		try 
		{
			$sql = "SELECT `id_customer` FROM customer						
				    WHERE `active` = 1";
			
			$stm = $this->pdo->prepare($sql);
			$stm->execute();

			while ($fila = $stm->fetch(PDO::FETCH_ASSOC, PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
				
				$objData = ['id'=> $fila["id_customer"], 'award'=> $award_param];
				
				$this->RegistrarAward($objData);
			}
				
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function RegistrarAward($data)
	{
		try 
		{
			$sql = "INSERT INTO `customer_award` (`id_award`, `id_customer`, `award`, `create_date`) 
			VALUES ( NULL, ?, ?, CURRENT_TIMESTAMP)";

			$this->pdo->prepare($sql)
				->execute(
				array(
					$data["id"], 
					$data["award"]
				)
			);
			
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function getAward($id_customer)
	{
		try 
		{
			$sql = "SELECT `customer_award`					
				    WHERE `id_customer` = $id_customer";
			
			$stm = $this->pdo->prepare($sql);
			$stm->execute();
				
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(customer $data)
	{
		try 
		{
			$sql = "INSERT INTO `customer` (`id_customer`, `name`, `email`, `phone`, `date_create`, `active`) 
			VALUES (?, ?, ?, ?, CURRENT_TIMESTAMP, 1)";

			$this->pdo->prepare($sql)
				->execute(
				array(
					$data->id, 
					$data->fullname,
					$data->email, 
					$data->phone					
				)
			);
			
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(customer $data)
	{
		try 
		{
			$sql = "UPDATE customer SET 
						`name` 		= ?,
						`email`     = ?, 
						`phone`     = ?
						
				    WHERE `id_customer` = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->fullname,
						$data->email, 
						$data->phone,
						$data->id
					)
				);
				
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	
	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM customer WHERE id_customer = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function activarCliente(customer $data)
	{
		try 
		{
			$sql = "UPDATE customer SET 
						`active` 		= ?
						
				    WHERE `id_customer` = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->activate,
						$data->id
					)
				);
				
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function usersActive()
	{
		try 
		{ 
			$sql = "SELECT * FROM `customer` WHERE `active` = 1";

			$stm = $this->pdo->prepare($sql);
			$stm->execute();

			return $stm->rowCount();
				
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

}
?>
