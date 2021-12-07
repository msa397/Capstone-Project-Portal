<!-- 
    Starting student signup screen
    Sends student data to database

    TODO:
        Make pretty
        remove test output
        Encrypt password???

    Modified: 10/31/21 by Michael
-->



<!--Send student info to database-->
<?php
if (isset($_POST['submit'])) {
    require "config.php";
    require "common.php";

    try {
        $connection = new PDO($dsn, $username, $password, $options);
        $new_student = array(
            "email" => $_POST['email'],
            "pass" => $_POST['pass'],
            "first_name" => $_POST['first_name'],
            "last_name"  => $_POST['last_name']
        );
        $sql = "INSERT INTO User (email, pass, first_name, last_name, role_id) VALUES (?, ?, ?, ?, 1)";
        $statement = $connection->prepare($sql);
        $statement->bindParam(1, $new_student["email"], PDO::PARAM_STR);
        $statement->bindParam(2, $new_student["pass"], PDO::PARAM_STR);
        $statement->bindParam(3, $new_student["first_name"], PDO::PARAM_STR);
        $statement->bindParam(4, $new_student["last_name"], PDO::PARAM_STR);
        $statement->execute();
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>


<!--Student Signup Form-->
<?php include "templates/header.php"; ?>


<?php if (isset($_POST['submit']) && $statement) { //TEST OUTPUT?>
  <?php echo escape($_POST['first_name']); ?> successfully added.
<?php } ?>


<html>
    <title>Student Signup</title>
    <body>

        <h1>Student Signup:</h1>
        <form method="post">
            <label for="email">Email</label>
    	    <input type="text" name="email" id="email">
            <label for="pass">Password</label>
    	    <input type="text" name="pass" id="pass">
    	    <label for="first_name">First Name</label>
    	    <input type="text" name="first_name" id="first_name">
    	    <label for="last_name">Last Name</label>
    	    <input type="text" name="last_name" id="last_name">
            <br><br><input type="submit" name="submit" value="Submit">
        </form>
        <br><a href="index.php">Home</a>
        
    </body>
</html>