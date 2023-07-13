<?php
class PublicOffice {
    public $service;
    public $name;

    public function __construct($name, $service){
        $this->name = $name;
        $this->service = $service;
        $this->companyId = 123;    
    }
}

class RevenueDepartment extends PublicOffice{
    private $employeeSalary;
    protected $employeeName;

    public function __construct($name, $service, $emp_name, $emp_salary){
        parent::__construct($name, $service);
        $this->employeeName = $emp_name;
        $this->employeeSalary = $emp_salary;
    }

    public function getName(){
        return $this->employeeName;
    }
}

$ktmRevenueDept = new RevenueDepartment('Kathmandu Revenue Department', 'Revenue Collection', 'Khesehang', 20000);

echo "$ktmRevenueDept->name </br>";
echo "$ktmRevenueDept->service </br>";

try {
    echo $ktmRevenueDept->employeeName . " </br>";
}catch(Error $e){
    echo $e->getMessage() . "</br>";
}

try {
    echo "$ktmRevenueDept->employeeSalary </br>";
} catch (Error $e) {
    echo $e->getMessage() . "</br>";
}
