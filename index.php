<!-- 
    Index page for site. Choose between logging in as student or posting project as company
    Pseudocode:
      Students log in and data is stored in Student Table
      Companies post projects and data is stored in Project Table
      Students use site to post preferences, which are stored in Preferences Table
      Site uses algorithm to form groups, which are stored in Group Table

    TODO:
        EVCAPPROACH.com
        Make pretty
        !ALL: Error Handling and Input Cleansing!

        encrypt password
          firebase
        UI - using templates from online
        present on tuesday

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
        <a href="admin_signup.php"><strong>Client Signup</strong></a>
      </li>
      <br>
      <li>
        <a href="student_login.php"><strong>Student Login</strong></a>
      </li>
      <li>
        <a href="admin_login.php"><strong>Client Login</strong></a>
      </li>
      <br><br><br>
      <li>
        <a href="test.php"><strong>Add Test Values to Database</strong></a>
      </li>
    </ul>

  </body>
</html>