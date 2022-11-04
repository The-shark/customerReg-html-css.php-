<?php 

$dbName = 'mysql:dbname= customerDetails; host=localhost';
$dbUser = 'phpmyadmin';
$dbPassword = '';


 try {
    $connection = new PDO($dbName, $dbUser, $dbPassword);
    echo 'successfully created';


 } catch (PDOException $exception) {

    die('Connection failed:'. $exception->getMessage());
 }
?>