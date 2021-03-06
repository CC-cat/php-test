<!DOCTYPE html>
<html lang="zh-CN" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      <?php


      /*

      面向对象内容
      类 − 定义了一件事物的抽象特点。类的定义包含了数据的形式以及对数据的操作。

      对象 − 是类的实例。

      成员变量 − 定义在类内部的变量。该变量的值对外是不可见的，但是可以通过成员函数访问，在类被实例化为对象后，该变量即可称为对象的属性。

      成员函数 − 定义在类的内部，可用于访问对象的数据。

      继承 − 继承性是子类自动共享父类数据结构和方法的机制，这是类之间的一种关系。在定义和实现一个类的时候，可以在一个已经存在的类的基础之上来进行，把这个已经存在的类所定义的内容作为自己的内容，并加入若干新的内容。

      父类 − 一个类被其他类继承，可将该类称为父类，或基类，或超类。

      子类 − 一个类继承其他类称为子类，也可称为派生类。

      多态 − 多态性是指相同的函数或方法可作用于多种类型的对象上并获得不同的结果。不同的对象，收到同一消息可以产生不同的结果，这种现象称为多态性。

      重载 − 简单说，就是函数或者方法有同样的名称，但是参数列表不相同的情形，这样的同名不同参数的函数或者方法之间，互相称之为重载函数或者方法。

      抽象性 − 抽象性是指将具有一致的数据结构（属性）和行为（操作）的对象抽象成类。一个类就是这样一种抽象，它反映了与应用有关的重要性质，而忽略其他一些无关内容。任何类的划分都是主观的，但必须与具体的应用有关。

      封装 − 封装是指将现实世界中存在的某个客体的属性与行为绑定在一起，并放置在一个逻辑单元内。

      构造函数 − 主要用来在创建对象时初始化对象， 即为对象成员变量赋初始值，总与new运算符一起使用在创建对象的语句中。

      析构函数 − 析构函数(destructor) 与构造函数相反，当对象结束其生命周期时（例如对象所在的函数已调用完毕），系统自动执行析构函数。析构函数往往用来做"清理善后" 的工作（例如在建立对象时用new开辟了一片内存空间，应在退出前在析构函数中用delete释放）。
      */

      echo "<h2>PHP 面向对象</h2><br>";



      class Site
      {
        /* 成员变量 */
        var $url;
        var $title;

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

      $runoob = new Site;
      $taobao = new Site;
      $google = new Site;

      // 调用成员函数，设置标题和URL
      $runoob->setTitle( "菜鸟教程" );
      $taobao->setTitle( "淘宝" );
      $google->setTitle( "Google 搜索" );

      $runoob->setUrl( 'www.runoob.com' );
      $taobao->setUrl( 'www.taobao.com' );
      $google->setUrl( 'www.google.com' );

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
