<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      $name = $_POST['name'];

      // connect to the database
      $db_conect = mysqli_connect("localhost", "root", "", "students-stac");
      // create our query
      $student_sql = "SELECT * FROM `kid` WHERE first_name = '$name'";
      // run Query
      $student_qry = mysqli_query($db_conect, $student_sql);
      // store result in array
      $student_aa = mysqli_fetch_assoc($student_qry);
      // display single result
      echo $student_aa['student_id'];
      echo " ";
      echo $student_aa['first_name'];
      echo " ";
      echo $student_aa['last_name'];

    ?>
  </body>
</html>
