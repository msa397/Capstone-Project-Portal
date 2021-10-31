<!-- 
    Starting student login screen
    Also sets up and connects to database

    TODO:
        Make pretty

    Modified: 10/31/21 by Michael
-->



<!--Student Login Form-->
<?php include "templates/header.php"; ?>
<html>
    <title>Student Login</title>
    <body>

        <h1>Student Login:</h1>
        <form method="post" action=studentdata.php>
    	    <label for="firstname">First Name</label>
    	    <input type="text" name="firstname" id="firstname">
    	    <label for="lastname">Last Name</label>
    	    <input type="text" name="lastname" id="lastname">
            <input type="submit">
        </form>
        
    </body>
</html>