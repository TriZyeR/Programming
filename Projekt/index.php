<?php session_start(); error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title></title>
  </head>
  <body>
    <div class="header">
        <div class="inner_header">
            <div class="logo_container">
                <h1><a class="text_decoration" href="index.php">E-<span>SHOP</span></a></h1>
            </div>
        </div>
    </div>
    <div class="menu_item">
      <img class="open-button" onclick="openForm()" id="imgLoginChange" src="Photos/LoggedOutIcon.png">
    </div>
    <div class="outter">
      <div class="inner">
        <nav>
          <a>About</a>
          <a>Contact</a>
        </nav>
      </div>
    </div>

    <form class="logoutForm" method="post">
      <button type="submit" name="submit_logout">Logout</button>
    </form>

    <div class="form-popup" id="myForm">
      <form class="form-container" method="post">
        <h1>Login</h1>

        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username_login" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password_login" required>

        <button type="submit" class="btn" name="submit_login">Login</button>
        <button type="button" class="cancel" onclick="closeForm()">x</button>
      </form>
    </div>
<!--
    <div class="">
      <form class="" method="post">
        <input type="text" name="product" placeholder="Vlož produkt">
        <input type="submit" name="form_submit" value="Submit">
      </form>
    </div>
-->
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

if ($_SESSION['loginIcon'] == 1) {
  echo "<script type='text/javascript'>
        document.getElementById('imgLoginChange').src = 'Photos/LoggedInIcon.png';
        </script>";
} else {
  echo "<script type='text/javascript'>
        document.getElementById('imgLoginChange').src = 'Photos/LoggedOutIcon.png';
        </script>";
}

// Register
if (isset($_POST["submit_register"])) {
  if ($_POST["username_register"] == "" || $_POST["password_register"] == "") {
    echo ("Name or password is missing!");
  } else {
    $sql = "INSERT INTO User (username, password) VALUES ('".$_POST["username_register"]."', '".$_POST["password_register"]."')";
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
    $veryhashedpw = password_verify($_POST["password_login"], $row["password"]);
    if ($_POST["username_login"] == $row["username"] && $veryhashedpw == 1) {
      $_SESSION['loginIcon'] = 1;
      echo "<script type='text/javascript'>
            document.getElementById('imgLoginChange').src = 'Photos/LoggedInIcon.png';
            </script>";
    } else {
        echo "Login failed!";
    }
  }
}

// Logout
if (isset($_POST["submit_logout"])) {
  $_SESSION['loginIcon'] = 0;
  echo "<script type='text/javascript'>
        document.getElementById('imgLoginChange').src = 'Photos/LoggedOutIcon.png';
        </script>";
}

// Edit
if (isset($_GET["edit_id"])) {
  $sql = "SELECT name FROM Products WHERE id =".$_GET["edit_id"];
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $product_edit = $row['name'];
  }
}

// Insert + Update
if (isset($_POST["form_submit"])) {
  if ($_POST['product'] == "") {
    echo ("Product is missing!");
  } else {
    if (isset($_GET["edit_id"])) {
      $sql = "UPDATE Products SET name = '".$_POST["product"]."' WHERE id= '".$_GET["edit_id"]."'";
    } else {
      $sql = "INSERT INTO Products (name) VALUES ('".$_POST["product"]."')";
    }
    $result = mysqli_query($conn, $sql);
  }
}

// Delete
if (isset($_GET["delete_id"])){
  $sql = "DELETE FROM Products WHERE id =".$_GET["delete_id"];
  $result = mysqli_query($conn, $sql);
}

// Select
$sql = "SELECT id, name FROM Products ORDER BY id ASC";
if($result = mysqli_query($conn, $sql)){
	if(mysqli_num_rows($result) > 0) {
		echo"<table border='1'>";
		echo"<tr><th>ID</th><th>PRODUCTS</th><th></th></tr>";
		while($row = mysqli_fetch_assoc($result)) {
			echo"<tr><td>".$row["id"]."</td>
      <td>".$row["name"]."</td>
      <td>  <a href='?edit_id=".$row["id"]."'>Edit</a>
            <a href='?delete_id=".$row["id"]."'>Delete</a>
            </td></tr>";
		}
		echo"</table>";
	}
}

?>

<script type="text/javascript">

  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }

</script>
