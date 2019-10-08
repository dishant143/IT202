<?php
#turn error reporting on
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('config.php');
echo $afsconnect1.njit.edu;

$connection_string = "mysql:host=$;dbname=$dp537;username=$dp537;
password=$C5jlFeico;charset=C5jlFeico";

try{
	$db = new PDO($connection_string, $username, $password);
	echo "SHould have connected;
}
catch(Exception $e){
	echo $e->getMessage();
	exit("It didn't work");
}
