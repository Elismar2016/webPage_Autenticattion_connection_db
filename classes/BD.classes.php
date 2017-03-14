<?php class BD{
private static $conn;
public fuction_construct(){}
public static fuction conn(){
	if(is_null (self::$conn)){
		self::$conn = neww PDO('mysql:host=localhost:dbname=SPIIFAC:','root','');
		
	}return self::$conn;
}

}

?>

