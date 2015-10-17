<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>W3Schools - PHP Echo / Print - Example 1</title>
  </head>
  <body>
    <h1>PHP Echo / Print - Example 1</h1>
    <?php
      /*
        Echo-ing Strings with Multiple Parameters
      */
      echo "<p>", "This ", "string ", "was ", "made ", "with ", "multiple ", "parameters.</p>", "<p>How cool ", "is that?</p>";
      echo "<p>The <code>echo</code> statement can accept multiple parameters; the <code>print</code> statement can accept only 1.</p>";
      print "<p style='font-style: italic;'>This statement is printed using the <code>print</code> statement.  Print statements have a return value of 1 while echo statements have a return value of 0.</p>";
    ?>
  </body>
</html>
