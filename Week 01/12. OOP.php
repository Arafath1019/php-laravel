<?php

// Task Management System

// Create Task

class Task{
    public $name;
    public $status;
    public $members = [];

    public function __construct(){

    }

    public function setName($name){
        $this->name = $name;
    }

    public function changeStatus($status){
        $this->status = $status;
    }
}

class Member {

}

$task_one = new Task();
$task_two = new Task();