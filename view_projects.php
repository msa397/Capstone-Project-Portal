<!-- 
    Page to view submitted projects
    Retrieves project info from database

    TODO:
        Make pretty
        remove test output

    Modified: 10/31/21 by Michael
-->



<!--Connect to database and retrieve project info-->
<?php
//if (isset($_POST['submit'])) {
    try {
        require "config.php";
        require "common.php";

        $connection = new PDO($dsn, $username, $password, $options);
        $sql = "SELECT * FROM Project";

        $statement = $connection->prepare($sql);
        $statement->execute();

        $result = $statement->fetchAll();
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
//}
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
                    <td>                <input type="radio" id="1" name="1" value=1>
                        <input type="radio" id="2" name="1" value=2>
                        <input type="radio" id="3" name="1" value=3>
                    <input type="radio" id="4" name="1" value=4>
                <input type="radio" id="5" name="1" value=5>
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
        <form method = "post">
            <?php foreach($result as $row){ ?>
                <label for="first"><?php echo $row['project_name']; ?></label>
                
                <input type="radio" id="1" name="1" value=1>
                <label for="first">1</label>
                
                <input type="radio" id="2" name="1" value=2>
                <label for="first">2</label>
                
                <input type="radio" id="3" name="1" value=3>
                <label for="first">3</label>
                
                <input type="radio" id="4" name="1" value=4>
                <label for="first">4</label>
                
                <input type="radio" id="5" name="1" value=5>
                <label for="first">5</label>
                <br>
            <?php } ?>
        </form>
  <?php } else { ?>
    > No results found ?>.
  <?php }
//} ?>
        <br><a href="index.php">Home</a>
    </body>
</html>