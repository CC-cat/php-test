<!DOCTYPE html>
<html lang="zh-CN" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      <?php
      echo "<h2>PHP 常量</h2><br>";

      echo "
      常量值被定义后，在脚本的其他任何地方都不能被改变。<br>
      常量是一个简单值的标识符。该值在脚本中不能改变。<br>
      一个常量由英文字母、下划线、和数字组成,但数字不能作为首字母出现。 (常量名不需要加 $ 修饰符)。<br>
      注意： 常量在整个脚本中都可以使用。<br><br>
      ";
      ?>

      <?php
      // 区分大小写的常量名
      define("GREETING", "欢迎访问 Runoob.com");
      echo GREETING;    // 输出 "欢迎访问 Runoob.com"
      echo '<br>';
      echo greeting;   // 输出 "greeting"
      echo '<br><br>';
      ?>

      <?php
      // 不区分大小写的常量名
      define("GREETING", "欢迎访问 Runoob.com", true);
      echo greeting;  // 输出 "欢迎访问 Runoob.com"
      echo '<br><br>';
      ?>

      <?php
      echo "<h2>常量是全局的</h2><br>";

      echo "
      常量在定义后，默认是全局变量，可以在整个运行的脚本的任何地方使用。<br>
      以下实例演示了在函数内使用常量，即便常量定义在函数外也可以正常使用常量。<br><br>
      "
      ?>

      <?php
      define("GREETING", "欢迎访问 Runoob.com");

      function myTest()
      {
         echo GREETING;
      }

      myTest();  // 输出 "欢迎访问 Runoob.com"
      ?>
   </body>
</html>
