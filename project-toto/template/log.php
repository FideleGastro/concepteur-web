<?php 

function getIP(){
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) 
    	$ip = $_SERVER['HTTP_CLIENT_IP'];
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
    	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			else 
   		 	$ip = $_SERVER['REMOTE_ADDR'];
   		return $ip;
}

function connexionlog($ligne){
	$fichier = fopen('log/connection.log', 'a');
	fputs($fichier, $ligne.PHP_EOL.'');
	fclose($fichier);
}

?>