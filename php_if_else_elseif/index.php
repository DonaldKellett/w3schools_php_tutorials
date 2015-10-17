<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>W3Schools - PHP if ... else ... elseif</title>
  </head>
  <body>
    <h1>PHP If ... Else ... Elseif Statements</h1>
    <p>
      The statement below will read "Have a good day!" IF and only if the hour of day is less than 20 (i.e. 8 p.m.).  If the condition is not true (i.e. it is already 8 p.m. or later), it will read "Have a good night!" instead.
    </p>
    <p>
      <span style="color: red;"><?php $t = date("H"); // date("H") returns hour of day as a STRING
      if ($t < "20") {
        echo "Have a good day!";
      } else {
        echo "Have a good night!";
      } ?></span>
    </p>
    <h2>If ... <b>Elseif</b> ... Else ... </h2>
    <p>
      The statement below will read "Have a good morning!" IF the time of day is earlier than 10 a.m., ELSE IF the time of day is between 10 a.m. and 8 p.m. it will read "Have a good day!", ELSE it will read "Have a good night!".
    </p>
    <p>
      <span style="font-weight: bolder;"><?php if ($t < "10") {
        echo "Have a good morning!";
      } elseif ($t >= "10" && $t < "20") {
        echo "Have a good day!";
      } else {
        echo "Have a good night!";
      } ?></span>
    </p>
  </body>
</html>
