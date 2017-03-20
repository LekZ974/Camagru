#!/usr/bin/php
<?php
/**
 *
 * ahoareau@student.42.fr
 *
 */
include("../includes/script/db.php");
include("../includes/script/fetchDb.php");
if (!($co = mysqli_connect("localhost", "root")))
    echo "Error connecting to the database\n";
$init = parse_ini_file("config.ini");
$chose = mysqli_query($co, "DROP DATABASE ".$init["dbname"]);
$chose = mysqli_query($co, "CREATE DATABASE ".$init["dbname"]);
mysqli_close($co);
$co = dbConnect();
mysqli_query($co, "DROP TABLE *");
foreach($init['table'] as $table)
{
    mysqli_query($co, $table) or die(mysqli_error($co));
}
