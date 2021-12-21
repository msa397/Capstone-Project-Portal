<?php
// (A) INIT + PERMISSION CHECK MECHANISM
require "database.php";
function cando ($pid) {
  return in_array($pid, $_SESSION["User"]["Permission"]);
}