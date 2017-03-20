<?php
include 'database.php';
try
{
    $pdo = new PDO($DB_DSN.';port=8080;'.$DB_NAME, $DB_USER, $DB_PASSWORD);
    print_r($pdo);
    $pdo->exec("DROP DATABASE IF EXISTS ".$DB_NAME);
    $DATABASE = $pdo->exec("CREATE DATABASE IF NOT EXISTS ".$DB_NAME);
    if ($DATABASE)
    {
        echo "Database : ".$DB_NAME." created".PHP_EOL;
    }
    else
    {
        die(print_r($pdo->errorInfo(), true));
    }
    $pdo = null;
}
catch(PDOException $e)
{
    die("DB ERROR: ".$e->getMessage());
}
try
{
    $DB_DSNNAME = $DB_DSN.";dbname=".$DB_NAME;
    $pdo = new PDO($DB_DSNNAME , $DB_USER, $DB_PASSWORD);
}
catch(PDOException $e)
{
    print_r($pdo);
    die("DB ERROR: ".$e->getMessage());
}
