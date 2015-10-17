<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>W3Schools - PHP Switch</title>
  </head>
  <body>
    <h1>PHP Switch Statement</h1>
    <!--
      Switch Statements (in PHP)
      Syntax:

      switch (n) {
        case label1:
          code to be executed if n=label1;
          break;
        case label2:
          code to be executed if n=label2;
          break;
        case label3:
          code to be executed if n=label3;
          break;
        ...
        default:
          code to be executed if n is different from all labels;
      }
    -->
    <p style="font-weight: bolder;">
      <?php // Try out this code at different times of the day
      $t = date("H"); // Hour of day
      switch ($t) {
        case "00":
        case "01":
        case "02":
        case "03":
        case "04":
        case "05":
          echo "It is now midnight.  You should be asleep.";
          break;
        case "06":
        case "07":
        case "08":
          echo "It is now very early in the morning.  Have a breakfast.";
          break;
        case "09":
        case "10":
        case "11":
          echo "It is <i>almost</i> midday.  Grab a breakfast if you do not have one already.";
          break;
        case "12":
        case "13":
          echo "It is midday.  Enjoy your lunch.";
          break;
        case "14":
        case "15":
          echo "It is the afternoon.  Enjoy your tea.";
          break;
        case "16":
        case "17":
          echo "It is already very late in the afternoon.";
          break;
        case "18":
          echo "It is the evening.  You can have your dinner now.";
          break;
        case "19":
        case "20":
          echo "It is already nighttime.  Enjoy your dinner.";
          break;
        default:
          echo "It is bedtime.  Goodnight.";
      } ?>
    </p>
  </body>
</html>
