<!DOCMENT TYPE html>
<html>
    <body>
        <?php
            echo("我的第一个php测试代码页！");
        ?>
        <?php
            $x = 100; //全局变量
           function  myTest() {
                  $y=10; // 局部作用域
                    echo "<p>测试函数内部的变量：</p>";
                    echo "变量 x 是：$x";
                    echo "<br>";
                    echo "变量 y 是：$y";

            } 

            myTest();

            echo "<p>测试函数之外的变量：</p>";
            echo "变量 x 是：$x";
            echo "<br>";
            echo "变量 y 是：$y";
            echo "<br>";
        ?>
        <?php
            $x=5;
            $y=10;

            function myTest2() {
                $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
            } 

            myTest2();
            echo $y; // 输出 15
        ?>

        <?php
            function myTest3() {
               static $x=0;
               echo $x;
               $x++;
            }

            myTest3();
            echo "<br>";
            myTest3();
            echo "<br>";
            myTest3();
            echo "<br>";
            myTest3();
            echo "<br>";
            myTest3();
        ?>  
    </body>
</html>


