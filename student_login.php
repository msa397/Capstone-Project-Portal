<!-- 
    Student login screen
    Sends and reads student data from database

    TODO:
        Make pretty
        remove test output
        Encrypt password???
-->


<!--Connect to database-->


<html>
    <title>Student Login</title>
    <body>

        <h2>Enter email and password</h2>
        <form method="post">
            <label for="email">Email</label>
    	    <input type="text" name="email" id="email">
            <label for="pass">Password</label>
    	    <input type="text" name="pass" id="pass">
            <br><br><input type="submit" name="login" value="login">
        </form>
        <br><a href="index.php">Home</a>

    </body>
</html>

<?php
    //require "config.php";
    //require "common.php";
    require "database.php";
            $user = $DB->fetch(
                "SELECT * FROM User JOIN User_Role USING (role_id) WHERE email=?",
                [$_POST["email"]]
            );
            $pass = is_array($user);
            if($pass){
                if ($user["pass"] == $_POST["pass"] && 
                    $user["role_id"] == 1){
                    header("Location: view_projects.php");
                    exit;
                }
                else if($user["role_id"] != 1){
                    exit("Invalid permissions");
                }
            }
            if(!$pass)
                exit("Invalid user/password"); 

            $_SESSION["User"] = $user;
            $_SESSION["User"]["Permission"] = [];
            unset($_SESSION["User"]["pass"]);

            $perm = $DB->fetchAll(
                "SELECT * FROM Role_Permissions WHERE role_id=?",
                [$user["role_id"]]
              );
              foreach ($perm as $p) { $_SESSION["User"]["Permission"][] = $p["perm_id"]; }

              print_r($_SESSION);
?>