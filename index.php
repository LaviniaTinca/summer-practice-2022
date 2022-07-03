<?php

//classes
class Task
{
    protected $description;
    protected $completed = false;

    public function __construct($description)
    {
        //automatically triggered on instantiation
        $this->description = $description;

    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getCompleted()
    {
        return $this->completed;
    }
}
//var_dump($task->isComplete());
//let's make a tasks array
$tasks = [
    new Task("Binary search "),
    new Task("Bubble sort "),
    new Task("Check if a number is a prime number "),
    //new Task("Bubble sort - descending order"),
    new Task("Leap years until 2022 ")
];
//dd($tasks);
$tasks[0]->complete();

$greeting ="Lynx Solutions";
$greeting2 ="Summer practice 2022";
$week1 ="1. Week 1. Tutorials:  MySQL, PHP Practicioner, Functions- for practice";
//$t = ["binarySearch.php", "prime.php", "bubbleSortAsc.php", "bubbleSortDesc.php", "leapYears.php"];
$t = ["ex.php", "ex.php", "ex.php", "ex.php"];

require "index.view.php";