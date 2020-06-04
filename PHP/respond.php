<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // make a variable to store data in
      $my_number = $_GET['number'];

      echo "$my_number";
      if ($my_number == "Pizza") {
        echo " no bro";
      }
      if ($my_number == "Tripple Cheeseburger") {
        echo " Good choice";
      }
     ?>
     <a href="choose.php">Return</a>
  </body>
</html>
