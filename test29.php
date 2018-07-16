<!DOCTYPE html>
<html lang="zh-CN" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      <?php
      echo "<h2>PHP 继承</h2><br>";

      echo "
      PHP 使用关键字 extends 来继承一个类，PHP 不支持多继承，格式如下：

      <pre>
      class Child extends Parent {
         // 代码部分
      }
      </pre>

      实例中 Child_Site 类继承了 Site 类，并扩展了功能：<br><br>
      "
      ?>

      <?php
      // 子类扩展站点类别
      class Child_Site extends Site {
         var $category;

          function setCate($par){
              $this->category = $par;
          }

          function getCate(){
              echo $this->category . PHP_EOL;
          }

      }

      ?>
   </body>
</html>
