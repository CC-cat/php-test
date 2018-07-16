<!DOCTYPE html>
<html lang="zh-ZN" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      <?php
      echo "<h2>PHP 浮点型</h2><br>";

      echo "
      浮点数是带小数部分的数字，或是指数形式。<br>
      在以下实例中我们将测试不同的数字。 <br>
      PHP var_dump() 函数返回变量的数据类型和值：<br><br>";
      ?>

      <?php
      $x = 10.365;
      var_dump($x);

      echo "<br>";

      $x = 2.4e3;
      var_dump($x);


      echo "<br>";

      $x = 8E-5;
      var_dump($x);

      ?>
   </body>
</html>
