<?php include_once('template/connexion.php'); ?>
<?php 
$current = 'recherche';


if(!empty($_POST['search'])){

$req = "SELECT * FROM plats WHERE pla_titre LIKE '%";
$req .= $_POST['search'];
$req .= "%' OR pla_descr LIKE '%";
$req .= $_POST['search'];
$req .= "%'";


$res1 = $totoDB->query($req);

$data1 = $res1->fetchAll(PDO::FETCH_ASSOC);
}

?>
<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <title>PROJET TOTO COMPANY - recherche</title>
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
				<h2>recherche</h2>
				

				<form method="POST" >
					<input type="text" name="search">
					<input type="submit" value="rechercher">
				</form>
				
				<?php if(!empty($_POST['search'])) : ?>	
				<?php  if(empty($data1)) : ?>
					<h2>résultat</h2>
					<h6>Aucun résultat.</h6>
				<?php else : ?>
					<h2>résultat</h2>
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
				   	  <td><img style="margin-top: 5px" height="100px" src="photos/photo_<?= $info['pla_id'] ?>.jpg" alt=""></td><td><a href="/pascal/project-toto/fiche.php?id=<?= $info['pla_id']; ?>">fiche</a><br><br><a href="">réserver</a></td> 	 
				   </tr>
				<?php endforeach; ?>
				</table>

				<?php endif; ?>	
			<?php endif; ?>
			</section>
			<footer>
				<?php include_once('template/footer.php'); ?>
			</footer>
		</main>
	</body>
</html>