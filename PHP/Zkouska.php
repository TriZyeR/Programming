<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="text" placeholder="Zadejte jmeno" name="jmeno">
      <input type="submit" name="submit_form" value="submit">
    </form>
  </body>
</html>

<?php

$server = "localhost";
$user = "root";
$password = "password";
$database = "zkouska";

$conn = mysqli_connect($server, $user, $password, $database);

if (!$conn) {
  die("Connection failed" . mysqli_connect_error());
}

if (isset($_POST["submit_form"])) {
  if (isset($_POST["jmeno"] == "")) {
    echo "Name is missing!";
  } else {
    $sql = "INSERT INTO nic (jmeno) values ('".$_POST["jmeno"]."')";
    $result = mysqli_query($conn, $sql);
  }
}

 ?>
