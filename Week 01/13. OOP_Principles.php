<?php

class User {
    public $role;
    public function login(){

    }
}
class Employee extends User {
    public string $name;
    public string $address;
    public string $dob;

    public function getAge(){

    }
}

$employee = new Employee();
$employee->role;
$employee->login();