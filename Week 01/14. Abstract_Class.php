<?php

abstract class Vehicle {
    abstract public function getBaseFare(): int;

    abstract public function getPerKilofare(): int;

    public function getTotal(int $kilo): int{
        return $this->getBaseFare() + ($kilo * $this->getPerKilofare());
    }
}

class Car extends Vehicle{
    public function getBaseFare(): int
    {
        return 50;
    }

    public function getPerKilofare(): int
    {
        return 15;
    }
}

class Bike extends Vehicle{
    public function getBaseFare(): int
    {
        return 30;
    }

    public function getPerKilofare(): int
    {
        return 10;
    }
}

class CNG extends Vehicle{
    public function getBaseFare(): int
    {
        return 20;
    }

    public function getPerKilofare(): int
    {
        return 5;
    }
}

$car = new Car();
$total = $car->getTotal(5);
var_dump($total);