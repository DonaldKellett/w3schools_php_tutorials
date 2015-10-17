<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>W3Schools - PHP Data Types</title>
  </head>
  <body>
    <?php
      echo "<h1>PHP Data Types</h1>";
      print "<p>PHP supports the following data types:</p><ul><li>String</li><li>Integer</li><li>Float</li><li>Boolean</li><li>Array</li><li>Object</li><li>NULL</li><li>Resource</li></ul>";
      echo "<p>PHP integers can only take values from -2147483648 and 2147483647.</p>";
      echo "<p>The PHP <code>var_dump()</code> function returns the data type and value of a variable.</p>";
      $x = 5.3;
      echo var_dump($x) . "<br />";
      $y = 10;
      var_dump($y);
      print "<br />";
      $z = "string";
      print var_dump($z);
      echo "<h2>PHP Arrays</h2>";
      $my_array = array("cars", 3, 19.345, true);
      var_dump($my_array);
      print "<h2>PHP Objects</h2>";
      class Example {
        function Example() {
          $this->datatype = "PHP Object";
        }
      }

      $my_example = new Example();
      echo $my_example->datatype;
      print "<h2>PHP NULL</h2>";
      $null_value = null; # Remember it is lowercase for 'null'
      var_dump($null_value);
    ?>
  </body>
</html>
