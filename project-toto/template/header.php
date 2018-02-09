<?php include_once('template/connexion.php'); ?>

<div id="ident">
	<?php 
	if (isset($_POST['logout']) && $_POST['logout'] == 'true')
		unset($_SESSION['name']);

	if(!empty($_POST['mail']) && !empty($_POST['pwd'])){
		
		$req_account = "SELECT cli_prenom FROM clients WHERE cli_email LIKE '";
		$req_account .= $_POST['mail'];
		$req_account .= "' AND cli_mdp LIKE '";
		$req_account .= md5($_POST['pwd']);
		$req_account .= "'";

		$res_account = $totoDB->query($req_account);
		$data_account = $res_account->fetch(PDO::FETCH_ASSOC);
		
		if($data_account)
			$_SESSION['name'] = $data_account['cli_prenom'];
		
	}
	
	 ?>
	<form action="" method="post" onsubmit="return ConnectIsValid();">
	<?php if(isset($_SESSION['name']) && $_SESSION['name']) :?>

	Bonjour <?php echo $_SESSION['name'] ?> !
	<input type="hidden" name='logout' value="true">
	<input type="submit" value="deconnexion">
	
	<?php else : ?>
	
		<input type="email" id="mail" name="mail" placeholder="ton email...">
		<input type="password" placeholder="pwd..." name="pwd">
		<input type="submit" value="connexion">
	</form>

	<?php endif; ?>
	
</div>
<h1>TOTO COMPANY</h1>
<h4>Les bons petits plats de Toto</h4>
<nav>
	<?php include_once('navigation.php'); ?>
</nav>