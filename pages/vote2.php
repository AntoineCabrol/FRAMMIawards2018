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


echo" Merci de votre vote,  si vous desirez le changer merci de vous reconnecter";
unset($_SESSION["id"]);
exit();
	
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

<a href="vote2.php?id=1"> <img src="froelich.jpg"/></a>