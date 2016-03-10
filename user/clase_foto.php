<?php

include 'conexionCat.php';





class Cliente
{
	var $nombre;     //se declaran los atributos de la clase, que son los atributos del cliente
	var $apellido;
	var $fecha;
	
	Var $id;
    


    public static function getClientes() 
		{
			$obj_cliente=new sQuery();
			$obj_cliente->executeQuery("select * from assay_type"); // ejecuta la consulta para traer al cliente

			return $obj_cliente->fetchAll(); // retorna todos los clientes
		}

	function Cliente($nro=0) // declara el constructor, si trae el numero de cliente lo busca , si no, trae todos los clientes
	{
		if ($nro!=0)
		{
			$obj_cliente=new sQuery();
			$result=$obj_cliente->executeQuery("select * from datos where id= $nro"); // ejecuta la consulta para traer al cliente 
			$row=mysql_fetch_array($result);
			$this->id=$row['Assay_Type_ID'];
			$this->nombre=$row['Name'];
			$this->apellido=$row['Alias'];
			$this->fecha=$row['Description'];
			
			
		}
	}
		
		// metodos que devuelven valores
	function getID()
	 { return $this->id;}
	function getNombre()
	 { return $this->nombre;}
	function getApellido()
	 { return $this->apellido;}
	function getFecha()
	 { return $this->fecha;}
	
	 
		// metodos que setean los valores
	function setNombre($val)
	 { $this->nombre=$val;}
	function setApellido($val)
	 {  $this->apellido=$val;}
	function setFecha($val)
	 {  $this->fecha=$val;}
	
	

         
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
			$query="update assay_type set Name='$this->nombre', Alias='$this->apellido',Description='$this->fecha' where Assay_Type_ID = '$this->id'";
			$obj_cliente->executeQuery($query); // ejecuta la consulta para traer al cliente 
			return $obj_cliente->getAffect(); // retorna todos los registros afectados
	
	}
	private function insertCliente()	// inserta el cliente cargado en los atributos
	{
			$obj_cliente=new sQuery();
                        
  $rutaServidor='Ima';
$rutaTemporal=$_FILES['fecha']['tmp_name'];
$nombreImagen=$_FILES['fecha']['name'];
$rutaDestino=$rutaServidor.'/'.$this->fecha;
move_uploaded_file($rutaTemporal, $rutaDestino);

$query="INSERT INTO datos( org_id,ruta,descripcion ) values ('$this->nombre','$rutaDestino','$this->apellido') ";
			
			
			$obj_cliente->executeQuery($query); // ejecuta la consulta para traer al cliente 
			return $obj_cliente->getAffect(); // retorna todos los registros afectados
                       
	
	}	
	function delete()	// elimina el cliente
	{
			$obj_cliente=new sQuery();
			$query="delete from assay_type where Assay_Type_ID=$this->id";
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