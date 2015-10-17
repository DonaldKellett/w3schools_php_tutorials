<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>W3Schools - PHP Variables - Example 5</title>
  </head>
  <body>
    <h1>Accessing Global Variables from a Function</h1>
    <?php
      $x = 5;
      $y = 10;
      function my_test() {
        # Accessing Global Variables x and y by the "global" keyword
        global $x, $y;
        $y = $x + $y; # $y is now 15
      }
      my_test();
      echo "<p>The sum of x and y is: $y</p>"; # Should return '15'

      # NOTE: Now x = 5 and y = 15 so their sum will now be 20
      // Trying this another way
      function my_test2() {
        // Accessing Global Variables x and y by the built-in $GLOBALS array
        $GLOBALS['x'] = $GLOBALS['x'] + $GLOBALS['y'];
      }
      my_test2();
      echo "<p>The sum of x and y after the <b>second</b> addition is: $x</p>"; // Should return '20'
    ?>
  </body>
</html>
