<?php
//Public
class Abc
{
    public $msg="Hello World !";
    function demo()
    {
        echo "<br>";
        echo "This is Demo function";
    }
}
$obj=new Abc;
echo $obj->msg;
$obj->demo();
?>





<hr>
<?php
//Protected ko hamesa child class ke through call karte hai
class Pri
{
    protected $msg="Hello World !";
    protected function demo()
    {
        echo "This is Parent Class Function";
    }
}
class Chi extends Pri
{
    public function demo1()
    {
        echo $this->msg;
        echo "<br>";
        echo "This is Child Class";
    }
}
$obj=new Chi;
$obj->demo1();
?>



<hr>
<?php
//Private class ke bahar call nahi hota hai isiliye public function banakar call karna hota hai
class Main
{
    private $msg="Hello World !";
    private function demo()
    {
        echo "Hello";
    }
    public function demo2()
    {
        echo $this->msg;
        echo "<br>";
        $this->demo();
    }
}
$obj=new Main;
$obj->demo2();

?>
