<?php
//overriding me first function ko second function replace karta hai
//Condition:- Function Name same hona chahiye
class Abc
{
    function __construct()
    {
        echo "This is Parent Construct";
    }
}
class Xyz extends Abc
{
    function __construct()
    {
        echo "This Is Child Construct";
    }
}
$obj=new Xyz;
?>
