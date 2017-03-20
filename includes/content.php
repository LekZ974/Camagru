<?php
/**
 * Created by PhpStorm.
 * User: ahoareau
 * Date: 2/16/17
 * Time: 2:03 PM
 */
session_start();
if ($_SESSION[logguedOnUser] != ""){
    header('Location: ../camagru/indexCamagru.php');
}