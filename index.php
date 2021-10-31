<!-- 
    Index page for site. Choose between logging in as student or posting project as company
    Pseudocode:
      Students log in and data is stored in Student Table
      Companies post projects and data is stored in Project Table
      Students use site to post preferences, which are stored in Preferences Table
      Site uses algorithm to form groups, which are stored in Group Table

    TODO:
        More options?
        Does site need to create database, or just connect to existing one?
        What are best practices for running .sql file in PHP?
        Make pretty
        !ALL: Error Handling and Input Cleansing!

    Modified: 10/31/21 by Michael
-->



<?php include "init_database.php"; ?>
<?php include "templates/header.php"; ?>
<html>
  <title>Capstone Project Portal</title>
  <body>  

    <h1>Capstone Project Portal</h1>
    <ul>
      <li>
        <a href="student_login.php"><strong>Student Login</strong></a>
      </li>
      <li>
        <a href="post_project.php"><strong>Post Project</strong></a>
      </li>
    </ul>

  </body>
</html>
