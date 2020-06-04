<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      }
      $user_number = $_POST ['number'];

      if ($user_number % 3 ){
        echo "Fizz";
      }
      if ($user_number % 3 == 0 and $user_number % 5 == 0) {
        echo "FizzBuzz";
      }
      if ($user_number % 5) {
        echo "Buzz";
      }


     ?>
  </body>
</html>
