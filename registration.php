<?php 

require_once 'config.php';

$data = $_POST;

//trim any spaces and capitalize the first letter of firstname and surname
$firstname = ucfirst(trim($_POST['fname']));
$surname = ucfirst(trim($_POST['surname']));
$doe = trim($_POST['doe']);
$age = trim($_POST['age']);
$ofAge = trim($_POST['ofAge']);
$gender = trim($_POST['gender']);

$sql = "INSERT INTO users VALUES ('$firstname', '$surname', '$doe', '$age', '$ofAge', '$gender')";

$sql="CREATE TABLE users(
        id INT AUTO_INCREMENT PRIMARY KEY,
        fname VARCHAR(30) NOT NULL,
        surname VARCHAR(20) NOT NULL,
        doe VARCHAR(20) NOT NULL,
        age VARCHAR(10) NOT NULL,
        ofAge VARCHAR(10) NOT NULL,
        gender VARCHAR(10) NOT NULL
    
    )";

?>