<!--
    Companies post projects here

    TODO:
        Allow companies to post projects
        Make Pretty
        Sanitize POST
        project note?

    Modified: 
-->



<!--Send projet info to database-->
<?php
if (isset($_POST['submit'])) {
    require "config.php";
    require "common.php";

    try {
        $connection = new PDO($dsn, $username, $password, $options);
        $new_project = array(
            "project_name" => $_POST['project_name'],
            "admin_name"  => $_POST['admin_name'],
            "admin_company"  => $_POST['admin_company'],
            "admin_email"  => $_POST['admin_email'],
            "project_description"  => $_POST['project_description'],
            "project_skills"  => $_POST['project_skills'],
            "project_resources"  => $_POST['project_resources'],
            //"project_note"  => $_POST['project_note']
        );
        $sql = "INSERT INTO Project (project_name, admin_name, admin_company, admin_email,
                                     project_description, project_skills, project_resources) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $statement = $connection->prepare($sql);
        $statement->bindParam(1, $new_project["project_name"], PDO::PARAM_STR);
        $statement->bindParam(2, $new_project["admin_name"], PDO::PARAM_STR);
        $statement->bindParam(3, $new_project["admin_company"], PDO::PARAM_STR);
        $statement->bindParam(4, $new_project["admin_email"], PDO::PARAM_STR);
        $statement->bindParam(5, $new_project["project_description"], PDO::PARAM_STR);
        $statement->bindParam(6, $new_project["project_skills"], PDO::PARAM_STR);
        $statement->bindParam(7, $new_project["project_resources"], PDO::PARAM_STR);
        //$statement->bindParam(8, $new_project["project_notes"], PDO::PARAM_STR);
        $statement->execute();
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>


<!--Project Submission Form-->
<?php include "templates/header.php"; ?>


<?php if (isset($_POST['submit']) && $statement) { //TEST OUTPUT?>
  <?php echo escape($_POST['project_name']); ?> successfully added.
<?php } ?>


<html>
    <title>Submit Project</title>
    <body>

        <h1>Submit Project:</h1>
        <form method="post">
    	    <label for="project_name">Project Name:</label>
    	    <input type="text" name="project_name" id="project_name">
    	    <label for="admin_name">Admin Name:</label>
    	    <input type="text" name="admin_name" id="admin_name">
            <label for="admin_company">Admin Company:</label>
    	    <input type="text" name="admin_company" id="admin_company">
            <label for="admin_email">Admin Email:</label>
    	    <input type="email" name="admin_email" id="admin_email">
            <label for="project_description">Description:</label>
            <textarea id="project_description" name ="project_description" rows="5" cols="50"></textarea>
            <label for="project_skills">Skills and Technologies Required:</label>
    	    <input type="text" name="project_skills" id="project_skills">
            <label for="project_resources">Resources:</label>
    	    <input type="text" name="project_resources" id="project_resources">
            <!--<label for="project_notes">Notes (Optional)</label>
    	    <input type="text" name="project_notes" id="project_notes"> -->
            <br><br><input type="submit" name="submit" value="Submit">
        </form>
        <br><a href="index.php">Home</a>
        
    </body>
</html>