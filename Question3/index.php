<?php
abstract class Human{
    public $name;
    public $religion;

    public function __construct($name, $religion){
        $this->name = $name;
        $this->religion = $religion;
    }

    public abstract function eat();

    public function sleep(){
        echo "$this->name Is Sleeping";
    }
}

interface Play{
    public function think();
    public function do();
}

class Nepali extends Human implements Play{
    public function __construct($name, $religion){
        parent::__construct($name, $religion);
}
    public function eat(){
        echo "$this->name is eating. </br>";
    }

    public function think(){
        echo "$this->name is thinking. </br>";
    }

    public function do(){
        echo "$this->name is doing something after thinking </br>";
    }
}

echo "Both abstract and interface are used to achieve abstraction, which is detail hiding in OOP";
echo "</br>For example a human does lots of stuffs, but doesn't need to know how his/her body performs inside.";

$me = new Nepali("Khesehang Yonghang", "Kirant");
$me->eat();
$me->think();
$me->do();

