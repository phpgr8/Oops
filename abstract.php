<!--
Abstract class:-
Abstract calss Are Those Classes Which Can Not Be Directly Initilized.
Abstract Class Always Created For Inheritance Purpose.
--> 
<?php
abstract class Abc
{
    public abstract function test(); //It must Be Define in Child class
    function demo()
    {
        echo "This Is Demo Function";
    }
}
class Xyz extends Abc
{
    public function test()
    {
        echo "This is Test Function";
    }
}
$obj=new Xyz;
$obj->test();

?>
