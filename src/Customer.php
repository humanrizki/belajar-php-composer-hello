<?php 
namespace HumanRizki\Belajar;
class Customer{
    /**
     * Class constructor.
     */
    public function __construct(private string $name)
    {
    }
    public function sayHello(string $name = "Guest"){
        return "Hello $name, My name is ".$this->name.PHP_EOL;
    }
}
?>