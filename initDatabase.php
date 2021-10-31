<?php
/*
    Initializaes the database from init.sql

    TODO: 
        Remove test output

    Modified: 10/31/21 by Michael
*/



require "config.php";

try {
    $connection = new PDO("mysql:host=$host", $username, $password, $options);
    $sql = file_get_contents("database/init.sql");
    $connection->exec($sql);
    
    
    echo "TEST: Database and tables created.";


} catch (PDOExcpetion $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>