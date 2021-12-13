<?php
// (A) INIT + PERMISSION CHECK MECHANISM
require "database.php";
function cando ($pid) {
  return in_array($pid, $_SESSION["User"]["Permission"]);
}

// (B) ADD USER
// (B1) DUMMY USER
//$_POST = [
 // "email" => "jack@doe.com",
//  "password" => "123456",
//  "role" => 2
//];

// (B2) PERMISSION CHECK
//if (!cando(2)) { exit("No permission to add user"); }

// (B3) SQL INSERT
//echo $DB->exec(
//  "INSERT INTO `users` (`user_email`, `user_password`, `role_id`) VALUES (?,?,?)",
//  [$_POST["email"], $_POST["password"], $_POST["role"]]
//) ? "OK" : $DB->error ;