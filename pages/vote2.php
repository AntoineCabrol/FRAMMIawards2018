<?php
session_start();
if(isset($_GET['id'])){
$metAjour ="UPDATE frammi_vote SET choix_un ='".$_GET['id']."' WHERE id_votant ='".$_SESSION['id']."'";

$absdorof= mysql_connect('localhost', 'user', 'rQUSxP2xUCxnzU45');
if (!$absdorof) {
die('Impossible de se connecter : ' . mysql_error());
}
mysql_select_db('marisfrp');

mysql_query($metAjour) or die('Erreur SQL !<br />'.$metAjour.'<br />'.mysql_error());



unset($_SESSION["id"]);
header('Location: ../index.php?ok=ok');

}


if(!isset($_POST['numero'])) {echo "ça marche pas";exit();}


$cherche= "SELECT pass FROM frammi_vote where id_votant ='".$_POST['numero']."';";

$absdorof= mysql_connect('localhost', 'user', 'rQUSxP2xUCxnzU45');
if (!$absdorof) {
die('Impossible de se connecter : ' . mysql_error());
}
mysql_select_db('marisfrp');

$req = mysql_query($cherche) or die('Erreur SQL !<br />'.$cherche.'<br />'.mysql_error());

$data = mysql_fetch_array($req);

if($data['pass'] != $_POST['pass']) {   header('Location: vote.php?ok=pasok');
exit(); }
$_SESSION["id"]=$_POST['numero'];


?>



<!DOCTYPE html>
<html lang="fr">

<head>
        <?php include("../include/inc_meta.php") ?>
        <?php include("../include/inc_analytics.php") ?>
        <title>Vote - page de vote</title>
        <link rel="stylesheet" href="../global.css">
</head>

<body id="vote2">

        <div class="header">
		<a href="../index.php"><p class="retour">Retour au site </p></a>
	</div>

        <h1 class="grosh1">VOTEZ !</h1>

        <form method="post" action="vote2.php">
                <div>
                        <a href="vote2.php?id=1">
				<div>
					<span>Une histoire à raconter</span>
				</div>
                        </a>
			<a href="vote2.php?id=2">
				<div>
					<span>Appel en absence</span>
				</div>
                        </a>
			<a href="vote2.php?id=3">
				<div>
					<span>KeysZuna Gymnopédie</span>
				</div>
                        </a>
			<a href="vote2.php?id=4">
				<div>
					<span>En attendant la pluie</span>
				</div>
                        </a>
			<a href="vote2.php?id=5">
				<div>
					<span>Ombrophobie</span>
				</div>
                        </a>
			<a href="vote2.php?id=6">
				<div>
					<span>Light</span>
				</div>
                        </a>
			<a href="vote2.php?id=7">
				<div>
					<span>À point</span>
				</div>
                        </a>
			<a href="vote2.php?id=8">
				<div>
					<span>À vélo</span>
				</div>
                        </a>
			<a href="vote2.php?id=9">
				<div>
					<span>Je suis chasseur de Tête</span>
				</div>
                        </a>
			<a href="vote2.php?id=10">
				<div>
					<span>Esquisse de prière</span>
				</div>
                        </a>
			<a href="vote2.php?id=11">
				<div>
					<span>Syndrôme</span>
				</div>
                        </a>
			<a href="vote2.php?id=12">
				<div>
					<span>À proximité</span>
				</div>
                        </a>
			<a href="vote2.php?id=13">
				<div>
					<span>Société de jeu</span>
				</div>
                        </a>
			<a href="vote2.php?id=14">
				<div>
					<span>Hawkins night</span>
				</div>
                        </a>
			<a href="vote2.php?id=15">
				<div>
					<span>L’albatros</span>
				</div>
                        </a>
                </div>
        </form>

</body>

</html>
