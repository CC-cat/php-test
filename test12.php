<!DOCTYPE html>
<html lang="zh-CN" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      <?php
      echo "<h2>PHP NULL值</h2><br>";

      echo "
      NULL 值表示变量没有值。NULL 是数据类型为 NULL 的值。<br>
      NULL 值指明一个变量是否为空值。 同样可用于数据空值和NULL值的区别。<br>
      可以通过设置变量值为 NULL 来清空变量数据：<br><br>
      "
      ?>

      <?php
      $x = "hello word!";
      $x = null;
      var_dump($x);
      ?>
   </body>
</html>
