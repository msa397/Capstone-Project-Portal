<!-- 
    Student login screen
    Sends and reads student data from database

    TODO:
-->

<!--Connect to database-->


<html>
    <title>Student Login</title>
    <body>
        <h1>Student Login:</h1>
        <form method="post">
            <label for="email">Email</label><br>
    	    <input type="text" name="email" id="email"><br>
            <label for="pass">Password</label><br>
    	    <input type="password" name="pass" id="pass">
            <br><br><input type="submit" name="submit" value="Login">
        </form>
        <br><a href="index.php">Home</a><br><br>
    </body>
</html>

<?php
    require "roles.php";
    if (isset($_POST['submit'])) {
        $user = $DB->fetch( //Get user entry from database
            "SELECT * FROM User JOIN User_Role USING (role_id) WHERE email=?",
            [$_POST["email"]]
        );
        $pass = is_array($user);
        if($pass){ //Check password
            if ($user["pass"] == $_POST["pass"] && $user["role_id"] == 1){
                $_SESSION["User"] = $user;
                header("Location: view_projects.php");
                exit;
            }
            else if($user["role_id"] != 1)
                exit("Invalid permissions");
            else
                exit("Invalid username or password");
        }
        else
            exit("Invalid username or password");
    }?>