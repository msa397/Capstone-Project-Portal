<!-- 
    Admin login screen
    Sends and reads User data from database

    TODO:
        Make pretty
        remove test output
        Encrypt password???
-->


<!--Connect to database-->


<html>
    <title>Admin Login</title>
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
    //require "database.php";
    require "roles.php";
            $user = $DB->fetch(
                "SELECT * FROM User JOIN User_Role USING (role_id) WHERE email=?",
                [$_POST["email"]]
            );
            $pass = is_array($user);
            if($pass){
                if ($user["pass"] == $_POST["pass"] && 
                    $user["role_id"] == 2){
                    $url = "post_project.php";
                    $postvars = http_build_query($user);
                    $ch = curl_init();

                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_POST, count($user));
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);

                    $result = curl_exec($ch);
                    curl_close($ch);


                    header("Location: post_project.php");
                    exit;
                }
                else if($user["role_id"] != 2){
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