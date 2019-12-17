<!--
Interface:-The class That Is fully Abstract Is Called Interface
-->
<?php
interface a
{
    public function abc();
}

interface b
{
    public function zxc();
}
class Demo implements a,b
{
    function abc()
    {
        echo "This Is Abc Function </br>";
    }
    function zxc()
    {
        echo "This Is Zxc Function </br>";
    }
}
$obj=new Demo;
$obj->abc(); // OutPut:- This Is Abc Function
$obj->zxc(); // OutPut:- This Is Zxc Function
?>
