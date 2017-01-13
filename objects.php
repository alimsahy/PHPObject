<?php

class Objects
{
    protected $object = array();

    function __set($name, $value)
    {
        $this->object[$name] = $value;
    }

    function __get($name)
    {
        return is_callable($this->object[$name]) ? $this->object[$name]($this) : $this->object[$name];
    }
}

$object = new Objects();

$object->exampleInteger = 1;
$object->exampleString = "Hello World";
$object->exampleBoolean = true;
$object->exampleFloat = 3.14;

var_dump($object->exampleInteger); # Output: int 1
var_dump($object->exampleString); # Output: string 'Hello World' (length = 11)
var_dump($object->exampleBoolean); # Output: boolean true
var_dump($object->exampleFloat); # Output: Float: 3.14

?>
