<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>W3Schools - PHP While Loops</title>
  </head>
  <body>
    <h1>PHP While and Do/While Loops</h1>
    <p>
      <!-- PHP While Loop -->
      <?php $x = 2;
      $y = 1;
      while ($y <= 10) {
        echo "When y = $y, 2<sup>y</sup> = " . $x ** $y . "<br />"; // Exponentation
        $y++;
      } ?>
    </p>
    <p>
      <!-- PHP Do/While Loop -->
      <?php $x = 10;
      do {
        echo $x;
        $x++;
      } while ($x <= 5); ?>
    </p>
  </body>
</html>
