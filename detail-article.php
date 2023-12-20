<?php

    require_once "modele/etudiantDB.php";

    $nom = $_GET["nom"];
    $prix = $_GET["prix"];
    $image = $_GET["image"];
    $description = $_GET["description"];

?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Détail</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="contener-detail">

<div class="logo"><img src="Images/Logo.png" alt="logo"></div>
<ul class="menu">
    <li><a href="vitrine.php">Accueil</a></li>
    <li><a href="compte.php">Compte</a></li>
    <li><a href="organigramme.html">Organigramme</a></li>
    <li><a href="articles.php">Articles</a></li>
    <li><a href="#">Nos projets</a></li>
    <li><a href="#">Panier</a></li>
</ul>

    <div class="carte-detail">
        <p><img src="Images/Jeux/<?= $image?>.jpg" alt="article" class="image"></p>
        <p class="nom"><?= $nom?></p>
        <p class="description"><?= $description?></p>
        <p class="prix"><?= $prix?>€</p>
    </div>
</div>
</body>
</html>