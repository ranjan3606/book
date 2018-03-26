<?php
$conn = new mysqli("localhost", "root", "navgurukul", "user");
$query="select * from raj";

$database = 'user';
   $host = 'localhost';
   $admin = 'root';
   $password = 'navgurukul';

   // try to conncet to database
   $db = new PDO("mysql:dbname={$database};host={$host};port={3306}", $admin, $password);

   if(!$db){

      echo "unable to connect to database";
   }

?>

