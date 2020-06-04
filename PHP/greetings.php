<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $username = $_POST['username'];
    $password = $_POST ['password'];
    if ($password == "iraq29" and $username == "Ryan Lee") {
      echo "Welcomeback Ryan";
    } else {
      echo "Invalid credentials, try again";
    }
    ?>

  </body>
</html>
