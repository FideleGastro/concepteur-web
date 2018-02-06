<?php 

$page = array(
	'accueil' => 'accueil.php',
	'les plats'=> 'plat.php',
	'inscription' => 'inscription.php',
	'compte' => 'compte.php',
	'contact' => 'contact.php' ,
	'panier' => 'panier.php'
); 	
 
 ?>

<!-- icon menu burger -->
<div id="toggle" onclick="Mytoggle()"></div>

<ul>
	<?php foreach($page as $lien => $menu) : ?>
	
	<?php if (isset($_SESSION['name']) && $lien == 'inscription') : ?>
	<?php continue; ?>
	<?php endif; ?>	

	<?php if (!isset($_SESSION['name']) && $lien == 'compte') : ?>
	<?php continue; ?>
	<?php endif; ?>	

	<li class="<?php if ($current === $lien) echo 'active'; ?>">
		<a href="<?php echo $menu; ?>">
			<?php echo $lien; ?>
		</a>
	</li>	
	<?php endforeach; ?>	
</ul>