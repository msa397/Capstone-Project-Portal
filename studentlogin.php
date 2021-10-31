<!-- 
    Starting student login screen
    Also sets up and connects to database

    TODO:
        Does site need to create database, or just connect to existing one?
        What are best practices for running .sql file in PHP?
        Make pretty

    Modified: 10/31/21 by Michael
-->



<!--Database Setup-->
<?php
/*
$host = "localhost";
$username = "root";
$password = "";
$db_name = "projectportal";

$conn = new mysqli($host, $username, $password, $db_name);
if(!$conn) {
    die("Cannot connect to the database");
}

$query = file_get_contents("DATABASE\\projectportal.sql");
$sql = $query;

if ($conn->query($sql) === TRUE) {
    echo "Tables created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
  */
?>


<!--Student Login Form-->
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Student Login</title>
        <link rel="stylesheet" href="css/style.css" />
        <body>

        <h1>Student Login:</h1>
        <form method="post" action=studentdata.php>
            First Name: <input type="text" name="first_name"><br>
            Last Name: <input type="text" name="last_name"><br>
            <input type="submit">
        </form>
            
        </body>
</html>