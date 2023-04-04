<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" href="css/login_css.css">
  <link rel="shortcut icon" type="image/png" href="image/paw_logo.png">
</head>

<body>

  <!-- php -->

  <?php
  // put your code here
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = $_POST['userid'];
    $password = $_POST['password'];

    $con = mysqli_connect("localhost", "root", "", "ipet");
    $stmt = $con->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param('ss', $userid, $password);

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
      echo 'Welcome to iPet-World';
      header("refresh: 1;url=main.php");
      exit();
    } else {
      echo '<p>Invalid Id or Password</p>';
    }

    // Close the connection
    $stmt->close();
    $con->close();
  }
  ?>

  <!-- php -->

  <h1>Login</h1>
  <form action="" method="POST">
    <label for="userid">E-mail ID:</label>
    <input type="text" id="userid" name="userid">

    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <button type="submit">Login</button>
  </form>
</body>
<script src="js/script.js"></script>
</html>