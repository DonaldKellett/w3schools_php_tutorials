<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>W3Schools - PHP Arrays</title>
  </head>
  <body>
    <h1>PHP Arrays</h1>
    <p>
      <?php $my_array = array();
      $my_array[0] = 314;
      $my_array[1] = "Hello World";
      $my_array[2] = true;
      echo "This is an example of an indexed array: ";
      var_dump($my_array); ?>
    </p>
    <p>
      <?php echo "The length of my array is: " . count($my_array); ?>
    </p>
    <p>
      <?php for ($i = 0; $i < count($my_array); $i++) {
        echo $my_array[$i] . "<br />";
      }
      echo "<br />";
      foreach ($my_array as $array_item) {
        echo $array_item . "<br />";
      } ?>
    </p>
    <p>
      <?php // Associative Arrays
      $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
      echo var_dump($age);
      echo "<br />";
      foreach ($age as $key => $value) {
        echo $key . ": " . $value . "<br />";
      } ?>
    </p>
  </body>
</html>
