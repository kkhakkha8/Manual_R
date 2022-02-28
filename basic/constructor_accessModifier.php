<?php


class Car2{
    protected $carName;
    public function __construct($carName)
    {
        $this->carName = $carName;
    }
    public function carBrand() {
        echo "Car brand is $this->carName";
    }  
    private function carPrice() {
        echo "$1 million";
    } 
    public function getCarPrice() {
        return $this->carPrice();
    }
}

$car = new Car2("Mercedes");
$car->carBrand();
// $car->carPrice(); Error
$car->getCarPrice();