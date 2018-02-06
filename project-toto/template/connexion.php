<?php 

define('DSN', 'mysql:host=localhost;dbname=toto');
define('USER', 'root');
define('PWD', '');
session_start(); 

try{
	$totoDB = new PDO(DSN, USER, PWD);

} catch(Exception $erreur){
	echo '<pre>erreur BDD: ' . $erreur . '</pre>';
	die();
}




 ?>