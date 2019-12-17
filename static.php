<!--Static method and Properties in php is very useful feature.-->
<!--Static method and Properties in php can directly accessible -->
<!--without creating object of class.-->
<?php
class Abc
{
    public static $msg="Hello World !";
    static function demo()
    {
        echo "This Is Static Demo Function";
    }
}
//echo Abc::$msg;  //OutPut:- Hellow World
//Abc::demo(); // Output:-This Is Static Demo Function

class Zxc extends Abc
{
    static function test()
    {
        echo "This Is Test Function";
    }
}
Zxc::test(); //OutPut:-This Is Test Function
Zxc::demo(); //OutPut:-This Is Static Demo Function
echo Zxc::$msg; //OutPut:- Hello World
?>
