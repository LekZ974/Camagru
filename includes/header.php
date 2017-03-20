<?php
/**
 * Created by PhpStorm.
 * User: ahoareau
 * Date: 2/16/17
 * Time: 1:25 PM
 */
//session_start();

//if ($_SESSION[logguedOnUser] != ""){

//}
?>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/Camagru/css/style.css"/>
    <script type="text/javascript" src="/Camagru/js/global.js"></script>
    <title>Camagru</title>
</head>
    <div id="displayMenu" class="containerMenu" onclick="sideNav(this);">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>
<h1><a href="/Camagru/index.php">CAMAGRU</a></h1>
    <div id="menu" class="sidenav">
        <a href="/Camagru/index.php">Accueil</a>
        <a href="/Camagru/auth/auth.php">Connexion</a>
        <a href="/Camagru/camagru/galerie.php">Galerie</a>
        <a href="/Camagru/camagru/indexCamagru.php">Camagru</a>
    </div>
    <a href="/Camagru/auth/auth.php"><div id="buttonConnect<?php if ($_SESSION['logguedOnUser'] != "" || $_SESSION['logguedOnUser'] != "anon") echo 'change'?>" class="containerConnect" onclick="buttonChange(this)">
        <div class="b1"></div>
        <div class="b2"></div>
        <div class="b3"></div>
        <div class="b4"></div>
    </div></a>
</html>

