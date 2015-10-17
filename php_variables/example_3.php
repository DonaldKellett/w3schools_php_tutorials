<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>W3Schools - PHP Variables - Example 3</title>
  </head>
  <body>
    <h1>Variable Scope</h1>
    <p>
      The variable I am going to declare has global scope, meaning that it CANNOT be called inside a PHP function.
    </p>
    <?php
      # Variable with Global Scope - Cannot be called inside a function
      $x = 5;
      // Calling $x inside a function should generate an error
      function my_test() {
        // using $x inside this function should generate an error
        echo "<p>Variable <i>x</i> inside function <code>my_test()</code> is: $x</p>";
      }
      my_test();

      echo "<p>Variable <em>x</em> <strong>outside</strong> function is: $x</p>";
    ?>
  </body>
</html>
