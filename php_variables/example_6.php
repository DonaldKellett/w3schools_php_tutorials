<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>W3Schools - PHP Variables - Example 6</title>
  </head>
  <body>
    <h1>Using the <code>static</code> keyword</h1>
    <p>
      An excerpt from <a href="http://w3schools.com" target="_blank">W3Schools</a>:
    </p>
    <blockquote cite="http://w3schools.com">
      <p>Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.</p>
      <p>
        To do this, use the <code>static</code> keyword when you first declare the variable.
      </p>
    </blockquote>
    <?php
      function my_test() {
        /*
          Using the 'static' keyword to define a variable that will not be destroyed after the function is called.  The static variable is STILL LOCAL to that function.
        */
        static $x = 0;
        echo $x . "<br />";
        $x ++;
      }
      my_test();
      my_test();
      my_test();
      my_test();
      my_test();
    ?>
  </body>
</html>
