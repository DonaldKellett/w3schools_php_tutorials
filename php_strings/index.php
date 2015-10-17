<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>W3Schools - PHP Strings</title>
  </head>
  <body>
    <?php
      // Get the length of a string using ```strlen()```
      echo "<p>The length of &quot;Hello World&quot; is " . strlen("Hello World!") . ".  This task was completed using the <code>strlen()</code> function.</p>";
      # Reverse a string using ```strrev()```
      echo "<p>Reversing &quot;Hello World!&quot; using <code>strrev()</code>: " . strrev("Hello World!") . "</p>";
      /* Using ```strpos()``` to return the location of a substring in a string */
      echo "<p>The position of 'World' in 'Hello World!' is: " . strpos("Hello World!", "World") . "</p>";
      // Using str_replace($original_substring, $replacement_substring, $full_string)
      $original_substring = "World";
      $replacement_substring = "Dolly";
      $full_string = "Hello World!";
      echo "<p>" . str_replace($original_substring, $replacement_substring, $full_string) . "</p>";
    ?>
  </body>
</html>
