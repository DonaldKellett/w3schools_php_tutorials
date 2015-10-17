<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>W3Schools - PHP Variables - Example 4</title>
  </head>
  <body>
    <h1>Variables in Functions</h1>
    <p>
      Variables declared inside a function has LOCAL scope and therefore can only be accessed inside a function.
    </p>
    <?php
      function my_test() {
        $x = 3.1415926535;
        echo "<p>Variable x inside <code>my_test()</code> function is: $x</p>";
      }
      my_test();

      // Variable x with GLOBAL scope
      $x = 2.718281828459045;
      echo "<p>Variable x outisde function is: $x</p>";
    ?>
  </body>
</html>
