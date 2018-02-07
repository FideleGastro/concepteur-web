<?php include_once('template/connexion.php'); ?>
<?php 
$current = 'les plats';

$req = "SELECT * FROM plats";
$res = $totoDB->query($req);
$data = $res->fetchAll();

?>
<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <title>PROJET TOTO COMPANY - Les plats</title>
		<link rel="stylesheet" href="css/normalisation.css" >
		<link rel="stylesheet" href="css/style.css" >
		<script src="scripts/fonctions.js"></script>
		<script>
			document.addEventListener('DOMContentLoaded', function() {

			});
		</script>
  </head>
	<body>
		<main>
			<header>
				<?php include_once('template/header.php'); ?>
			</header>
			<section>
				<h1>mes bons petit plat </h1>
				
				
				<table border="1">
				   <tr>
				       <td>titre</td>
				       <td>description</td>
				       <td>prix</td>
				       <td>image</td>
				   </tr>
				<?php foreach ($data as $info) : ?>
					 <tr>
				   	  <td><?= $info['pla_titre'] ?></td>
				   	  <td><?= $info['pla_descr'] ?></td>
				   	  <td><?= $info['pla_prix'] ?></td>
				   	  <td><img style="margin-top: 5px" height="100px" src="photos/photo_<?= $info['pla_id'] ?>.jpg" alt=""></td>
				   	 
				   </tr>
				<?php endforeach; ?>
				</table>
			</section>
			<footer>
				<?php include_once('template/footer.php'); ?>
			</footer>
		</main>
	</body>
</html>