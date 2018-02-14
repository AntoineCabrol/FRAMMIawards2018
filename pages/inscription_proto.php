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
			<input type="text" placeholder="Nom du film" class="dark"/>
			<textarea rows="5" class="dark" placeholder="Petite description"></textarea>
			<textarea rows="5" class="dark" placeholder="Comment avez-vous entendu parler du festival ?"></textarea>

			<p>En soumettant votre film, vous reconnaissez avoir lu et reconnu le <a href="https://mmi.univ-smb.fr/~cabrola/FRAMMIawards/pages/reglement.php"><u>règlement</u></a>.</p>

			<textarea rows="2" class="captcha" placeholder="Notre mascotte est... un pingouin / une autruche / un alpaga"></textarea>
			<input type="button" value="ETAPE SUIVANTE"/>

		</div>

	<?php include("../include/inc_pied.php") ?>

	</body>

</html>
