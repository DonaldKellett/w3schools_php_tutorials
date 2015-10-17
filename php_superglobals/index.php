<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>W3Schools - PHP Superglobals</title>
  </head>
  <body>
    <h1>PHP Superglobals</h1>
    <p>
      These include:
    </p>
    <ul>
      <?php echo "<li>&#36;GLOBALS</li>" . "<li>&#36;_SERVER</li>" . "<li>&#36;_REQUEST</li>" . "<li>&#36;_POST</li>" . "<li>&#36;_GET</li>" . "<li>&#36;_FILES</li>" . "<li>&#36;_ENV</li>" . "<li>&#36;_COOKIE</li>" . "<li>&#36;_SESSION</li>"; ?>
    </ul>
    <p>
      <?php $x = 3;
      $y = 4;
      function add($num1 = 5, $num2 = 10) {
        $GLOBALS['z'] = $num1 + $num2;
        return $GLOBALS['z'];
      }
      echo $GLOBALS['x'] . " + " . $GLOBALS['y'] . " = " . add($x, $y); ?>
    </p>
    <p>
      <?php
      echo $_SERVER['PHP_SELF'];
      echo "<br>";
      echo $_SERVER['SERVER_NAME'];
      echo "<br>";
      echo $_SERVER['HTTP_HOST'];
      echo "<br>";
      echo $_SERVER['HTTP_REFERER'];
      echo "<br>";
      echo $_SERVER['HTTP_USER_AGENT'];
      echo "<br>";
      echo $_SERVER['SCRIPT_NAME'];
      ?>
    </p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      Name: <input type="text" name="fname">
      <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // collect value of input field
      $name = $_REQUEST['fname'];
      if (empty($name)) {
          echo "Name is empty";
      } else {
        echo $name;
      }
    }
    ?>
    <p>
      <a href="index.php?subject=Maths&web=http://myweb.com">Test $_GET</a>
    </p>
    <p>
      <?php
        echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
      ?>
    </p>
  </body>
</html>
