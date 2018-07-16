<!DOCTYPE html>
<html lang="zh-CN" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      <?php
      echo "<h2>PHP 字符串变量</h2><br>";

      $txt="Hello world!";
      echo $txt;
      echo "<br><br>";

      ?>

      <?php
      echo "<h2>PHP 并置运算符</h2><br>";

      echo "
      在 PHP 中，只有一个字符串运算符。<br>
      并置运算符 (.) 用于把两个字符串值连接起来。<br>
      下面的实例演示了如何将两个字符串变量连接在一起：<br><br>
      ";

      $txt1="Hello world!";
      $txt2="What a nice day!";

      echo $txt1. " " .$txt2;
      echo "<br><br>";

      ?>

      <?php
      echo "<h2>PHP strlen() 函数</h2><br>";

      echo "strlen() 函数返回字符串的长度（字符数）。<br><br>";

      echo strlen("Hello world!");
      echo "<br><br>";

      echo "
      提示：strlen() 常常用在循环和其他函数中，因为那时确定字符串何时结束是很重要的。<br>
      （例如，在循环中，我们需要在字符串中的最后一个字符之后结束循环。）<br><br>
      ";
      ?>

      <?php
      echo "<h2>PHP strpos() 函数</h2><br>";

      echo 'strpos() 函数用于在字符串内查找一个字符或一段指定的文本。<br>
      如果在字符串中找到匹配，该函数会返回第一个匹配的字符位置。如果未找到匹配，则返回 FALSE。<br>
      下面的实例在字符串 "Hello world!" 中查找文本 "world"：<br><br>
      ';

      echo strpos("Hello world!","world"); // 输出 6

      // 提示：在上面的实例中，字符串 "world" 的位置是 6。之所以是 6 而不是 7 的原因是，字符串中第一个字符的位置是 0，而不是 1。
      ?>
   </body>
</html>
