<?php 

if (isset($_GET['id'])&& !empty(trim($_GET['id']))) {
    require_once 'config.php';

//query to read data from table
$query = 'SELECT * FROM customerDetails WHERE id= :id';


    $stmt= $pdo->prepare($query);
    $stmt-> execute;
    $r = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    //fetch data from database
    $result= $stmt ->fetchAll();

    //show data on table
    foreach ($result as $row){
        echo 'First Name:'. $row['fname']. 'Surname:' . $row['surname'].'
        | Date of |Engagement:'. $row['doe']. 'Age:'.$row['age'].'Of Age'. $row['ofAge']. 'Gender'. $row['gender'].'<br>';
    }
}
 
?>