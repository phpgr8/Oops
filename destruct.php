<?php
class Abc
{
    function __destruct()// Destruct Hamesa Last me calling hota hai or automatic call hota hai
    {
        echo "This Is Deconstruct Function";
    }
    function demo()
    {
        echo "This Is User Define Function";
        echo "<br>";
    }
}
$obj=new Abc;
$obj->demo();
?>
