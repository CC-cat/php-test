<!DOCTYPE html>
<html lang="zh-CN" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      <?php
      echo "<h2>方法重写</h2><br>";
      echo "
      如果从父类继承的方法不能满足子类的需求，可以对其进行改写，这个过程叫方法的覆盖（override），也称为方法的重写。<br>
      实例中重写了 getUrl 与 getTitle 方法：<br><br>

      <pre>

      function getUrl() {
         echo $this->url . PHP_EOL;
         return $this->url;
      }

      function getTitle(){
         echo $this->title . PHP_EOL;
         return $this->title;
      }
      </pre>
      ";
      ?>
   </body>
</html>
