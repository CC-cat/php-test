<!DOCTYPE html>
<html lang="zh-CN" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      <?php
       echo "<h2>PHP 析构函数</h2><br>";

       echo "
       析构函数(destructor) 与构造函数相反，当对象结束其生命周期时（例如对象所在的函数已调用完毕），系统自动执行析构函数。<br>
      PHP 5 引入了析构函数的概念，这类似于其它面向对象的语言，其语法格式如下：<br><br>

      void __destruct ( void )

      <br><br>
       ";

      ?>

      <?php
      class MyDestructableClass {
         function __construct() {
             print "构造函数\n";
             echo "<br>";
             $this->name = "MyDestructableClass";
         }

         function __destruct() {
             print "销毁 " . $this->name . "\n";
         }
      }

      $obj = new MyDestructableClass();
      ?>
   </body>
</html>
