<?php 

require_once 'config.php';

$data = $_POST;

$firstname = $_POST['fname'];
$surname = $_POST['surname'];
$doe = $_POST['doe'];
$age = $_POST['age'];
$ofAge = $_POST['ofAge'];
$gender = $_POST['gender'];

$trim = str_replace('', ' ',$data);



?>