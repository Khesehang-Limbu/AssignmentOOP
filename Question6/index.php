<?php
class AndroidPhone {
    function __call($nameOfFunction, $arguments) {
        if ($nameOfFunction == "play"){
            switch(count($arguments)){
                case 1:
                    return "Android Phone is playing $arguments[0].";
            
                case 2:
                    return "Android Phone is playing $arguments[1] as $arguments[0].";    
            }
        }
    }
}

$samsung = new AndroidPhone();
echo $samsung->play("Music");
echo "</br>";
echo $samsung->play("Video", "One Piece");

echo "The above example is of method overloading in PHP </br>";

interface Shape{
    public function calcArea();
}

class Rectangle implements Shape{
    public $length;
    public $breadth;

    public function __construct(float $length, float $breadth){
        $this->length = $length;
        $this->breadth = $breadth;
    }

    function calcArea() : float{
        return $this->length * $this->breadth;
    }
}

class Square implements Shape{
    public $side;

    public function __construct(float $side){
        $this->side = $side;
    }
    
    function calcArea() : float{
        return $this->side ** 2;
    }
}

$rect = new Rectangle(12.5, 13.5);
echo $rect->calcArea() ."</br>";

$square = new Square(4);
echo $square->calcArea() ."</br>";
echo "The above example shows method overriding and how one mehthod of a parent can be overridden.</br>";
echo "These examples show how Polymorphism is implemented in PHP";
