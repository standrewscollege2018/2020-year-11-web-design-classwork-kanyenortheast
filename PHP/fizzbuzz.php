<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      $compare_value = $_POST['number'];
      $compare_value = $compare_value - 1;
      $counter = 0;
      $print_word = $counter;

       do {
        $counter = $counter + 1;
        if ($counter % 5 == 0 and $counter % 3 == 0) {
         $print_word = "BuzzFizz";
        }
        elseif ($counter % 3 == 0) {
          $print_word = "Fizz";
        }
        elseif ($counter % 5 == 0) {
          $print_word = "Buzz";
        }
        else {
          $print_word = $counter;
        }

        echo "<p> $print_word </p>";


      } while ($counter <= $compare_value);
     ?>

  </body>
</html>
