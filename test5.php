<!DOCTYPE html>
<html lang="zh-CN" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      <?php
      echo "<h2>PHP echo 和 print 语句</h2>";

      echo "
      echo 和 print 区别:<br>
      echo - 可以输出一个或多个字符串<br>
      print - 只允许输出一个字符串，返回值总为 1<br>
      提示：echo 输出的速度比 print 快， echo 没有返回值，print有返回值1。<br>
      ";
      ?>

      <?php


      ?>

      <?php
      $txt1 = "学习 PHP";
      $txt2 = "RUNOOB.COM";
      $cars = array("Volvo", "BMW", "Toyota");

      echo "<br>echo : <br>";
      echo $txt1;
      echo "<br>";
      echo "在 $txt2 $txt1 ";
      echo "<br>";
      echo "我车的品牌是 {$cars[0]}<br>";
      echo "这是一个", "字符串", "使用了", "多个", "参数。<br><br><br>";
      ?>

      <?php
      print "print : <br>";

      $txt1="学习 PHP";
      $txt2="RUNOOB.COM";
      $cars=array("Volvo","BMW","Toyota");

      print $txt1;
      print "<br>";
      print "在 $txt2 学习 PHP ";
      print "<br>";
      print "我车的品牌是 {$cars[0]}";
      ?>
   </body>
</html>
