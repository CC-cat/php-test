<!DOCTYPE html>
<html lang="zh-CN" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      <?php
      echo "<h2>PHP 整型</h2><br>";

      echo "
      整数是一个没有小数的数字。<br><br>

      整数规则:<br>
      整数必须至少有一个数字 (0-9)<br>
      整数不能包含逗号或空格<br>
      整数是没有小数点的<br>
      整数可以是正数或负数<br>
      整型可以用三种格式来指定：十进制， 十六进制（ 以 0x 为前缀）或八进制（前缀为 0）。<br><br>
      ";
      ?>

      <?php
      $x = 5985;
      var_dump($x);

      echo "<br>";

      $x = -345; //负数
      var_dump($x);

      echo "<br>";

      $x = 0x8C; // 十六进制数
      var_dump($x);

      echo "<br>";

      $x = 047; // 八进制数
      var_dump($x);
      ?>
   </body>
</html>
