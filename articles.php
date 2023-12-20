<?php

require_once "./modele/etudiantDB.php";

$articles=selectAllArticle();
$categories=selectAllCategories();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Le formulaire a été soumis
        // Tester si tout les champs obligatoires sont saisis
        if ($_POST["id_categorie"] == null) {
            $idCategorie = null;
        } else {
            $idCategorie = $_POST["id_categorie"];
        }
    }

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articles</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="contenair_article">
    <div class="logo"><img src="Images/Logo.png" alt="logo"></div>
    <ul class="menu">
        <li><a href="vitrine.php">Accueil</a></li>
        <li><a href="compte.php">Compte</a></li>
        <li><a href="organigramme.html">Organigramme</a></li>
        <li><a href="articles.php">Articles</a></li>
        <li><a href="#">Nos projets</a></li>
        <li><a href="#">Panier</a></li>
    </ul>
  <div class="titre">Voici tout les articles que propose notre site</div>
    <div class="top-vente">Les articles les plus demandés</div>
    <div class="plus-demande">

    <div class="carte">
        <img src="./Images/Jeux/F1.jpg" alt="F1" class="image">
        <div class="nom">F1 22</div>
        <div class="prix">60€</div>
        <a href="detail-article.php?nom=F1 22&prix=60&image=F1&description=<?= $articles[0]["description_article"]?>"><button class="détail">Détail</button></a>
        <button class="panier">Ajouter au panier</button>
    </div>
    <div class="carte">
        <img src="./Images/Jeux/Nintendo%20Switch.jpg" alt="Switch" class="image">
        <div class="nom">Nintendo Switch</div>
        <div class="prix">300€</div>
        <a href="detail-article.php?nom=Nintendo Switch&prix=300&image=Nintendo%20Switch&description=<?= $articles[4]["description_article"]?>"><button class="détail">Détail</button></a>
        <button class="panier">Ajouter au panier</button>
    </div>
    <div class="carte">
        <img src="./Images/Jeux/Mario%203d%20all%20stars.jpg" alt="Mario" class="image">
        <div class="nom">Mario 3D all stars</div>
        <div class="prix">65€</div>
        <a href="detail-article.php?nom=Mario 3D All Stars&prix=65&image=Mario%203d%20all%20stars&description=<?= $articles[3]["description_article"]?>"><button class="détail">Détail</button></a>
        <button class="panier">Ajouter au panier</button>
    </div>
    </div>

    <h2 class="titre2">Nos articles</h2>

    <form action="" method="post">
        <label for="id_categorie">Catégorie du produit : </label>
        <select name="id_categorie" id="id_categorie">
            <option value="">Aucun filtre</option>
            <?php foreach ($categories as $categorie){ ?>
                <option value="<?= $categorie["id_categorie"] ?>"><?= $categorie["nom_categorie"] ?></option>
            <?php } ?>
        </select>

        <input type="submit" value="Envoyer">
    </form>

    <div class="allArticle">
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $presence = 0;
        foreach($articles as $article){
             if($article["id_categorie"]==$idCategorie){ ?>
                 <?php $presence=1;?>
            <div class="carte">
                <img src="./Images/Jeux/<?= $article["image_article"]?>.jpg" alt="jeu/console" class="image">
                <div class="nom"><?= $article["nom_article"]?></div>
                <div class="prix"><?= $article["prix_article"]?>€</div>
                <a href="detail-article.php?nom=<?= $article["nom_article"]?>&prix=<?= $article["prix_article"]?>&image=<?= $article["image_article"]?>&description=<?= $article["description_article"]?>"><button class="détail">Détail</button></a>
                <button class="panier">Ajouter au panier</button>
            </div>
    <?php }
        } if ($presence != 1){ ?>
                <?php foreach($articles as $article){ ?>
                    <div class="carte">
                        <img src="./Images/Jeux/<?= $article["image_article"]?>.jpg" alt="jeu/console" class="image">
                        <div class="nom"><?= $article["nom_article"]?></div>
                        <div class="prix"><?= $article["prix_article"]?>€</div>
                        <a href="detail-article.php?nom=<?= $article["nom_article"]?>&prix=<?= $article["prix_article"]?>&image=<?= $article["image_article"]?>&description=<?= $article["description_article"]?>"><button class="détail">Détail</button></a>
                        <button class="panier">Ajouter au panier</button>
                    </div>
        <?php }}}else{?>
        <?php foreach($articles as $article){ ?>
        <div class="carte">
            <img src="./Images/Jeux/<?= $article["image_article"]?>.jpg" alt="jeu/console" class="image">
            <div class="nom"><?= $article["nom_article"]?></div>
            <div class="prix"><?= $article["prix_article"]?>€</div>
            <a href="detail-article.php?nom=<?= $article["nom_article"]?>&prix=<?= $article["prix_article"]?>&image=<?= $article["image_article"]?>&description=<?= $article["description_article"]?>"><button class="détail">Détail</button></a>
            <button class="panier">Ajouter au panier</button>
        </div>
        <?php }}?>
    </div>
    <footer><p>GameExpress</p> <p>Tél : 0609562081</p> <p>Mail : GameExpress@gmail.com</p> <a href="https://www.instagram.com/?hl=fr"><img class="réseaux" src="Images/Footer/Instagram.png" alt="Instagramme"> : @GameExpressOff</a> <a href="https://twitter.com/?lang=fr"><img class="réseaux" src="Images/Footer/Twitter.jpg" alt="Twitter"> : @GameExpressOff</a> <a href="https://fr-fr.facebook.com/"><img class="réseaux" src="Images/Footer/Facebook.png" alt="Facebook"> : @GameExpressOff</a></footer>
</div>
</body>
</html>
