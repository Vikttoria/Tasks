<?php

$servername= "localhost";
$username= "root";
$password= "";
$dbname= "tasks";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAtrrribute(PDO::ATTR_ERMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
 {
  echo "Connection failed: " . $e->getMessage();
 }
?>