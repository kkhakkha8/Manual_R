<?php 

class Car{
    public function drive() {
        echo "Car is drivig";
    }
    public function stop() {
        echo "Car is stop";
    }
    public function whatIsThis() {
        echo "<pre>";
        //var_dump($this);
        return $this;
    }
    public static function startEngine() {
        echo "start engine";
        // return $this error here 
        return new Car;
    }
}

$car = new Car();
$car->drive();
$car->stop();
$car->whatIsThis();
$car->whatIsThis()->drive();
$car->whatIsThis()->stop();

// Static

Car::startEngine();
Car::startEngine()->drive();