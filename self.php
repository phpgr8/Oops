<?php
//self
class Abc
{
	public static $msg="Hello World ! <br>";
	public static function demo()
	{
		echo "First maggsge ".self::$msg;
	}
	public static function demo2()
	{
		echo "<br> Second massage ".self::demo();
	}
}

echo Abc::$msg;
Abc::demo2();
?>
