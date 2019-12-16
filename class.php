<?php
class Abc
{
    public $msg="Hello World !";
    function demo1($a)
    {
        echo $a;
        echo "<br>";
    }
}
$obj=new Abc;
$obj->demo1("Suman");
echo $obj->msg;
?>
