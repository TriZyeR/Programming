<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br>
    <div class="account">
      <form method="post">
        <input type="text" name="username_register" placeholder="username">
        <input type="password" name="password_register" placeholder="password">
        <input type="Submit" name="submit_register" value="Register">
        <br> <br>
        <input type="text" name="username_login" placeholder="username">
        <input type="password" name="password_login" placeholder="password">
        <input type="Submit" name="submit_login" value="Login">
      </form>
    </div>
  </body>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "password";
$database = "E_shop";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

// Register
if (isset($_POST["submit_register"])) {
  if ($_POST["username_register"] == "" || $_POST["password_register"] == "") {
    echo ("Name or password is missing!");
  } else {
    $hashedPwdInDb = password_hash($_POST["password_register"], PASSWORD_DEFAULT);
    $sql = "INSERT INTO User (username, password) VALUES ('".$_POST["username_register"]."', '".$hashedPwdInDb."')";
  }
  $result = mysqli_query($conn, $sql);
}

// Login

if (isset($_POST["submit_login"])) {
  if ($_POST["username_login"] == "" || $_POST["password_login"] == "") {
    echo ("Name or password is missing!");
  } else {
    $sql = "SELECT username, password FROM User WHERE username = '".$_POST["username_login"]."'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($_POST["username_login"] == $row["username"] && $_POST["password_login"] == $row["password"]) {
      echo "Login successfully!";
    } else {
      echo "Login failed!";
    }
  }
}

?>
