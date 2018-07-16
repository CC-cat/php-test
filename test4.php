<!DOCTYPE html>
<html lang="zh-CN" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      <?php
      echo "<h2>Static 作用域</h2>";

      echo "
      当一个函数完成时，它的所有变量通常都会被删除。<br>
      然而，有时候您希望某个局部变量不要被删除。<br>
      要做到这一点，请在您第一次声明变量时使用 static 关键字：<br>
      ";
      ?>

      <?php
         function myTest()
         {
            static $x = 0;
            echo $x;
            $x++;
         }

         myTest();
         echo "<br>";

         myTest();
         echo "<br>";

         myTest();
         echo "<br>";

         echo "然后，每次调用该函数时，该变量将会保留着函数前一次被调用时的值。<br>";
         echo "注释：该变量仍然是函数的局部变量。";
      ?>
   </body>
</html>
