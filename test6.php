<!DOCTYPE html>
<html lang="zh-CN" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      <?php
      echo "<h2>PHP EOF(heredoc) 使用说明</h2><br>";
      echo "PHP EOF(heredoc)是一种在命令行shell（如sh、csh、ksh、bash、PowerShell和zsh）和程序语言（像Perl、PHP、Python和Ruby）里定义一个字串的方法。<br><br>";
      ?>

      <?php
      $name = "runoob";
      $a= <<<EOF
      "abc"$name
      "123"
EOF;
// 结束需要独立一行且前后不能空格

      echo $a;
      ?>
   </body>
</html>
