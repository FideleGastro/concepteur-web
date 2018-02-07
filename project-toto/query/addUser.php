<?php 
	//header('Content-type: application/json');
	include_once('../template/connexion.php');
	if(isset($_GET['mail'])){
		$req = "INSERT INTO `clients` (`cli_id`, `cli_nom`, `cli_prenom`, `cli_genre`, `cli_email`, `cli_adresse`, `cli_cp`, `cli_ville`, `cli_tel`, `cli_mdp`) VALUES (NULL, :nom, :prenom, '0', :email, :adresse, :cp, :ville, :tel, :pwd)";

		$res = $totoDB->prepare($req);

		$res->bindValue('nom', $_GET['nom']);
		$res->bindValue('prenom', $_GET['prenom']);
		$res->bindValue('email', $_GET['mail']);
		$res->bindValue('adresse', $_GET['adresse']);
		$res->bindValue('cp', $_GET['cp']);
		$res->bindValue('ville', $_GET['ville']);
		$res->bindValue('tel', $_GET['tel']);
		$res->bindValue('pwd', md5('test'));

		$data = $res->execute();
		if($data){
			var_dump($data);
			http_response_code(201);
			exit();
		}
		http_response_code(200);
		exit();
	}
	
 ?>