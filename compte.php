<?php

    $identifiant=null;
    $mdp=null;

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $identifiant=$_POST["identifiant"];
        $mdp=$_POST["Mdp"];
    }

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Compte</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="contenair_compte">
    <div class="logo"><img src="Images/Logo.png" alt="logo"></div>
<ul class="menu">
    <li><a href="vitrine.php">Accueil</a></li>
    <li><a href="compte.php">Compte</a></li>
    <li><a href="organigramme.html">Organigramme</a></li>
    <li><a href="articles.php">Articles</a></li>
    <li><a href="#">Nos projets</a></li>
    <li><a href="#">Panier</a></li>
</ul>
    <h1 class="titre_compte">Veuillez vous connecter</h1>
        <form action="vitrine.php" method="post">
            <label for="identifiant">Identifiant</label>
            <input type="text" id="identifiant" name="identifiant" value="<?= $identifiant ?>">
            <label for="Mdp">Mot de Passe</label>
            <input type="text" id="Mdp" name="Mdp" value="<?= $mdp ?>">
            <input type="submit" value="Connexion">
        </form>
    <footer><p>GameExpress</p> <p>Tél : 0609562081</p> <p>Mail : GameExpress@gmail.com</p> <a href="https://www.instagram.com/?hl=fr"><img class="réseaux" src="Images/Footer/Instagram.png" alt="Instagramme"> : @GameExpressOff</a> <a href="https://twitter.com/?lang=fr"><img class="réseaux" src="Images/Footer/Twitter.jpg" alt="Twitter"> : @GameExpressOff</a> <a href="https://fr-fr.facebook.com/"><img class="réseaux" src="Images/Footer/Facebook.png" alt="Facebook"> : @GameExpressOff</a></footer>
</div>
</body>
</html>