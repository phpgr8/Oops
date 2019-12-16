<?php
class Car
{
    public $honda="This Is Honda's Car";
    function demo()
    {
        echo "<br>";
        echo "This Is A Demo Function";
        echo "<br>";
    }
}
class engine extends Car
{
    function eng()
    {
        echo "This is The Engine Of class";
    }
}
$obj=new engine;
echo $obj->honda;// Child class Ke object ke Through Hi parent class ke variable ko call karna hai
echo $obj->demo();// Child class Ke object ke Through Hi parent class ke function ko call karna hai
?>
