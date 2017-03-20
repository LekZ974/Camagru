<?php
/**
 * Created by PhpStorm.
 * User: ahoareau
 * Date: 2/16/17
 * Time: 2:29 PM
 */

include ('../includes/script/fetchDb.php');

if (checkIsValid($_POST['createPasswd'], $_POST['createPasswd2']))
{
    if (checkIsValid($_POST['mail'], $_POST['mail2']))
    {
        if (signUp($_POST['login'], $_POST['passwd'], $_POST['mail'])){
            echo "CREATION VALIDE";
        }
        else {
            echo "Compte existant ou a confirmer, verifies tes mails!";
        }
    }
}
else{
    echo "CREATION INVALIDE";
}

function checkIsValid($str1, $str2){
    if ($str1 === $str2 && isset($str1) && isset($str2)){
        echo "OK";
        return TRUE;
    }
    echo "Champs invalides / Verifiez les champs";
    return FALSE;
}

function signUp($login, $passwd, $mail){
    if (!fetchLogin($login)){
        echo "FETCHLOGIN";
        addUser($login, $passwd, $mail);
        $_SESSION['loggued_on_user'] = ucfirst($login);
        return (TRUE);
    }
    echo "Login exist";
    return FALSE;
//    addUser($login, $passwd, $mail);
//    $_SESSION['loggued_on_user'] = ucfirst($login);
//    return (TRUE);
//    sendMail($login, $passwd, $mail);
    //envoie du mail de confirmation
}

function sendMail($login, $passwd, $mail){
    $subject = "Confirmation de l'inscription de ".$login." sur Camagru".PHP_EOL;
    $message = "Pour confirmer ton inscription clique ici";
    mail($mail, $subject, $message);
}
