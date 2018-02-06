<?php include_once('template/connexion.php'); ?>

<div id="ident">
	<?php 
	if (isset($_POST['logout']) && $_POST['logout'] == 'true')
		unset($_SESSION['name']);

	if(!empty($_POST['mail']) && !empty($_POST['pwd'])){
		
		$req = "SELECT cli_prenom FROM clients WHERE cli_email LIKE '";
		$req .= $_POST['mail'];
		$req .= "' AND cli_mdp LIKE '";
		$req .= md5($_POST['pwd']);
		$req .= "'";

		$res = $totoDB->query($req);
		$data = $res->fetch(PDO::FETCH_ASSOC);
		
		if($data)
			$_SESSION['name'] = $data['cli_prenom'];
		
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