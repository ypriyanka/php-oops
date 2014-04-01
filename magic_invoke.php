<?php
class myclass
{
    public function __invoke($x)
    {
        var_dump($x);
    }
}
$obj = new myclass;
$obj(5); //calling an object like a function so __invoke() will be automatically called
var_dump(is_callable($obj));
?>