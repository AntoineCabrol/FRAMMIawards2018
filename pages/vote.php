<!DOCTYPE html>
<html lang="fr">

<head>
        <?php include("../include/inc_meta.php") ?>
        <?php include("../include/inc_analytics.php") ?>
        <title>Vote - page d'identification</title>
        <link rel="stylesheet" href="../global.css">
</head>

<body id="vote">

        <div class="header">
		<a href="../index.php"><p class="retour">Retour au site </p></a>
	</div>

        <h1 class="grosh1">IDENTIFICATION</h1>

        <?php if(isset($_GET['ok'])) echo'<p class="error">mauvais n° ou mauvais pass</p>'?>

        <form method="post" action="vote2.php">
                <div>
                        <div>
                                <label for="numero">N° </label>
                                <input type="text" id="numero" name="numero" required size="2" pattern="[1-9]{1,3}" placeholder="(exemple : 28)">
                                <span class="validity"></span>
                        </div>

                        <div>
                                <label for="pass">Pass : </label>
                                <input type="text" id="pass" name="pass" required size="4" pattern=".{4,4}" placeholder="(exemple : A3b2)">
                                <span class="validity"></span>
                        </div>
                </div>
                <button>Passer au vote !</button>
        </form>

</body>

</html>
