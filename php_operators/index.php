<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo "W3Schools - PHP Operators"; ?></title>
  </head>
  <body>
    <?php echo "<h1>PHP Operators</h1>";
    echo "<p>These include:</p><ul><li>Addition: <code>+</code></li><li>Subtraction: <code>-</code></li><li>Multiplication: <code>*</code></li><li>Division: <code>/</code></li><li>Modulus: <code>%</code></li><li>Exponentation: <code>**</code></li></ul>";
    /*
      More notes:

      Assignment:
      (1) x = y
      (2) x += y
      (3) x -= y
      (4) x *= y
      (5) x /= y
      (6) x %= y
      N.B. There is no assignment for exponentation.
    */
    $x = 3;
    $y = 4;
    echo $x <> $y; /* "Not Equal" operator - same as "!=" */
    echo "<br />";
    echo $x != $y;
    echo "<br />";
    echo 1 == true; # 1 has the same value as true so they are equal
    echo "<br />";
    echo var_dump(1 === true); /* 1 is not identical to true since they are of different data types despite having the same value */
    echo "<br />";
    echo $x;
    echo "<br />";
    // Pre-increment
    echo ++$x;
    echo "<br />";
    // Post-increment
    echo $x++;
    echo "<br />";
    echo $x;
    // N.B. There is also pre-decrement and post-decrement
    echo "<h2>Logical Operators</h2>";
    echo "<ol>" . "<li>and</li>" . "<li>or</li>" . "<li>xor (ONLY or)</li>" . "<li>&amp;&amp; (and)</li>" . "<li>|| (or)</li>" . "<li>! (not)</li>" . "</ol>";
    // String Concatenation (.=)
    $string_one = "Hello";
    $string_two = "World";
    $final_string = "";
    $final_string .= $string_one;
    $final_string .= " ";
    $final_string .= $string_two;
    $final_string .= "!";
    echo $final_string;
    // Array Operators
    // (1) Union: "+"
    // (2) Equality: "="
    // (3) Identity: "==="
    // (4) Inequality: "!=" || "<>"
    // (5) Non-identity "!==" ?>
  </body>
</html>
