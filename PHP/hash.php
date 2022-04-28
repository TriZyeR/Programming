<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo "test1234";
      echo "<br>";
      echo password_hash("test1234asdasdasdgre321453:;[[asdf]]", PASSWORD_DEFAULT);
      echo "<br>";
      echo password_hash("test1234", PASSWORD_DEFAULT);

     /*$input = "test1234";
     $hashedpassword = password_hash("test123", PASSWORD_DEFAULT);

     echo password_verify($input, $hashedpassword);
     */
     ?>
  </body>
</html>
