<?php

    require_once "./modele/etudiantDB.php";

    $articles=selectAllArticle();
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vitrine</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<div class="contener">
    <div class="logo"><img src="Images/Logo.png" alt="logo"></div>
    <ul class="menu">
        <li><a href="vitrine.php">Accueil</a></li>
        <li><a href="compte.php">Compte</a></li>
        <li><a href="organigramme.html">Organigramme</a></li>
        <li><a href="articles.php">Articles</a></li>
        <li><a href="#">Nos projets</a></li>
        <li><a href="#">Panier</a></li>
    </ul>

    <div class="propos">À propos de nous</div>

    <div class="description"><p>Bienvenue sur le site web de GameExpress. GameExpress à été fondée en juin 2016 par Charles NORRIS, le directeur générale actuel. Notre entreprise vend des jeux et
        consoles à prix abordables pour ses clients. Depuis notre création, l'entreprise n'a pas arrêté de se développer et nous somme maintenant en position de vous proposer les meilleurs
        produits possibles avec la meilleure qualité et le meilleur prix. Les consoles que nous vendons sont très variées. Nous proposons entre autres, des Nintendo Switch classique et OLED mais
        également des PS4 ou PS5 mais nous vendons également des consoles plus anciennes comme la Xbox 360 ou la WII. Les jeux ne font pas excepetion à cette diversité avec les derniers Mario et
        Zelda mais aussi les vieux Sonic. Nos employés sont tous des passionnés, ils sauront donc vous conseiller ou vous fournir les meilleurs résultats possibles. Vous êtes présents sur ce
        site, mais nous vendons également nos produits en magasin. Notre magasin physique est situé à Besançon zone Chateaufarine. Notre objectif est de vous rendre heureux lorsque vous achetez
        nos produits, donc nous avons toujours tout fait pour vous assurer les meilleurs prix pour votre bonheur, et cela ne changera pas.</p></div>
    <div class="top">Nos meilleurs produits</div>
    <div class="produits">
        <div class="jeux">Jeux</div>
        <div class="carte">
            <img src="./Images/Jeux/F1.jpg" alt="F1" class="image">
            <div class="nom">F1 22</div>
            <div class="prix">60€</div>
            <a href="detail-article.php?nom=F1 22&prix=60&image=F1&description=<?= $articles[0]["description_article"]?>"><button class="détail">Détail</button></a>
            <button class="panier">Ajouter au panier</button>
        </div>
        <div class="carte">
            <img src="./Images/Jeux/Mario%203d%20all%20stars.jpg" alt="mario" class="image">
            <div class="nom">Mario 3D All Stars</div>
            <div class="prix">65€</div>
            <a href="detail-article.php?nom=Mario 3D All Stars&prix=65&image=Mario%203d%20all%20stars&description=<?= $articles[3]["description_article"]?>"><button class="détail">Détail</button></a>
            <button class="panier">Ajouter au panier</button>
        </div>
        <div class="carte">
            <img src="./Images/Jeux/SpiderMan.jpg" alt="SpiderMan" class="image">
            <div class="nom">SpiderMan</div>
            <div class="prix">60€</div>
            <a href="detail-article.php?nom=SpiderMan&prix=60&image=SpiderMan&description=<?= $articles[8]["description_article"]?>"><button class="détail">Détail</button></a>
            <button class="panier">Ajouter au panier</button>
        </div>
        <div class="console">Consoles</div>
        <div class="carte">
            <img src="./Images/Jeux/Nintendo%20Switch.jpg" alt="Switch" class="image">
            <div class="nom">Nintendo Switch</div>
            <div class="prix">300€</div>
            <a href="detail-article.php?nom=Nintendo Switch&prix=300&image=Nintendo%20Switch&description=<?= $articles[4]["description_article"]?>"><button class="détail">Détail</button></a>
            <button class="panier">Ajouter au panier</button>
        </div>
        <div class="carte">
            <img src="./Images/Jeux/PS4.jpg" alt="PS4" class="image">
            <div class="nom">PS4</div>
            <div class="prix">300€</div>
            <a href="detail-article.php?nom=PS4&prix=300&image=PS4&description=<?= $articles[5]["description_article"]?>"><button class="détail">Détail</button></a>
            <button class="panier">Ajouter au panier</button>
        </div>
        <div class="carte">
            <img src="./Images/Jeux/Xbox.jpg" alt="Xbox" class="image">
            <div class="nom">Xbox Series X</div>
            <div class="prix">350€</div>
            <a href="detail-article.php?nom=Xbox Series X&prix=350&image=Xbox&description=<?= $articles[11]["description_article"]?>"><button class="détail">Détail</button></a>
            <button class="panier">Ajouter au panier</button>
        </div>
    </div>
    <footer><p>GameExpress</p> <p>Tél : 0609562081</p> <p>Mail : GameExpress@gmail.com</p> <a href="https://www.instagram.com/?hl=fr"><img class="réseaux" src="Images/Footer/Instagram.png" alt="Instagramme"> : @GameExpressOff</a> <a href="https://twitter.com/?lang=fr"><img class="réseaux" src="Images/Footer/Twitter.jpg" alt="Twitter"> : @GameExpressOff</a> <a href="https://fr-fr.facebook.com/"><img class="réseaux" src="Images/Footer/Facebook.png" alt="Facebook"> : @GameExpressOff</a></footer>
</div>
</body>
</html>