<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo "test123";
      echo "<br>";
      echo password_hash("test123asdasdasdgre321453:;[[asdf]]", PASSWORD_DEFAULT);
      echo "<br>";
      echo password_hash("test123", PASSWORD_DEFAULT);

     /*$input = "test123";
     $hashedpassword = password_hash("test123", PASSWORD_DEFAULT);

     echo password_verify($input, $hashedpassword);
     */
     ?>
  </body>
</html>
