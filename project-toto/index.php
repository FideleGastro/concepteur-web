<?php 
$current = 'accueil';
?>
<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <title>PROJET TOTO COMPANY - Accueil</title>
		<link rel="stylesheet" href="css/normalisation.css" >
		<link rel="stylesheet" href="css/style.css" >
		<link rel="stylesheet" href="css/jquery.bxslider.css" >
		<script src="scripts/fonctions.js"></script>
		<script src="scripts/jquery.min.js"></script>
		<script src="scripts/jquery.bxslider.min.js"></script>
		
		<script>
			document.addEventListener('DOMContentLoaded', function() {
				$('.bxslider').bxSlider({
				    mode: 'fade',
				    captions: true
				  });
			});
		</script>
  </head>
	<body>
		<main>
			<header>
				<?php include_once('template/header.php'); ?>
			</header>
			<section>
				<div class="bxslider" >
				  <div><img src="photos/photo_1.jpg" title="Happy trees1"></div>
				  <div><img src="photos/photo_2.jpg" title="Happy trees2"></div>
				  <div><img src="photos/photo_3.jpg" title="Happy trees3"></div>
				</div>
			</section>
			<footer>
				<?php include_once('template/footer.php'); ?>
			</footer>
		</main>
	</body>
</html>


