<!DOCTYPE html>
<html lang="zh-CN" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      <?php
      echo "<h2>PHP 算术运算符</h2><br>";

      echo "
      在 PHP 中，赋值运算符 = 用于给变量赋值。<br>
      在 PHP 中，算术运算符 + 用于把值加在一起。<br><br>
      ";
      ?>

      <?php
      $x=10;
      $y=6;
      echo ($x + $y); // 输出16
      echo '<br>';  // 换行

      echo ($x - $y); // 输出4
      echo '<br>';  // 换行

      echo ($x * $y); // 输出60
      echo '<br>';  // 换行

      echo ($x / $y); // 输出1.6666666666667
      echo '<br>';  // 换行

      echo ($x % $y); // 输出4
      echo '<br>';  // 换行

      echo -$x;

      echo '<br><br>';
      ?>

      <?php
      echo "PHP7+ 版本新增整除运算符 intdiv(),使用实例：<br>";
      var_dump(intdiv(10, 3));

      echo '<br><br>';
      ?>

      <?php
      echo "<h2>PHP 赋值运算符</h2><br>";

      echo '
      在 PHP 中，基本的赋值运算符是 "="。<br>
      它意味着左操作数被设置为右侧表达式的值。也就是说，"$x = 5" 的值是 5<br><br>
      ';

      ?>

      <?php
      $x=10;
      echo $x; // 输出10
      echo '<br>';

      $y=20;
      $y += 100;
      echo $y; // 输出120
      echo '<br>';

      $z=50;
      $z -= 25;
      echo $z; // 输出25
      echo '<br>';

      $i=5;
      $i *= 6;
      echo $i; // 输出30
      echo '<br>';

      $j=10;
      $j /= 5;
      echo $j; // 输出2
      echo '<br>';

      $k=15;
      $k %= 4;
      echo $k; // 输出3
      echo '<br>';

      ?>

      <?php
      $a = "Hello";
      $b = $a . " world!";
      echo $b; // 输出 Hello world!

      echo "<br>";

      $x="Hello";
      $x .= " world!";
      echo $x; // 输出 Hello world!
      ?>

      <?php
      echo "<h2>PHP 递增/递减运算符</h2><br>";


      /*

      运算符	名称	    描述
      ++ x	  预递增  	x 加 1，然后返回 x
      x ++	  后递增  	返回 x，然后 x 加 1
      -- x	  预递减	   x 减 1，然后返回 x
      x --	  后递减	   返回 x，然后 x 减 1

      */

      $x=10;
      echo ++$x; // 输出11
      echo "<br>";

      $y=10;
      echo $y++; // 输出10
      echo "<br>";

      $z=5;
      echo --$z; // 输出4
      echo "<br>";

      $i=5;
      echo $i--; // 输出5
      echo "<br><br>";
      ?>

      <?php
      echo "<h2>PHP 比较运算符</h2><br>";

      /*
      比较操作符可以让您比较两个值：

      运算符	 名称   	 描述 	                                        实例
      x == y	等于	      如果 x 等于 y，则返回 true	                    5==8 返回 false
      x === y	绝对等于	  如果 x 等于 y，且它们类型相同，则返回 true	        5==="5" 返回 false
      x != y	不等于	   如果 x 不等于 y，则返回 true	                   5!=8 返回 true
      x <> y	不等于	   如果 x 不等于 y，则返回 true	                   5<>8 返回 true
      x !== y	绝对不等于	  如果 x 不等于 y，或它们类型不相同，则返回 true	   5!=="5" 返回 true
      x > y	   大于	       如果 x 大于 y，则返回 true	                    5>8 返回 false
      x < y	   小于	       如果 x 小于 y，则返回 true	                    5<8 返回 true
      x >= y	大于等于	   如果 x 大于或者等于 y，则返回 true	             5>=8 返回 false
      x <= y	小于等于	   如果 x 小于或者等于 y，则返回 true	             5<=8 返回 true`
      */


      $x=100;
      $y="100";

      var_dump($x == $y); // returns true because values are equal
      echo "<br>";
      var_dump($x === $y); // returns false because types are not equal
      echo "<br>";
      var_dump($x != $y); // returns false because values are equal
      echo "<br>";
      var_dump($x !== $y); // returns true because types are not equal
      echo "<br>";

      $a=50;
      $b=90;

      var_dump($a > $b);
      echo "<br>";
      var_dump($a <  $b);
      ?>

      <?php
      echo "<h2>PHP 逻辑运算符</h2><br>";

      echo "<pre>

      运算符	名称	  描述	                                     实例
      x and y	与	  如果 x 和 y 都为 true，则返回 true	        x=6
                                                               y=3
                                                               (x < 10 and y > 1) 返回 true

      x or y	或	  如果 x 和 y 至少有一个为 true，则返回 true	   x=6
                                                               y=3
                                                               (x==6 or y==5) 返回 true

      x xor y	异或	  如果 x 和 y 有且仅有一个为 true，则返回 true   x=6
                                                               y=3
                                                               (x==6 xor y==3) 返回 false

      x && y	与	  如果 x 和 y 都为 true，则返回 true	        x=6
                                                               y=3
                                                               (x < 10 && y > 1) 返回 true

      x || y	或	  如果 x 和 y 至少有一个为 true，则返回 true	   x=6
                                                               y=3
                                                               (x==5 || y==5) 返回 false

      ! x	   非	  如果 x 不为 true，则返回 true	               x=6
                                                               y=3
                                                               !(x==y) 返回 true

      </pre> "

      ?>

      <?php
      echo "<h2>PHP 数组运算符</h2><br>";


      /*

      运算符	 名称	  描述
      x + y  	集合	    x 和 y 的集合
      x == y	相等	    如果 x 和 y 具有相同的键/值对，则返回 true
      x === y	恒等	    如果 x 和 y 具有相同的键/值对，且顺序相同类型相同，则返回 true
      x != y	不相等	如果 x 不等于 y，则返回 true
      x <> y	不相等	如果 x 不等于 y，则返回 true
      x !== y	不恒等	如果 x 不等于 y，则返回 true

      */


      $x = array("a" => "red", "b" => "green");
      $y = array("c" => "blue", "d" => "yellow");
      $z = $x + $y; // union of $x and $y
      var_dump($z);
      echo "<br><br>";
      var_dump($x == $y);
      echo "<br>";
      var_dump($x === $y);
      echo "<br>";
      var_dump($x != $y);
      echo "<br>";
      var_dump($x <> $y);
      echo "<br>";
      var_dump($x !== $y);

      ?>


      <?php
      echo "<h2>PHP 三元运算符</h2><br>";

      echo '
      另一个条件运算符是 "?:"（或三元）运算符 。<br><br>
      语法格式<br>
      (expr1) ? (expr2) : (expr3) <br><br>
      以下实例中通过判断 $_GET 请求中含有 user 值，如果有返回 $_GET['.'\'user\''.']，否则返回 nobody :<br>
      ';

      $test = '菜鸟教程';
      // 普通写法
      $username = isset($test) ? $test : 'nobody';
      echo $username, PHP_EOL;
      echo "<br>";

      // PHP 5.3+ 版本写法
      $username = $test ?: 'nobody';
      echo $username, PHP_EOL;
      echo "<br><br>";

      // 注意：PHP_EOL 是一个换行符，兼容更大平台。


      echo "在 PHP7+ 版本多了一个 NULL 合并运算符 ??，实例如下：<br>";

      // 如果 $_GET['user'] 不存在返回 'nobody'，否则返回 $_GET['user'] 的值
      $username = $_GET['user'] ?? 'nobody';
      echo $username;
      echo "<br>";

      // 类似的三元运算符
      $username = isset($_GET['user']) ? $_GET['user'] : 'nobody';
      echo $username;
      echo "<br>";

      ?>

      <?php
      echo "<h2>PHP 组合比较符(PHP7+)</h2><br>";

      // 整型
      echo 1 <=> 1;  // 0
      echo 1 <=> 2;  // -1
      echo 2 <=> 1;  // 1

      // 浮点型
      echo 1.5 <=> 1.5;  // 0
      echo 1.5 <=> 2.5;  // -1
      echo 2.5 <=> 1.5;  // 1

      // 字符串
      echo "a" <=> "a"; // 0
      echo "a" <=> "b"; // -1
      echo "b" <=> "a"; // 1
      ?>

      <?php

      echo "<h2>PHP 运算符优先级</h2><br>";

      // 优先级： &&  >  =  >  and
      // 优先级： ||  >  =  >  or

      $a = 3;
      $b = false;
      $c = $a or $b;
      var_dump($c);          // 这里的 $c 为 int 值3，而不是 boolean 值 true
      echo "<br>";

      $d = $a || $b;
      var_dump($d);          //这里的 $d 就是 boolean 值 true
      echo "<br><br>";


      // 括号优先运算

      $a = 1;
      $b = 2;
      $c = 3;
      $d = $a + $b * $c;
      echo $d;
      echo "\n";
      echo "<br>";

      $e = ($a + $b) * $c;  // 使用括号
      echo $e;
      echo "\n";
      ?>


   </body>
</html>
