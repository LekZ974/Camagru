<?php
/**
 * Created by PhpStorm.
 * User: ahoareau
 * Date: 2/16/17
 * Time: 1:25 PM
 */
session_start();

if ($_SESSION[logguedOnUser] != ""){

}
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/myCamagru/css/style.css"/>
    <script type="text/javascript" src="/myCamagru/js/global.js"></script>
    <title>Camagru</title>
</head>
    <div id="displayMenu" class="containerMenu" onclick="sideNav(this);">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>
    <div id="menu" class="sidenav">
        <a href="/myCamagru/index.php">Accueil</a>
        <a href="/myCamagru/auth/auth.php">Connexion</a>
        <a href="/myCamagru/camagru/galerie.php">Galerie</a>
        <a href="/myCamagru/camagru/indexCamagru.php">Camagru</a>
    </div>
    <a href="/myCamagru/auth/auth.php"><div id="buttonConnect<?php if ($_SESSION['logguedOnUser'] != "" || $_SESSION['logguedOnUser'] != "anon") echo 'change'?>" class="containerConnect" onclick="buttonChange(this)">
        <div class="b1"></div>
        <div class="b2"></div>
        <div class="b3"></div>
        <div class="b4"></div>
    </div></a>
</html>

