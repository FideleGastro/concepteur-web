<?php include_once('template/connexion.php'); ?>
<?php 
$current = 'fiche';

if(empty($_GET['id']) || !(int)$_GET['id'])
	header('Location: /pascal/project-toto');
$req = "SELECT * FROM ingredients LEFT JOIN plats ON plats.pla_id = ingredients.ing_pla_id WHERE plats.pla_id =";
$req .= $_GET['id'];
$res = $totoDB->query($req);
$data = $res->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <title>PROJET TOTO COMPANY - fiche produit</title>
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
				<h2>fiche produit</h2>
				
				
				<table >
				   <tr>
				       <td>titre</td>
				       <td>description</td>
				       <td>prix</td>
				       <td>image</td>
				       <td>action</td>
				   </tr>
				   <?php 

				   	//var_dump($data);
				   	 ?>
				
					 <tr>
				   	  <td><?= $data[0]['pla_titre'] ?></td>
				   	  <td><?= $data[0]['pla_descr'] ?></td>
				   	  <td><?= $data[0]['pla_prix'] ?></td>
				   	  <td><img style="margin-top: 5px" height="100px" src="photos/photo_<?= $data[0]['pla_id'] ?>.jpg" alt=""></td>
				   	  <td><a href="/pascal/project-toto/reservation.php?id=<?= $data[0]['pla_id']; ?>">Réservation</a></td>  	 
				   </tr>
				</table>

				<h2>ingrédient associé</h2>
	
				<table style="margin: auto">
				   <tr>
				       <td>nom</td>
				    
				   </tr>
				   <?php 

				   	//var_dump($data);
				   	 ?>
				
					 <?php foreach ($data as $info) : ?>
					 <tr>
				   	  <td><?= $info['ing_descr'] ?></td>
					  
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