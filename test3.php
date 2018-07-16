<!DOCTYPE html>
<html lang="zh-CN" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      <?php
         echo "<h2>PHP global 关键字</h2>";
      ?>

      <?php
      $x = 5;
      $y = 10;

      function myTest()
      {
         global $x, $y;
         $y = $x + $y;
      }

      myTest();
      echo $y; // 输出15
      echo "<br>";
      ?>

      <?php
      $j = 5;
      $k = 10;

      function myTest2()
      {
         $GLOBALS['k'] = $GLOBALS['j'] + $GLOBALS['k'];
      }

      myTest2();
      echo $k;  // 输出15
      ?>
   </body>
</html>
