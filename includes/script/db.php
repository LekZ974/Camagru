<?php
/**
 * User: ahoareau
 */
function dbConnect(){
    static $connection;

    if (!isset($connection))
        $connection = mysqli_connect("localhost:3307", "root", "", "camagru")
        or die(mysqli_error($connection));
    if ($connection === FALSE)
    {
        echo "ERROR\n";
        return FALSE;
    }
    return $connection;
}