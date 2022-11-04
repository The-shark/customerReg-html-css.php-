<!DOCTYPE html>
<html>
    <head>
   <style>
#customers{
    font-family: Helvetica;
    border-collapse: collapse;
    width: 90%;
    margin:90px;
}

#customers td, #customers th{
    border: 1px solid #f2f2f2 ;
    padding: 8px;
}
#customers tr:nth-child(even){
    background-color:#f2f2f2;
}
#customers tr:hover{
    background-color:#ddd;
}
#customers th{
    padding-top:12px;
    padding-bottom:12px;
    text-align:left;
    background-color:orange;
    color:white;
}
   </style>
    </head>
    <body>
        <h2>Customer Details</h2>
        <?php 
        require_once 'config.php';

        $sql = 'SELECT *FROM customerDetails';
        if ($result=$pdo->query(sql)) {
           if ($result->rowCount()>0) {
           echo '<table id="customers">';
           echo '<thead>';
           echo '<tr>';
          echo '<th>First Name</th>';
          echo '<th>Surname</th>';
          echo' <th>Date of Engagement</th>';
          echo '<th>Age</th>';
           echo '<th>Of Age</th>';
          echo '<th>Gender</th>';
          echo '</thead>';

          echo "<tbody>";
                                while($row = $result->fetch()){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['fname'] . "</td>";
                                        echo "<td>" . $row['surname'] . "</td>";
                                        echo "<td>" . $row['doe'] . "</td>";
                                        echo "<td>" . $row['age'] . "</td>";
                                        echo "<td>" . $row['gender'] . "</td>";

                                        echo "<td>";
                                            echo '<a href="readtable.php?id='. $row['id'] .'View Record';
                                            echo '<a href="update.php?id='. $row['id'] .'Update';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                           
                        } else{
                            echo '<div><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                    
                    ?>
           }
        }

        ?>
    </body>
  
</html>