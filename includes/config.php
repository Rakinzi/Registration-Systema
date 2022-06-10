<?php
require 'validate.php';
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "school_reg";

session_start();

try{
  $conn = new mysqli($host, $user, $pass, $dbname);
}catch(Exception $e){
  $e->getMessage();
  $e->getFile();
  $e->getLine();
}
$finder = new Validate($conn);
?>