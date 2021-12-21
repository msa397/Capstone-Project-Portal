<?php
/*
    Initializaes the database from init.sql

    TODO:
*/



require "config.php";

try {
    $connection = new PDO("mysql:host=$host", $username, $password, $options);  //Create connection
    $sql = file_get_contents("database/init.sql");
    $connection->exec($sql);    //Execute init.sql file

} catch (PDOExcpetion $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>
