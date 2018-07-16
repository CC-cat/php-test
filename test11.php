<!DOCTYPE html>
<html lang="zh-CN" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      <?php
      echo "<h2>PHP 对象</h2><br>";

      echo "
      对象数据类型也可以用于存储数据。<br>
      在 PHP 中，对象必须声明。<br>
      首先，你必须使用class关键字声明类对象。类是可以包含属性和方法的结构。<br>
      然后我们在类中定义数据类型，然后在实例化的类中使用数据类型：<br><br>
      ";
      ?>

      <?php
      class Car
      {
          var $color;
          function __construct($color="green") {
            $this->color = $color;
          }
          function what_color() {
            return $this->color;
          }
      }

      function print_vars($obj) {
         foreach (get_object_vars($obj) as $prop => $val) {
           echo "\t$prop = $val\n";
         }
      }

      // 实例一个对象
      $herbie = new Car("white");

      // 显示 herbie 属性
      echo "\therbie: Properties\n";
      print_vars($herbie);
      ?>

   </body>
</html>
