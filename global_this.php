<?php
//Global
class Abc
{
    public $name;
    function demo1($a)
    {
        global $name;
        echo $name=$a;
        echo "<br>";
    }
    function demo2()
    {
        global $name;
        echo $name;
    }
}
$obj=new Abc;
$obj->demo1("Suman Kumar");
$obj->demo2();
---------------------------------------------------
// This 
class Abc
{
    public $name;
    function demo1($a)
    {
        echo $this->name=$a;
        echo "<br>";
    }
    function demo2()
    {
        echo $this->name;
    }
}
$obj=new Abc;
$obj->demo1("Suman Kumar");
$obj->demo2();
?>
