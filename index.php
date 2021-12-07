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
        EVCAPPROACH.com
        Make pretty
        !ALL: Error Handling and Input Cleansing!
        Submission Pages for student and project
        HTML Header File
        admin see different stuff
        user role creation
          only allow verified clients to post projects

        signup page
        create email and password

        sign up -> login

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
        <a href="student_signup.php"><strong>Student Signup</strong></a>
      </li>
      <li>
        <a href="admin_signup.php"><strong>Admin Signup</strong></a>
      </li>
      <br>
      <li>
        <a href="student_login.php"><strong>Student Login</strong></a>
      </li>
      <li>
        <a href="admin_login.php"><strong>Admin Login</strong></a>
      </li>
      <br><br><br>
      <h3>TEST COMMANDS:</h3>
      <li>
        <a href="post_project.php"><strong>Post Project</strong></a>
      </li>
      <li>
        <a href="view_projects.php"><strong>View Projects</strong></a>
      </li>
    </ul>

  </body>
</html>