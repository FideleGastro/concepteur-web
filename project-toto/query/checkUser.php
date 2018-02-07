<?php 
	//header('Content-type: application/json');
	include_once('../template/connexion.php');
	if(isset($_GET['mail'])){
		$req = "SELECT * FROM clients WHERE cli_email LIKE '";
		$req .= $_GET['mail'];
		$req .= "'";

		$res = $totoDB->query($req);
		$data = $res->fetch(PDO::FETCH_ASSOC);
		if($data){
			http_response_code(200);
			exit();
		}
		http_response_code(201);
		exit();
	}
	
 ?>