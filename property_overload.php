<?php
class demo
{
var $name;
	
	public function __set($name,$value)
	{
		echo $this->$name=$value;
	}
	public function __get($name)
	{
		return $this->$name;
	}
		
}
$obj=new demo;
$obj->identity="priyanka";
echo"<br>";
echo $obj->$identity;
?>