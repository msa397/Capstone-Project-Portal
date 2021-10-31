<?php
/*
    Configuration for database connection

    Modified: 10/31/21 by Michael
*/



$host       = "localhost";
$username   = "root";
$password   = "";
$dbname     = "Project_Portal";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
?>