<!DOCTYPE html>
<html lang="zh-CN" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      <?php
         echo "<h2>局部和全局作用域</h2>";
      ?>

      <?php
      $x = 5; // 全局变量

      function myTest()
      {
         $y = 10;
         echo "<p>测试函数内变量:</p>";
         echo "变量 x 为: $x";
         echo "<br>";
         echo "变量 y 为: $y";
      }

      myTest();

      echo "<p>测试函数外变量:<p>";
      echo "变量 x 为: $x";
      echo "<br>";
      echo "变量 y 为: $y";

      ?>
   </body>
</html>
