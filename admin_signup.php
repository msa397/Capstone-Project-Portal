<!-- 
    Starting Admin signup screen
    Sends Admin data to database

    TODO:
-->



<!--Send Admin info to database-->
<?php
if (isset($_POST['submit'])) {
    require "config.php";
    require "common.php";

    try {
        $connection = new PDO($dsn, $username, $password, $options);    //Connect to database
        $new_admin = array(
            "email" => $_POST['email'],
            "pass" => $_POST['pass'],
            "first_name" => $_POST['first_name'],
            "last_name"  => $_POST['last_name']
        );
        $sql = "INSERT INTO User (email, pass, first_name, last_name, role_id) VALUES (?, ?, ?, ?, 2)"; 
        $statement = $connection->prepare($sql);
        $statement->bindParam(1, $new_admin["email"], PDO::PARAM_STR);
        $statement->bindParam(2, $new_admin["pass"], PDO::PARAM_STR);
        $statement->bindParam(3, $new_admin["first_name"], PDO::PARAM_STR);
        $statement->bindParam(4, $new_admin["last_name"], PDO::PARAM_STR);
        $statement->execute();  //Insert entry into database
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>


<!--Admin Signup Form-->
<?php include "templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) {//Confirmation Message?>
  <?php echo escape($_POST['first_name']); ?> successfully added.
<?php } ?>


<html>
    <title>Client Signup</title>
    <body>

        <h1>Client Signup:</h1>
        <form method="post">
            <label for="email">Email</label>
    	    <input type="text" name="email" id="email">
            <label for="pass">Password</label>
    	    <input type="password" name="pass" id="pass">
    	    <label for="first_name">First Name</label>
    	    <input type="text" name="first_name" id="first_name">
    	    <label for="last_name">Last Name</label>
    	    <input type="text" name="last_name" id="last_name">
            <br><br><input type="submit" name="submit" value="Submit">
        </form>
        <br><a href="index.php">Home</a>
        
    </body>
</html>