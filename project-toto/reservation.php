<?php include_once('template/connexion.php'); ?>
<?php 
$current = 'reservation';

$semaine = array(
	'Lun' ,
	'Mar' ,
	'Mer' ,
	'Jeu' ,
	'Ven' ,
	'Sam' ,
	'Dim' 
);

$mois = array(
	'janvier' ,
	'fevrier' ,
	'mars' ,
	'avril' ,
	'mai' ,
	'juin' ,
	'juillet',
	'aout' ,
	'septembre' ,
	'octobre' ,
	'novembre',
	'décembre' 
);

$actu = array(
		'jour' => date('j'),
		'mois' => date('n'), //date('n')
		'année' => date('Y')
	 	);

if(empty($_GET['id']) || !(int)$_GET['id'])
	header('Location: /pascal/project-toto');
$req = "SELECT * FROM plats WHERE `pla_id` = ";
$req .= $_GET['id'];

$res = $totoDB->query($req);

$data = $res->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <title>PROJET TOTO COMPANY - reservation</title>
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
				<table>
				   <tr>
				       <td>titre</td>
				       <td>description</td>
				       <td>prix</td>
				       <td>image</td>    
				   </tr>
					 <tr>
				   	  <td><?= $data['pla_titre'] ?></td>
				   	  <td><?= $data['pla_descr'] ?></td>
				   	  <td><?= $data['pla_prix'] ?></td>
				   	  <td><img style="margin-top: 5px" height="100px" src="photos/photo_<?= $data['pla_id'] ?>.jpg" alt=""></td>	 
				   </tr>
				</table>
			</section>

			<section>
				<h2>Choisissez une date</h2>

				<?php for ($i=-1; $i < 2; ++$i) : ?>
					
					<div class="choix_mois">
					<?php if($actu['mois'] + $i >= 12) $actu['mois'] = 0; ?> 
					<h3><?= $mois[$actu['mois'] + $i];  ?></h3>

					<?php for ($j=0; $j < 7; $j++) : ?>
					<div class="choix_jour"><?= $semaine[$j]; ?></div>
					<?php endfor; ?>

					<?php for ($j=0; $j < date('N', mktime(0,0,0, $actu['mois']+$i+1, 1, $actu['année'])) -1; $j++) : ?>
					<div class="choix_jour"></div>
					<?php endfor; ?>

					<?php for ($j=1; $j <= date('t', strtotime('+'.($i+1).' month')); $j++) : ?>
					<div class="choix_jour res_valid"><?= $j; ?></div>
					<?php endfor; ?>

					</div>

				<?php endfor; ?>			

			</section>
			<footer>
				<?php include_once('template/footer.php'); ?>
			</footer>
		</main>
	</body>
</html>