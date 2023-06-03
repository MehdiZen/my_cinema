<!-- PHP -->
<?php
session_start();
$host = 'localhost';
$dbname = 'cinema';
$username = 'mzenati';
$password = 'root';
  
$dsn = "mysql:host=$host;dbname=$dbname"; 

 
try{
 $pdo = new PDO($dsn, $username, $password);
 
}catch (PDOException $e){
  echo $e->getMessage();
}