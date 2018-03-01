<!DOCTYPE html>
<html lang="fr">

<head>
        <?php include("../include/inc_meta.php") ?>
        <?php include("../include/inc_analytics.php") ?>
        <title>Vote - page d'identification</title>
        <link rel="stylesheet" href="../global.css">
</head>

<body id="vote">
        <?php if(isset($_GET['ok'])) echo" mauvais n° ou mauvais pass";?>
        <form method="post" action="vote2.php">
        <div>
                <label for="numero">N° </label>
                <input type="text" id="numero" name="numero" required size="2" pattern="[1-9]{1,3}">
                <span class="validity"></span>
                <p>(exemple : 28) </p>
        </div>

        <div>
                <label for="pass">Pass : </label>
                <input type="text" id="pass" name="pass" required size="4" pattern=".{4,4}">
                <span class="validity"></span>
                <p>Merci de respecter les majuscules (Exemple : A3b2)</p>
        </div>

        <div>
                <button>Passer au vote !</button>
        </div>
        </form>
</body>

</html>
