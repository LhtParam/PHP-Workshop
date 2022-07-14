<?php
    $insert = false;
    if(isset($_POST['name'])){

    $server = "localhost";
    $username = "root";
    $password = "";

      // Create a database connection
      $con = mysqli_connect($server, $username, $password);

      // Check for connection success
      if(!$con){
          die("connection to this database failed due to" . mysqli_connect_error());
      }
      echo "succesfully Connected <br> ";


    $name = $_POST['name'];
    $age = $_POST['age'];
    $sql = "INSERT INTO `workshopphp`.`demo` (`name`, `age`) VALUES ('$name', '$age');";

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="Img">
    <div class="container">
        <h1>form</h3>
        <p class="para">Enter your details and submit </p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form.</p>";
        }
    ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <button class="btn">Submit</button> 
        </form>
        <br>
        <br>
        <form action="fetchData.php" method="post" enctype="multipart/form-data">
            <p class="para">Press the button to show all data from database. </p>
            <button class="btn">Show Data</button>
        </form>
        <br>
        <br>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <p class="para">Select image to upload: </p>
            <input type="file" name="image">
            <input class="btn" type="submit" name="submit" value="Upload">
        </form>

    </div>
    <script src="index.js"></script>
    
</body>
</html>

