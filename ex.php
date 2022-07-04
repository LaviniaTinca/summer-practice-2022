<?php
require "functions.php";

$greeting = "Lynx Solutions";
$greeting2 = "Summer practice 2022";

//binary search
$array = [45,4,78,8,5,9,90];//,45,345,3455];
$element = 5;
$sorted= bubbleSortAscending($array);
$found = binarySearch($sorted, $element);


//bubble sort ascending
$array1 = [4,7,5,3,98,7,56];
$sorted1 = bubbleSortAscending($array1);

//bubble sort descending
$array2 = [5,76,54,3,24,67,7];
$sorted2= bubbleSortDescending($array2);

//prime number
$number = 56;
$p = isPrime($number);

//number of leapYears until 2022
$count = leapYears();
require "ex.view.php";
