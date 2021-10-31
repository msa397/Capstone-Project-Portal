<?php
/*
Initializaes the database from init.sql

TODO: 
    Everything
    Remove test output

Modified: 10/31/21 by Michael
*/



$host       = "localhost";
$username   = "root";
$password   = "";
$dbname     = "Project_Portal";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $connection = new PDO("mysql:host=$host", $username, $password, $options);
    $sql = file_get_contents("data/init.sql");
    $connection->exec($sql);
    
    
    echo "TEST: Database and tables created.";


} catch (PDOExcpetion $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>