<?php
class TestClass
{
    public $yoyo;

    public function __construct($yoyo)
    {
        $this->yoyo = $yoyo;
    }

    public function __toString()
    {
        return $this->yoyo;
    }
}

$class = new TestClass('Hello');
echo $class;   //here we are echoing an object so it needs to be converted to a string so it will automatically call __toString() magic method
?>