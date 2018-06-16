<?php

class Form
{
	public $nombre;
	public $dni;
	public $titular;
	public $ciudad;
	public $telefono;
	public $email;
	public $carrier;
	public $sexo;
	public $time_s;
	public $publicidad;
	public $error;
	
	
	function setNombre($n){
		if($n==""){
			$this->error="Coloque su nombre";
			return false;
		}
		#validate letters spaces ' . -
    elseif (!preg_match("/^[a-z A-Z ñÑ.áÁéÉíÍóÓúÚäëïöü\'-]*$/",$n)) {
            $this->error="Coloque un nombre";
            return false;
    }
return true;
}
function setApellido($n){
    if($n==""){
            $this->error="Coloque su apellido";
            return false;
    }
    #validate letters spaces ' . -
								    elseif (!preg_match("/^[a-z A-Z ñÑ.áÁéÉíÍóÓúÚäëïöü\'-]*$/",$n)) {
			$this->error="Coloque un apellido v&aacute;lido";
			return false;
		}
		return true;
	}
	
	function setDni($d){
		if(!is_numeric($d) OR $d == "0"){
			$this->error="Ingrese su dni";
			return false;
		}
		elseif(strlen($d)<5){
			$this->error="El DNI debe tener al menos cinco d&iacute;gitos";
			return false;
		}
		return true;
	}
	
	function setTelefono($d){
		if(!is_numeric($d) OR $d == "0"){
			$this->error="Ingrese un telefono v&aacute;lido";
			return false;
		}
		elseif(strlen($d)<8){
			$this->error="El tel&eacute;fono debe tener ocho d&iacute;gitos";
			return false;
		}
		return true;
	}
	
	function setEmail($correo){
		if($correo ==""){
			$this->error="Ingrese un correo";
			return false;
		}
		if (!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$correo)) {
			$this->error="Ingrese un correo v&aacute;lido";
			return false;
		}
		return true;
	}
	
	function setCiudad($ciudad){
		if($ciudad==""){
			$this->error="Coloque su ciudad";
			return false;
		}
		#validate letters spaces ' . -
    elseif (!ereg("^[a-z A-Z ñÑ.áÁéÉíÍóÓúÚäëïöü\'-]*$",$ciudad)) {
            $this->error="Coloque una ciudad v&aacute;lida";
            return false;
    }
$this->ciudad=$ciudad;
return true;
}
function setTitular($d){
    if($d==""){
            $this->error="Coloque el titular";
            return false;
    }
    #validate letters spaces ' . -
								    elseif (!ereg("^[a-z A-Z ñÑ.áÁéÉíÍóÓúÚäëïöü\'-]*$",$d)) {
			$this->error="Coloque un titular v&aacute;lido";
			return false;
		}
		
		$this->titular=$d;
		return true;
	}
	
	function setMesaje($d){
		if($d==""){
			$this->error="Coloque su mensaje";
			return false;
		}
		#validate letters spaces ' . -
    elseif (!preg_match("/^[a-z A-Z ñÑ.áÁéÉíÍóÓúÚäëïöü\n\'\\n-]*$/",$d)) {
            $this->error="Coloque un mensaje v&aacute;lido";
            return false;
    }
return true;
}
function setCarier($p){
    if($p==""){
            $this->error="Coloque el Carrier";
            return false;
    }
    #validate letters spaces ' . -
								    elseif (!preg_match("/^[a-z A-Z ñÑ.áÁéÉíÍóÓúÚäëïöü\'-]*$/",$p)) {
			$this->error="Coloque una ciudad v&aacute;lida";
			return false;
		}
		
		$this->carrier=$p;
		return true;
	}
	
	function setSexo($p){
		if($p==""){
			$this->error="Coloque su sexo";
			return false;
		}
		
		$this->sexo=$p;
		return true;
	}
	
	static function listar(){
		$db= DB::getInstance();
		$query="SELECT * FROM tmfsorteo ORDER BY time_s ASC";
		@ $rs=$db->consultar($query);
		if(!$rs){
			return false;
		}
		while($reg=mysql_fetch_assoc($rs)){
			self::$sorteos[]=$reg;
		}
		return self::$sorteos;
	}
	
	function verSorteo($id){
		$db= DB::getInstance();
		$query="SELECT * FROM tmfsorteo WHERE id='".$id."'";
		@ $rs=$db->consultar($query);
		if(!$rs){
			return false;
		}
		$reg=mysql_fetch_assoc($rs);
		return $reg;
	}
	
	
}
?>
