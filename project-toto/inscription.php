
<?php 
$current = 'inscription';

if(isset($_SESSION['name'])){
	header("Location: /compte.php")	;
}

?>

<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <title>PROJET TOTO COMPANY - inscription</title>
		<link rel="stylesheet" href="css/normalisation.css" >
		<link rel="stylesheet" href="css/style.css" >
		<script src="scripts/fonctions.js"></script>
		<script src="scripts/class.checkform.js"></script>
		<script>
			/*	var button = document.querySelector('input[type=button]');
				var departement = document.querySelector('#inscription input[name=cp]');
				console.log(button);*/
				/*departement.addEventListener('input', function(){
					console.log(this.value);
				});*/
			
	</script>
  	</head>
	<body>
		<main>
			<header>
				<?php include_once('template/header.php'); ?>
			</header>
			<section>
				<form action="#" id="inscription" method="POST" onsubmit="return objCheck.check() ">
					<div>
					<input type="radio" name="genre" value="0" >homme
					<input type="radio" name="genre" value="1">femme
					</div>
					
					<input type="text" name="nom" placeholder="nom" class="">
					<input type="text" name="prenom" placeholder="prenom">
					<input type="text" name="email" placeholder="email">
					<input type="text" name="adresse" placeholder="adresse">
					<input type="text" name="cp" placeholder="cp" id="cp" oninput="autoComp(this.value)">
					<div id="autocomp"></div>
					<input type="text" name="ville" placeholder="ville">
					<input type="text" name="tel" placeholder="telephone">
					<input type="submit" value="S'enregistrer">
				</form>
			</section>
			<footer>
				<?php include_once('template/footer.php'); ?>
			</footer>
		</main>
	</body>

	<script>
		var objCheck = new checkForm;
			/*document.addEventListener('DOMContentLoaded', function() {
				//console.log(objCheck);
				
				var button = document.querySelector('input[type=button]');

				button.addEventListener('click', function(){
					objCheck.check();
				})
				
			});*/
				/*var button = document.querySelector('input[type=button]');
				var departement = document.querySelector('#inscription input[name=cp]');
				console.log(button);*/
	</script>
</html>