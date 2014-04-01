<?php
class my_class
{
public $name;
public $id;	
 public function normal() 
 {
    echo "This is normal function".'<br/>';
 }
 
 public function __call($method, $arg)
  {
    echo $method.'<br />';
    print_r($arg);
	
	if($method==setname)
	{
	$this->$name=$arg;
	}
	
	else if($arg==$setid)
	{
	$this->$id=$arg;
	}
  }
}


$obj = new my_class;
$obj->normal();
$obj->setname("priyanka");   //calling non-existant function
$obj->setid("42");
?>