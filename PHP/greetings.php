<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="styles.css">
    <title></title>
  </head>
  <body>

    <?php
    $username = $_POST['username'];
    $password = $_POST ['password'];
    if ($password == "iraq29" and $username == "Ryan Lee" or $password == "cha3456" and $username == "cke0921") {
      echo "Welcome back $username";
    } else {
      echo "Invalid credentials, try again";
    }
    ?>
    <p> </p>
    <p> </p>
    <div class="return_link">
      <a href="post.php">Return</a>
    </div>


  </body>
</html>
