<?php

class Users{ 
	
	public $objDb;
	public $objSe;
	public $result;
	public $rows;
	public $useropc;
	
	public function __construct(){
		
		$this->objDb = new Database();
		$this->objSe = new Sessions();
		
	}
	
	public function login_in(){
            
                                        
		
		$query = "SELECT * FROM user, role WHERE user.Name = '".$_POST["usern"]."' 
			AND user.Password= '".$_POST["passwd"]."' AND user.Role = role.Type";
		$this->result = $this->objDb->select($query);
		$this->rows = mysql_num_rows($this->result);
		if($this->rows > 0){
			
			if($row=mysql_fetch_array($this->result)){
				
				$this->objSe->init(); 
				$this->objSe->set('user', $row["Name"]);
				$this->objSe->set('iduser', $row["User_ID"]);
				$this->objSe->set('idprofile', $row["Role"]);
				
				$this->useropc = $row["Type"];
				
				switch($this->useropc){
					
					case 'Manager':
						header('Location: busqueda_Ma.php');
						break;
						
					case 'Researcher':
						header('Location: busqueda_Ma.php');
						break;
                                            
                                        case 'Assistant':
						header('Location: busqueda_Ma.php');
						break;
                                            
					case 'Technical A':
						header('Location: busqueda_Ma.php');
						break;
                                            
                                         case 'Postdoctoral':
						header('Location: busqueda_Ma.php');
						break;
                                            
                                        case 'Doctors degree':
						header('Location: busqueda_Ma.php');
						break;
                                            
                                        case 'Masters degree':
				               header('Location: busqueda_Ma.php');
						break;
                                            
                                        case 'Bachelors degree':
						header('Location: busqueda_Ma.php');
						break;
                                         
                                         case 'Technical B':
						header('Location: busqueda_Ma.php');
						break;
                                        
                                        case 'Guest':
						header('Location: busqueda_Ma.php');
						break;    
				}
				
			}
			
		}else{
			
			header('Location: index.php?error=1');
                        
			
		}
		
	}
	
}

?>