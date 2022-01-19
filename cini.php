<?php
$user="root";
$password="";
$dbname="mydatabase";
$host='localhost:3306';
$dsn="mysql:host={$host};dbname={$dbname};charset=utf8";
    $pdo=new PDO($dsn, $user, $password);
   $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
   $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   
?>
