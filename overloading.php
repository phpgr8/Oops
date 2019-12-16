<?php
class Abc
{
    function __call($method,$parameter)
    {
        if($method=='test')
        {
            $count=count($parameter);
            if($count==2)
            {
                echo "You have To provide Two parameter";
            }
            else
            {
                echo "Not match";
            }
        }
    }
}
$obj=new Abc;
$obj->test("Neha","Suman");
?>
