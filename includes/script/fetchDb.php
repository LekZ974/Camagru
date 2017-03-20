<?php
/**
 * Created by PhpStorm.
 * User: ahoareau
 * Date: 2/16/17
 * Time: 3:11 PM
 */
include ('db.php');

function fetchLogin($testLogin){
    $db = dbConnect();
    echo $testLogin.PHP_EOL;
    $s_login = mysqli_real_escape_string($db, $login);
    $query = "SELECT login,password,email,power FROM users WHERE login='$testLogin'";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    if (mysqli_num_rows($result) === 0)
        return FALSE;
    $out = mysqli_fetch_assoc($result);
    return ($out);
}

function addUser($login, $passwd, $mail){
    $db = dbConnect();
    $s_login = mysqli_real_escape_string($db, $login);
    $query = "SELECT login,password,email FROM users WHERE login='$login'";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    if (mysqli_num_rows($result) === 0)
        return (FALSE);
    $query = "INSERT INTO users (login, password, email) VALUES ('".$login."', '".$passwd."', '".$mail."')";
    var_dump($query);
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    return (TRUE);
}