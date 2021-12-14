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
    $sql = file_get_contents("database/test.sql");
    $connection->exec($sql);

} catch (PDOExcpetion $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>

<h1>Test Values Added to Database</h1>
<br><a href="index.php">Home</a>