<?php
// Check existence of id parameter before processing further
if (isset($_GET['id'])&& !empty(trim($_GET['id']))) {
    require_once 'config.php';

//query to read data from table
$query = 'SELECT * FROM customerDetails WHERE id= :id';
   
        if($stmt->execute()){
            if($stmt->rowCount() == 1){
               
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
                // Retrieve individual field value
                $firstname = ['fname'];
                $surname = ['surname'];
                $doe = ['doe'];
                $age = ['age'];
                $ofAge = ['ofAge'];
                $gender = ['gender'];
            } else{
               echo 'error';
            }
            
        } else{
            echo 'Oops! Something went wrong. Please try again later.';
        }   
    
    // Close connection
    unset($pdo);
}
?>

<!DOCTYPE html>
<head>
   
    <title>View Record</title>
    <link rel="stylesheet" href="formstyle.css">
</head>
<body>
    <div class='container'>
        <div>
            <div >
                <div>
                    <h1>View Record</h1>
                    <div >
                        <label>First Name</label>
                        <p><b><?php echo $row['fname']; ?></b></p>
                    </div>
                    <div >
                        <label>Surname</label>
                        <p><b><?php echo $row['surname']; ?></b></p>
                    </div>
                    <div >
                        <label>Date of Engagement</label>
                        <p><b><?php echo $row['doe']; ?></b></p>
                    </div>
                    <div >
                        <label>Age</label>
                        <p><b><?php echo $row['age']; ?></b></p>
                    </div>
                    <div >
                        <label>Of Age</label>
                        <p><b><?php echo $row['ofAge']; ?></b></p>
                    </div>
                    <div >
                        <label>Gender</label>
                        <p><b><?php echo $row['gender']; ?></b></p>
                    </div>
                    <p><a href='formdata.php'>Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
