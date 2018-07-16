<!DOCTYPE html>
<html lang="zh-CN" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      <?php
      echo "<h2>PHP 访问控制</h2><br>";

      echo "
      PHP 对属性或方法的访问控制，是通过在前面添加关键字 public（公有），protected（受保护）或 private（私有）来实现的。<br>
      public（公有）：公有的类成员可以在任何地方被访问。<br>
      protected（受保护）：受保护的类成员则可以被其自身以及其子类和父类访问。<br>
      private（私有）：私有的类成员则只能被其定义所在的类访问。<br><br>
      <h4>属性的访问控制</h4><br>
      类属性必须定义为公有，受保护，私有之一。如果用 var 定义，则被视为公有。<br><br>
      ";
      ?>

      <?php
      /**
      * Define MyClass
      */

      class MyClass
      {
         public $public = 'public';
         protected $protected = 'Protected';
         private $private = 'Private';

         function printHello
         {
            echo $this->public;
            echo $this->protected;
            echo $this->private;
         }
      }

      /**
      * Define MyClass2
      */

      class MyClass2 extends MyClass
      {
         // 可以对 public 和 protected 进行重定义，但 private 不能
      }
      ?>
   </body>
</html>
