<!DOCTYPE html>
<html>

<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/signUp_css.css">
    <link rel="shortcut icon" type="image/png" href="image/paw_logo.png">
</head>

<body>

    <?php
        // put your code here
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $dob = $_POST['dob'];
            $phno = $_POST['phno'];

            $con = mysqli_connect("localhost", "root", "", "ipet");
            $query = "INSERT INTO users(email, password, cpassword, fname, lname, dob, phno) VALUES('$email','$password','$cpassword','$fname', '$lname', '$dob', '$phno')";
            $result = mysqli_query($con, $query);
            if ($result) {
                echo("Registeration Successfull");
                header("location:login.php");
            } else {
                echo ("Registeration Failed");
            }
        }
        ?>
    <form action = "" method="POST">
        <h1>Hey User! Sign Up</h1>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="passwordConfirmation">Confirm Password:</label>
        <input type="password" id="cpassword" name="cpassword" required>
        <br>
        <label for="firstName">First Name:</label>
        <input type="text" id="fname" name="fname" required>
        <br>
        <label for="lastName">Last Name:</label>
        <input type="text" id="lname" name="lname" required>
        <br>
        <label for="birthdate">Birthdate:</label>
        <input type="date" id="dob" name="dob" required>
        <br>
        <label for="phoneNumber">Phone Number:</label>
        <input type="tel" id="phno" name="phno" required>
        <br>
        <button type="submit">Sign Up</button>
        <button type="back" onclick="back()">Back</button>
    </form>
</body>
<script>
    function back() {
        window.location.href = "run.php";
    }
  </script>
</html>