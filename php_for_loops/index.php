<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>W3Schools - PHP For Loops</title>
  </head>
  <body>
    <h1>PHP For Loops and Foreach Loops</h1>
    <p>
      <?php
        /*
          PHP For Loops
          Syntax:

          for (init counter; test counter; increment counter) {
            code to be executed;
          }
        */
        for ($x = 0; $x < 100; $x++) {
          echo $x;
          if ($x < 99) {
            echo ", ";
          }
        }
      ?>
    </p>
    <h2>Foreach Loop</h2>
    <p>
      <?php
        /*
          PHP Foreach Loops (only works on Arrays)
          Syntax:

          foreach ($array as $value) {
            code to be executed;
          }
        */
        $my_array = array("Hello", "World", 3, 19.4, true);
        foreach ($my_array as $item) {
          echo $item . "<br />";
        }
       ?>
    </p>
  </body>
</html>
