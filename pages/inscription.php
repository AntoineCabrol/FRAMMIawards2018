<!doctype html> <!--veut dire que l'on est en html 5-->
<html lang="fr">
	<head>
		<?php include("../include/inc_meta.php") ?>
                <?php include("../include/inc_analytics.php") ?>
		<link rel="stylesheet" href="../global.css" />
		<title>FRAMMI - Formulaire d'envoi</title>
	</head>

	<body id="pages">

		<div class="header">
			<a href="../index.php"><p class="retour">Retour au site </p></a>
		</div>

		<div class="corps"  id="envoi">
			<h1 class="grosh1">FORMULAIRE D'ENVOI</h1>
			<input type="text" placeholder="Nom" class="light"/>
			<input type="text" placeholder="Prénom" class="light"/>
			<input type="email" placeholder="Email" class="light"/>
			<input type="text" placeholder="Formation" class="light"/>
			<input type="text" placeholder="Ville" class="light"/>
			<h2>Quelques détails supplémentaires</h2>
			<input placeholder="Nom du film" rows="1" class="dark"/>
			<textarea placeholder="Petite description" rows="5" class="dark"></textarea>
			<textarea placeholder="Comment avez-vous entendu parler du festival ?" rows="5" class="dark"></textarea>

			<p>En soumettant votre film, vous reconnaissez avoir lu et reconnu le <a href="https://mmi.univ-smb.fr/~cabrola/FRAMMIawards/pages/reglement.php">règlement</a>.</p>

			<textarea class="captcha" placeholder="Notre mascotte est... un pingouin / une autruche / un alpagat" rows="3"></textarea>
			<input type="button" value="ETAPE SUIVANTE"/>

		</div>

	<?php include("../include/inc_pied.php") ?>

	</body>

</html>
