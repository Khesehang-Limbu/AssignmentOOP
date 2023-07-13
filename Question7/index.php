<?php
class Shop{
    public $name;
    protected $service_name;
    private $revenue;

    public function __construct(String $name, String $service_name){
        $this->name = $name;
        $this->service_name = $service_name;
    }

    public function setRevenue(float $revenue){
        return $this->revenue = $revenue;
    }

    public function display(){
        print("Shop Name : $this->name </br> Shop Service : $this->service_name </br>");
    }
}

$sweet_shop = new Shop("Sweet Shop", "Sell Sweets");
$sweet_shop->display();

try {
    echo $sweet_shop->revenue;
} catch (Error $e) {
    echo $e->getMessage() . "</br>";
}

try {
    echo $sweet_shop->service_name;
} catch (Error $e) {
    echo $e->getMessage() . "</br>";
}
echo "</br>Class itself encapsulates data, but using access modifiers like protected and private helps to make sure that the data is well hidden and cannot be accessed explicitly.";
