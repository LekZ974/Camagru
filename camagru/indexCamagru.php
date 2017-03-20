<?php
/**
 * Created by PhpStorm.
 * User: ahoareau
 * Date: 2/16/17
 * Time: 2:10 PM
 */
session_start();
if ($_SESSION['logguedOnUser'] === "anon" || $_SESSION['logguedOnUser'] === ""){
    echo $_SESSION['logguedOnUser'];
    header('Location: ../index.php');
}
include_once('../includes/header.php');
include_once('../includes/footer.php');
?>
<html>
<head>
    <script type="text/javascript" src="../js/cam.js"></script>
</head>
<body>
<div class="camagru">
    <video id="video" autoplay></video>
    <br>
    <input type="file" accept="image/*;capture=camera">
    <button onclick="changeFilter()">Filters</button>
    <button onclick="snapshot()">Take Snapshot</button>
</div>
<video autoplay></video>
<img src="">
<canvas id="canvas" style="display:none;"></canvas>
<script type="text/javascript" src="../js/cam.js"></script>
</body>
</html>
