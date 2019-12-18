<?php
//Static Binding
/*ye sabse pahle object check karta
hai ki kis class ka hai. uske bad
uske static properties ko display karta hai*/
class Abc
{
	public static $table="Login";
	public static function demo()
	{
		echo "insert Into ".static::$table; //run time isko pahle pending me rakhta hai
	}
}
class Zxc extends Abc
{
	public static $table="Registation";

	public static function demo2()
	{
		echo "insert into ".static::$table;
	}
}
Zxc::demo2(); //yaha check karta hai ki kis class ka object hai or
// jis class ka obj hota hai us staic ko display karta hai


?>
