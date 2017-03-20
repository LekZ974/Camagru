<?php
/**
 * Created by PhpStorm.
 * User: ahoareau
 * Date: 2/17/17
 * Time: 1:49 PM
 */
session_start();
$_SESSION = array();
session_destroy();
setcookie('login', '');
setcookie('passwd', '');
header('Location: ../../index.php');