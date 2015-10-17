<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>W3Schools - PHP Sorting Arrays</title>
  </head>
  <body>
    <h1>PHP Sorting Arrays</h1>
    <p>
      <?php $my_array = array("b","a","e","d","i","f","g","h","c");
      sort($my_array); // Sorts the array items in ascending order
      foreach ($my_array as $item_1) {
        echo $item_1 . "<br />";
      }
      rsort($my_array); // Sorts the array items in descending order
      echo "<br />";
      foreach ($my_array as $item_2) {
        echo $item_2 . "<br />";
      } ?>
    </p>
  </body>
</html>
