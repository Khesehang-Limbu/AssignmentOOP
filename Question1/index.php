<?php
class Employee {
    private $name;
    private $address;

    public function setName($name){
        return $this->name = $name;
    }

    public function setAddress($address){
        return $this->address = $address;
    }

    public function getName(){
        return $this->name;
    }

    public function getAddress(){
        return $this->address;
    }
}

class Permanent extends Employee {
    private $post;
    private $salary;

    public function __construct($name, $address, $post, $salary){
        parent::setName($name);
        parent::setAddress($address);
        $this->setPost($post);
        $this->setSalary($salary);
    }

    public function setPost($post){
        return $this->post = $post;
    }

    public function setSalary($salary){
        return $this->salary = $salary;
    }

    public function displayAll(){
        echo "Name : " . parent::getName() . " Address : " . parent::getAddress() . " Salary : $this->salary Post : $this->post";
    }
}

$m = 20;
for($i = 0; $i<$m; $i++){
    ${"m" . $i} = new Permanent('Khesehang Yonghang', 'Gaushala', 'Data-Entry', 20000.00);
    ${"m" . $i}->displayAll();
    echo "</br>";
}

//Multiple Inheritance in PHP is achieved with the help of interfaces
interface brake {
    public function braking();
}

interface accelerate {
    public function accelerating();
}

class Car implements brake, accelerate {
    public function braking(){
        echo "Car is braking";
    }

    public function accelerating(){
        echo "Car is accelerating";
    }
}

$car = new Car();
$car->accelerating();
echo "</br>";
$car->braking();
