<?php
require "config.php";
require "common.php";

// (A) DATABASE CLASS
class DB {
  // (A1) CONSTRUCTOR - CONNECT TO THE DATABASE
  private $pdo = null;
  private $stmt = null;
  public $error;
  function __construct () {
    try {
      $host       = "localhost";
$username   = "root";
$password   = "";
$dbname     = "Project_Portal";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
      $this->pdo = new PDO($dsn, $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (Exception $ex) { exit($ex->getMessage()); }
  }
 
  // (A2) DESTRUCTOR - CLOSE DATABSE CONNECTION
  function __destruct () {
    if ($this->stmt !== null) { $this->stmt = null; }
    if ($this->pdo !== null) { $this->pdo = null; }
  }
 
  // (A3) EXECUTE SQL QUERY
  function exec ($sql, $data=null) {
    try {
      $this->stmt = $this->pdo->prepare($sql);
      $this->stmt->execute($data);
      return true;
    } catch (Exception $ex) {
      $this->error = $ex->getMessage();
      return false;
    }
  }
 
  // (A4) FETCH (SINGLE ROW)
  function fetch ($sql, $data=null) {
    if ($this->exec($sql, $data) === false) { return false; }
    return $this->stmt->fetch();
  }
 
  // (A5) FETCH ALL (MULTIPLE ROWS)
  function fetchAll ($sql, $data=null) {
    if ($this->exec($sql, $data) === false) { return false; }
    return $this->stmt->fetchAll();
  }
}

define("host", "localhost");
define("username", "root");
define("password", "");
define("dbname", "Project_Portal");
define("dsn", "mysql:host=$host;dbname=$dbname");
define("DB_CHARSET", "utf8");
 
// (C) START!
$DB = new DB();
session_start();