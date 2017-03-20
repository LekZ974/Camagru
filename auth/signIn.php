<?php

include ('../includes/script/db.php');

if ($_SESSION['logguedOnUser'] !== "anon" || $_SESSION['logguedOnUser'] !== ""){
    echo $_SESSION['logguedOnUser'];
    header('Location: ../index.php');
}

if (connect($_POST['login'], $_POST['passwd'])) {
    header('Location: ../camagru/indexCamagru.php');
}
else {
    header('Location: ../index.php');
}

function auth($login, $passwd){
    $db = dbConnect();
    $s_login = mysqli_real_escape_string($db, $login);
    $query = "SELECT login,password,power FROM users WHERE login='$login'";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    if (mysqli_num_rows($result) === 0)
        return FALSE;
    $row = $result->fetch_row();
    if ($row[0] === $login && $row[1] === $passwd)
    {
        if ($row[2] == 1)
        {
            return ('client');
        }
        return ('unregister');
    }
    else
      return (0);
}

function connect($login, $passwd){
    $passwd = hash('md5', $passwd);
    $_SESSION['power'] = auth($login, $passwd);
    if ($_SESSION['power'] === 'unregister' || $_SESSION['power'] === 0) {
        $_SESSION['logguedOnUser'] = "anon";
        return FALSE;
    }
    elseif ($_SESSION['power'] === 'client') {
        $_SESSION['logguedOnUser'] = $login;
        return TRUE;
    }
//    header('Location: ../camagru/indexCamagru.php');
}
