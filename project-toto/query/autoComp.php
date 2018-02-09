<?php

//header('Content-type: application/json');
	include_once('../template/connexion.php');
	$tab = array();
	$i = 0;
	if(isset($_GET['dep'])){
		$req = "SELECT departement_code, departement_nom FROM departement WHERE departement_code LIKE '%";
		$req .= $_GET['dep'];
		$req .= "%'";
		$res = $totoDB->query($req);
		$data = $res->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($data);

	}
 ?>