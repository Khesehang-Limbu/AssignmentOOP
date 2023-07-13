<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

abstract class CarEngine{
    public final function burnFuel() : void{
        echo "Fuel is burning";
    }
}

class Car extends CarEngine{
    public $name;
    public $color;
    static $countryMade;

    public function __construct(String $name, String $color){
        $this->name = $name;
        $this->color = $color;    
        $this::$countryMade = "Nepal";
        
    }

    public function __destruct(){
        echo "Destroying " . __CLASS__ . ", destructor will be called when there aren't any references to the class\n";
    } 

    public function getCountryMade() : void{
        echo Car::$countryMade . "</br>";
    }
    
//    public function burnFuel(){
//        echo "Car is burning fuel";
//    }
}

$honda = new Car("Honda", "Yellow");
$honda->getCountryMade();
?>

