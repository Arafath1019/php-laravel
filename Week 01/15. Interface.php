<?php

abstract class Vehicle {
    abstract public function getBaseFare(): int;

    abstract public function getPerKilofare(): int;

    public function getTotal(int $kilo): int{
        return $this->getBaseFare() + ($kilo * $this->getPerKilofare());
    }
}

interface HourlyRentable {
    public function getHourlyRate(): int;
}

interface DailyRentable {
    public function getDailyRate(): int;
}

class Car extends Vehicle implements HourlyRentable, DailyRentable {
    public function getBaseFare(): int
    {
        return 50;
    }

    public function getPerKilofare(): int
    {
        return 15;
    }

    public function getHourlyRate(): int {
        return 100;
    }

    public function getDailyRate(): int{
        return 50;
    }
}

class Bike extends Vehicle implements HourlyRentable {
    public function getBaseFare(): int
    {
        return 30;
    }

    public function getPerKilofare(): int
    {
        return 10;
    }

    public function getHourlyRate(): int{
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