<!--
    Student login form info is sent here
    Sends data to database

    TODO:
        Send data to database
        Make pretty

    Modified: 10/31/21 by Michael
-->

<html>
    <head>
        <title>Student Login</title>
        <body>

        Welcome: 

        <?php 
        echo $_POST["first_name"];
        echo " " ;
        echo $_POST["last_name"];
        ?>

        </body>
</html>