<!DOCTYPE html>
<html lang="zh-CN" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
   <?php

    echo "<h2>PHP 构造函数</h2><br>";

    echo "
    构造函数是一种特殊的方法。主要用来在创建对象时初始化对象， <br>
    即为对象成员变量赋初始值，在创建对象的语句中与 new 运算符一起使用。<br>
    PHP 5 允许开发者在一个类中定义一个方法作为构造函数，语法格式如下：<br><br>
    ";

    /*
    void __construct ([ mixed $args [, $... ]] )


    在上面的例子中我们就可以通过构造方法来初始化 $url 和 $title 变量：

      function __construct( $par1, $par2 ) {
         $this->url = $par1;
         $this->title = $par2;
      }
    </pre>
    */

   ?>

   <?php
   class Site {
     /* 成员变量 */
     var $url;
     var $title;

     function __construct( $par1, $par2 ) {
       $this->url = $par1;
       $this->title = $par2;
     }
     /* 成员函数 */
     // 设置 传参
     function setUrl($par){
      $this->url = $par;
     }

     function setTitle($par){
      $this->title = $par;
     }

     // 获取 显示
     function getUrl(){
      echo $this->url . PHP_EOL;
      echo "<br>";
     }

     function getTitle(){
      echo $this->title . PHP_EOL;
      echo "<br>";
     }
  }

   $runoob = new Site('www.runoob.com', '菜鸟教程');
   $taobao = new Site('www.taobao.com', '淘宝');
   $google = new Site('www.google.com', 'Google 搜索');

   // 调用成员函数，获取标题和URL
   $runoob->getTitle();
   $taobao->getTitle();
   $google->getTitle();

   $runoob->getUrl();
   $taobao->getUrl();
   $google->getUrl();


   ?>
   </body>
</html>
