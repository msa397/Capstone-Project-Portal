<!-- 
    Page to view submitted projects
    Retrieves project info from database

    TODO:
-->



<!--Connect to database and retrieve project info-->
<?php
    try {
        require "config.php";

        $connection = new PDO($dsn, $username, $password, $options);    //Connect to database
        $sql = "SELECT * FROM Project"; //Select all entries

        $statement = $connection->prepare($sql);
        $statement->execute();

        $result = $statement->fetchAll();
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
?>

<?php
    require "roles.php";  
if (isset($_POST['submit'])) {
    try {
        if(!isset($_SESSION))
            session_start();
        $user = $_SESSION["User"];
        $connection = new PDO($dsn, $username, $password, $options);
        $count = 1;

        while(isset($_POST[$count]) && !empty($_POST[$count]))  //Count number of entries
            $count++;

        for($i = 1; $i < $count; $i++){ //For each entry: create array from form data and submit to database
            $new_pref = array(
                "user_id" => $user["user_id"],
                "project_id" => $i,
                "preference" => $_POST[$i]
            );

            $sql = "INSERT INTO Preferences (user_id, project_id, preference) VALUES (?, ?, ?)";
            $statement = $connection->prepare($sql);
            $statement->bindParam(1, $new_pref["user_id"], PDO::PARAM_STR);
            $statement->bindParam(2, $new_pref["project_id"], PDO::PARAM_STR);
            $statement->bindParam(3, $new_pref["preference"], PDO::PARAM_STR);
            $statement->execute();
        }
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>


<!--Table to view data-->
<?php //include "templates/header.php"; ?>
<html>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #000000;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
    </style>

    <title>Project Preferences</title>
    <body>
        <?php
            if($result && $statement->rowCount() > 0) { ?>
                <h2>Projects:</h2>

                <table>
                    <thead>
            <tr>
                <th>#</th>
                <th>Project Name</th>
                <th>Admin Name</th>
                <th>Admin Email</th>
                <th>Admin Company</th>
                <th>Description</th>
                <th>Skills Required</th>
                <th>Resources</th>
            </tr>
                </thead>
                <tbody>
                <?php foreach($result as $row){ ?>
                <tr>
                    <td><?php echo escape($row["project_id"]); ?></td>
                    <td><?php echo escape($row["project_name"]); ?></td>
                    <td><?php echo escape($row["admin_name"]); ?></td>
                    <td><?php echo escape($row["admin_company"]); ?></td>
                    <td><?php echo escape($row["admin_email"]); ?></td>
                    <td><?php echo nl2br(escape($row["project_description"])); ?></td>
                    <td><?php echo escape($row["project_skills"]); ?> </td>
                    <td><?php echo escape($row["project_resources"]); ?> </td>
                </tr>
                <?php } ?>
      </tbody>
  </table>

  <h2>Preferences:</h2>
  <-------------------------> <br>
  Highest&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Lowest <br><br>
        <form method = "post">
            <?php 
                $count = 1;
                foreach($result as $row){ //Create row of radio buttons for each table entry
                    echo $row['project_id'] . ': ' . $row['project_name'];?><br>

                    <input type="radio" id="1" name=<?php echo $count;?> value=1>
                    <input type="radio" id="2" name=<?php echo $count;?> value=2>
                    <input type="radio" id="3" name=<?php echo $count;?> value=3>
                    <input type="radio" id="4" name=<?php echo $count;?> value=4>
                    <input type="radio" id="5" name=<?php echo $count;?> value=5>

                    <br> &nbsp; 1 &ensp; 2 &ensp; 3 &ensp; 4 &ensp; 5 <br><br>
                    <?php $count++;
                } ?>
                <br><input type="submit" name="submit" value="Submit">
        </form>
      <?php } else { ?>
                    > No results found ?>.
      <?php } ?>
            <br><a href="index.php">Home</a>
    </body>
</html>