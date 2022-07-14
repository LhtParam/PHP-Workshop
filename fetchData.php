<?php
        $server = "localhost";
        $username = "root";
        $password = "";
        $databasename = "workshopphp";
    
          // Create a database connection
          $con = mysqli_connect($server, $username, $password, $databasename);
    
          // Check for connection success
          if(!$con){
              die("connection to this database failed due to" . mysqli_connect_error());
          }
          echo "succesfully Connected <br> ";

          $query = "SELECT * FROM `demo`;";
           // FETCHING DATA FROM DATABASE
            $result = $con->query($query);
            
            if ($result->num_rows > 0) 
            {
                // OUTPUT DATA OF EACH ROW
                // while($row = $result->fetch_assoc())
                // {
                //     echo "Name: " .
                //         $row["name"]. " - Age: " .
                //         $row["age"]. "<br>";
                // }
                
            } 
            else {
                echo "0 results";
            }

            $con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
        td {
            background-color: #78d59d;
            border: 1px solid black;
            
        }
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            border: outset;
        }
        td {
            font-weight: lighter;
        }
    </style>
</head>
<body>
    <section>
        <h1>All Data</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Name</th>
                <th>Age</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($row =$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['age'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
</html>