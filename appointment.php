<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="image/paw_logo.png">
    <title>Document</title>
    <link rel="stylesheet" href="css/appt.css">
</head>
<body>
    <!-- php -->

    <?php
    // put your code here
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $oname = $_POST['oName'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $dname = $_POST['dName'];
        $services = $_POST['services'];

        $con = mysqli_connect("localhost", "root", "", "ipet");
        $query = "INSERT INTO appointment(name, email, date, time, petname, service) VALUES('$oname','$email','$date','$time','$dname', '$services')";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo("Appointment Booked Successfull");
            header("refresh:2;url=main.php");
        } else {
            echo ("Registeration Failed");
        }
    }   
    ?>



    <!-- php -->


    
    <h1><br>Book Your Slot Now</h1>


    <form action="" method="post">

        <label for="oName">Your Name:</label>
        <input type="text" id="oName" name="oName" required><br>
      
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
      
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br>
      
        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required><br>
      
        <label for="pName">Pet Name:</label>
        <input type="text" id="dName" name="dName" required><br>

        <label for="plan">Health Plan:</label>
  <select id="plan" name="plan">
    <option value="basic">Basic Plan</option>
    <option value="premium">Premium Plan</option>
    <option value="vip">VIP Plan</option>
  </select>
      
        <label for="services">Services Needed:</label>
        <textarea id="services" name="services" rows="5"></textarea><br>
      
        <input type="submit" value="Submit">
      </form>
      
</body>
</html>