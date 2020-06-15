<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Query with single result</title>
  </head>
  <body>
    <?php
      // connect to the database
      $db_conect = mysqli_connect("localhost", "root", "", "students-stac");
      // create our query
      $student_sql = "SELECT * FROM `kid` WHERE first_name = 'Albert'";
      // run Query
      $student_qry = mysqli_query($db_conect, $student_sql);
      // store result in array
      $student_aa = mysqli_fetch_assoc($student_qry);
      // display single result
      echo "<p>";
      echo $student_aa['first_name'];
      echo "</p>";
      echo "<p>";
      echo $student_aa['last_name'];
      echo "</p>";
     ?>
  </body>
</html>
