<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>W3Schools - PHP Functions</title>
  </head>
  <body>
    <h1>PHP Functions</h1>
    <p>
      <?php echo "The real power of PHP comes from its functions; it has more than 1000 built-in functions."; ?>
    </p>
    <?php function my_function() {
      echo "<p>Besides the built-in PHP functions, we can create our own functions.</p>";
      echo "<p>A function is a block of statements that can be used repeatedly in a program.</p>";
      echo "<p>A function will not execute immediately when a page loads.</p>";
      echo "<p>A function will be executed by a call to the function.</p>";
    }
    my_function(); ?>
    <?php
      /*
        Function Arguments
      */
      function my_function2($argument) {
        echo "<p>The argument passed into <code>my_function2()</code> is $argument.</p>";
      }
      my_function2("Hello");
      my_function2("World");
      my_function2(3);
      my_function2(3.1415);
      my_function2(true);

      /*
        PHP Default Function Arguments
      */

      function my_function3($argument = "World") {
        echo "<p>Hello $argument!</p>";
      }
      my_function3("Donald");
      my_function3("Boss");
      my_function3("Admin");
      my_function3(); // Echoes "Hello World!"

      function my_function4($number = 10) {
        return 3 ** $number; // Return Statement
      }
      echo my_function4(1) . "<br />";
      echo my_function4(2) . "<br />";
      echo my_function4(3) . "<br />";
      echo my_function4(4) . "<br />";
      echo my_function4(5) . "<br />";
      echo my_function4();
     ?>
  </body>
</html>
