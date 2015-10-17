<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>W3Schools - PHP Constants</title>
  </head>
  <body>
    <h1>PHP Constants</h1>
    <p>
      Constants are like variables, except once defined, their value cannot be altered or undefined.
    </p>
    <?php // Syntax: ```define(name, value, case-insensitive)```
    define("mY_cOnStAnT", "This is a string constant.  It is case sensitive.  All constants are defined by the <code>define()</code> function which takes 2 parameters for case sensitive constants and 3 parameters for case insensitive constants."); // Case sensitive constant
    echo "<p>" . mY_cOnStAnT . "</p>";
    define("my_case_insensitive_constant", "This is another string constant.  The constant is case-insensitive.", true);
    echo "<p>" . MY_CASE_INSENSITIVE_CONSTANT . "</p>"; ?>
    <p>Constants also have GLOBAL scope to the point where they can be called INSIDE a function as well as outside a function.</p>
    <?php define("global_const", "This is a constant.  It has global scope and can be called inside or outside any function.");
    echo "<p>" . global_const . "</p>";
    function my_test() {
      echo "<p><i>" . global_const . "</i></p>";
    }
    my_test(); ?>
  </body>
</html>
