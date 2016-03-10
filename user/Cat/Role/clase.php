
    
    <?php
    include '../../../bdConnection.php';
    
    // Evitar los warnings the variables no definidas!!!
$err = isset($_GET['error']) ? $_GET['error'] : null ;





class Cliente
{
	var $nombre;     //se declaran los atributos de la clase, que son los atributos del cliente
	var $apellido;
	var $fecha;
	Var $peso;
	Var $id;
        Var $com;


    public static function getClientes() 
		{    
       
        
        
//                      
//                       $registros=5;
//                       $pagina=$_GET["num"];
//                       if(is_numeric($pagina))
//                       {
//                           $inicio=(($pagina-1)*($registros));
//                       }
//                       else
//                       {
//                           $inicio=0;
//                       }
                       
			$obj_cliente=new sQuery();
			$obj_cliente->executeQuery("select * from role"); // ejecuta la consulta para traer al cliente
//                    
			return $obj_cliente->fetchAll(); // retorna todos los clientes
                        
                       
		}

	function Cliente($nro=0) // declara el constructor, si trae el numero de cliente lo busca , si no, trae todos los clientes
	{
		if ($nro!=0)
		{
			$obj_cliente=new sQuery();
			$result=$obj_cliente->executeQuery("select * from role where Role_ID= $nro"); // ejecuta la consulta para traer al cliente 
			$row=mysql_fetch_array($result);
			$this->id=$row['Role_ID'];
			$this->nombre=$row['Type'];
			
		}
	}
		
		// metodos que devuelven valores
	function getID()
	 { return $this->id;}
	function getNombre()
	 { return $this->nombre;}
	
	
	 
		// metodos que setean los valores
	function setNombre($val)
	 { $this->nombre=$val;}
	
	

         
    function save()
    {
          
        if($this->id)
        {$this->updateCliente();}
        else
        {$this->insertCliente();}
    }
	private function updateCliente()	// actualiza el cliente cargado en los atributos
	{
			$obj_cliente=new sQuery();
			$query="update role set Type='$this->nombre' where Role_ID = '$this->id'";
			$obj_cliente->executeQuery($query); // ejecuta la consulta para traer al cliente 
			return $obj_cliente->getAffect(); // retorna todos los registros afectados
	
	}
	private function insertCliente()	// inserta el cliente cargado en los atributos
	{
			$obj_cliente=new sQuery();
			$query="insert into role(Type)values('$this->nombre')";
			
			$obj_cliente->executeQuery($query); // ejecuta la consulta para traer al cliente 
			return $obj_cliente->getAffect(); // retorna todos los registros afectados
                       
	
	}	
	function delete()	// elimina el cliente
	{
			$obj_cliente=new sQuery();
			$query="delete from role where Role_ID=$this->id";
			$obj_cliente->executeQuery($query); // ejecuta la consulta para  borrar el cliente
			return $obj_cliente->getAffect(); // retorna todos los registros afectados
	
	}	
	
}
function cleanString($string)
{
    $string=trim($string);
    $string=mysql_escape_string($string);
	$string=htmlspecialchars($string);
	
    return $string;
}
