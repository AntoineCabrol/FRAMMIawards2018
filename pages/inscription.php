<?php
if(isset($_GET['inscription'])){
	if($_POST['verif'] != "un pingouin"){echo"<script>alert(\"Vous ne savez pas que c'est un pingouin... 🤔\")</script>";exit;}
	$mailExpediteur= $_POST['mail'];
	$motive= addslashes($_POST['motive']);
	$motive= nl2br($motive);
	$motive= str_replace("\n","<br/>", $motive);

	$connu= addslashes($_POST['connu']);
	$connu= nl2br($connu);
	$connu= str_replace("\n","<br/>", $connu);



	$attente= addslashes($_POST['attente']);
	$attente= nl2br($attente);
	$attente= str_replace("\n","<br/>", $attente);



	$inserer= "INSERT INTO frammi_inscription VALUES ('','".$_POST['nom']."','".$_POST['prenom']."','".$_POST['mail']."','".$motive."','".$attente."','".date('Y-m-d H:i:s')."','".$_POST['formation']."','".$_POST['ville']."','".$connu."');";

	$absdoro= mysql_connect('localhost', 'user', 'rQUSxP2xUCxnzU45');
	if (!$absdoro) {
	die('Impossible de se connecter : ' . mysql_error());
	}
	mysql_select_db('marisfrp');

	mysql_query($inserer);



	$mail_to = $mailExpediteur;
	$from_mail = "frammi.awards@gmail.com";
	$from_name = "frammi.awards@gmail.com";
	$reply_to = "frammi.awards@gmail.com";
	$subject = "[Inscription Frammi] La suite";


	$boundary = md5(uniqid(time()));
	$entete = "From: $from_mail \n";
	$entete .= "Reply-to: $from_mail \n";
	$entete .= "X-Priority: 1 \n";
	$entete .= "MIME-Version: 1.0 \n";
	$entete .= "Content-Type: multipart/mixed; boundary=\"$boundary\" \n";
	$entete .= " \n";
	$message = "Content-Type: text/html; charset=\"UTF-8\" \n";
	$message .= "\n";
	$message .= "Bonjour,<br />Pour la suite, merci de préparer votre film  et cliquer sur ce lien http://frammi.fr/dnd/indexupload.php?ok=partii";
	$message .= "\n";
	$message .= "\n";


	mail($mail_to, $subject, $message, $entete);


	 $torototo=1;
}
?>







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<!--meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/-->
	<?php include("../include/inc_meta.php") ?>
	<?php include("../include/inc_analytics.php") ?>
	<link rel="stylesheet" href="../global.css" />
	<title>FRAMMI - Formulaire d'envoi</title>

</head>

<body id="pages">

	<div class="header">
		<a href="../index.php"><p class="retour">Retour au site </p></a>
	</div>

	<?php
	if(isset($torototo)){echo"<script>alert(\"Félicitation, vous venez de franchir la première étape, la suite est dans le mail que vous venez de recevoir. 🐧\")</script>";exit();}
	?>

	<form action="inscription.php?inscription=on" method="post" enctype="multipart/form-data" class="corps"  id="envoi">

		<h1 class="grosh1">FORMULAIRE D'ENVOI</h1>

		<input class="light" id="nom" name="nom" placeholder="Nom" required="yes" type="text">
		<input class="light" id="prenom" name="prenom" placeholder="Prénom" required="yes" type="text">
	        <input class="light" id="mail" name="mail" placeholder="Mail" required="yes" type="email">
		<input class="light" id="formation" name="formation" placeholder="Formation (IUT, BTS, Lycée...)" required="yes" type="text">
		<input class="light" id="ville" name="ville" placeholder="Ville" required="yes" type="text">

		<h2>Quelques détails supplémentaires</h2>
		<input class="dark" id="motive" name="motive" placeholder="Le titre de mon film" required="yes" type="text">
		<textarea class="dark" name="attente" rows="5" placeholder="Petite description" ></textarea>
		<textarea class="dark" name="connu" rows="5" placeholder="Comment avez-vous entendu parler du festival des FRAMMI ?" ></textarea>

		<p>En soumettant votre film, vous reconnaissez avoir lu et reconnu le <a href="https://mmi.univ-smb.fr/~cabrola/FRAMMIawards/pages/reglement.php"><u>règlement</u></a>.</p>

		<textarea class="captcha" id="verif" name="verif" required="yes" rows="1" placeholder="Notre mascotte est... un pingouin / une autruche / un alpaga"></textarea>
		<input type="submit" value="Etape Suivante"  />
	</form>

<?php include("../include/inc_pied.php") ?>

</body>

</html>
