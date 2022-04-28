<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Studenti a Tridy</h1>
    <form method="post">
        <input type="text" name="studenti">
        <select name="tridy">
          <option value="">--- tridy ---</option>
          <option value="1">1.A</option>
          <option value="2">2.A</option>
          <option value="3">3.A</option>
        </select>
        <input type="button" name="Submit" value="Submit">
    </form>
  </body>
</html>

<?php
$student = $_POST["studenti"];
$trida = $_POST["tridy"];

if (isset($_POST["studenti"]) === TRUE || isset($_POST["tridy"]) === TRUE) {
  echo $student;
  echo $trida;
} else {
    echo "Vyplň všechna pole!";
}

$servername = "localhost";
$username = "root";
$password = "password";
$database = "skola";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  die("Error");
} else {
  echo "Connected successfully!";
}

$rozdeleni = explode(" ", $student);

$sql = "insert into studenti (Jmeno, Prijmeni) values ('".$rozdeleni[0]."', '".$rozdeleni[1]."')";
 ?>
