<?php 
class Basicas
{
	public function inyeccionSQL($string)
	{
		$string = addslashes($string);
		$string = strip_tags($string);
		$string = htmlspecialchars($string);
		$string = trim(trim($string));
		$string = nl2br($string);
		return $string;
	}
	public function encriptarContrasena($variable){
        $variable = hash('sha512', SALT.$variable);
        return $variable;
    }

    
}
?>