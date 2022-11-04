<?php
// Include config file
require_once "config.php";
 

$fname = $surname = $doe = $age= $ofAge= $gender="";
$fname_err = $surname_err = $doe_err = $age_err= $ofAge_error= $gender_error= "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    
    } else{
        $name = $input_name;
    }
    
    // Validate surname
    $input_surname= trim($_POST["surname"]);
    if(empty($input_surname)){
        $surname_err = "Please enter an surname.";     
    } else{
        $surname= $input_surname;
    }
    
    // Validate date of engagement
    $input_doe = trim($_POST["doe"]);
    if(empty($input_doe)){
        $doe_err = "Please enter the date of engagement.";     
    }else{
        $doe = $input_doe;
    }
    // Validate ofAge
    $input_ofAge = trim($_POST["ofAge"]);
    if(empty($input_doe)){
        $ofAge_err = "Please enter of age.";     
    }else{
        $ofAge = $input_ofAge;
    }
    // Validate age
    $input_age = trim($_POST["age"]);
    if(empty($input_doe)){
        $age_err = "Please enter age.";     
    }else{
        $age = $input_age;
    }
    // Validate gender
    $input_gender = trim($_POST["gender"]);
    if(empty($input_doe)){
        $gender_err = "Please enter gender";     
    }else{
        $gender= $input_gender;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($surname_err) && empty($doe_err) && empty($age_err)&& empty($ofAge_err)&& empty($gender_err)){
        // Prepare an update statement
        $sql = "UPDATE customerDetails SET fname=:fname, surname=:surname, doe=:doe, age=:age, ofAge=:ofAge, gender=:gender WHERE id=:id";
 
        if($stmt = $pdo->prepare($sql)){
           
            // Set parameters
            $param_fname = $fname;
            $param_surname= $surname;
            $param_doe = $doe;
            $param_age = $age;
            $param_ofAge = $ofAge;
            $param_gender = $gender;
            $param_id = $id;
            
            // execute the prepared statement
            if($stmt->execute()){
                // Records updated successfully
                echo 'updated successfully';
                header("location: formdata.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
} 
?>
 
<!DOCTYPE html>
<head>
    <title>Update Record</title>
    <link rel="stylesheet" href="formstyle.css">

    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div>
                <div>
                    <h2>Update Record</h2>
                    <p>Please edit the input values and submit to update the employee record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div >
                            <label>First Name</label>
                            <input type="text" name="name"  <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>value="<?php echo $name; ?>">
                            <span ><?php echo $name_err;?></span>
                        </div>
                        <div >
                            <label>Surname</label>
                            <textarea name="surname"  <?php echo (!empty($surname_err)) ? 'is-invalid' : ''; ?>><?php echo $surname; ?></textarea>
                            <span ><?php echo $surname_err;?></span>
                        </div>
                        <div >
                            <label>Date of Engagement</label>
                            <input type="text" name="doe"  <?php echo (!empty($doe_err)) ? 'is-invalid' : ''; ?> value="<?php echo $doe; ?>">
                            <span ><?php echo $doe_err;?></span>
                        </div>
                        <div >
                            <label>Of Age</label>
                            <input type="text" name="ofAge"  <?php echo (!empty($ofAge_err)) ? 'is-invalid' : ''; ?> value="<?php echo $ofAge; ?>">
                            <span ><?php echo $ofAge_err;?></span>
                        </div>
                        <div >
                            <label>Age</label>
                            <input type="text" name="age"  <?php echo (!empty($ofAge_err)) ? 'is-invalid' : ''; ?> value="<?php echo $age; ?>">
                            <span ><?php echo $age_err;?></span>
                        </div>
                        <div >
                            <label>Gender</label>
                            <input type="text" name="gender"  <?php echo (!empty($ofAge_err)) ? 'is-invalid' : ''; ?> value="<?php echo $gender; ?>">
                            <span ><?php echo $gender_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" value="Submit">
                        <a href="formdata.php" >Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
