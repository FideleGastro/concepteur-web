<?php include_once('template/connexion.php'); ?>
<?php 
$current = 'les plats';

$req1 = "SELECT * FROM plats";
$res1 = $totoDB->query($req1);
$data1 = $res1->fetchAll();

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
				<table >
				   <tr>
				       <td>titre</td>
				       <td>description</td>
				       <td>prix</td>
				       <td>image</td>
				       <td>action</td>
				   </tr>
				<?php foreach ($data1 as $info) : ?>
					 <tr>
				   	  <td><?= $info['pla_titre'] ?></td>
				   	  <td><?= $info['pla_descr'] ?></td>
				   	  <td><?= $info['pla_prix'] ?></td>
				   	  <td><img style="margin-top: 5px" height="100px" src="photos/photo_<?= $info['pla_id'] ?>.jpg" alt=""></td><td><a href="/pascal/project-toto/fiche.php?id=<?= $info['pla_id']; ?>">fiche</a><br><br><a href="/pascal/project-toto/reservation.php?id=<?= $info['pla_id']; ?>">réserver</a></td> 	 
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