<?php
/*
    Initializaes the database from init.sql

    TODO: 
*/



require "config.php";

try {
    $connection = new PDO("mysql:host=$host", $username, $password, $options); //Create connection
    $sql = file_get_contents("database/test.sql");
    $connection->exec($sql); //Execute test.sql file

} catch (PDOExcpetion $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>

<h1>Test Values Added to Database</h1>
<br><a href="index.php">Home</a>