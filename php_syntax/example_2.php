<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>W3Schools - PHP Syntax - Example 2</title>
  </head>
  <body>
    <?php
      // This is a comment
      # This is another comment
      /*
        This is a multi-line comment
        This is SO COOL DUDE!!!
      */
      $x = 5 + /*15 +*/ 5;
      $y = 5 + 15 + 5;
      // Testing "echo" statement with mixed cases
      eChO "<h1>Variable Practice</h1>" . "<p>In this example x = $x</p>" . "<p>In this example y = " . $y . "</p>" . "<p><em>In this example x + y = " . $x . " + " . $y . " = " . ($x + $y) . "</em></p>"
    ?>
  </body>
</html>
