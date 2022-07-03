<?php
require "functions.php";

$greeting = "Lynx Solutions";
$greeting2 = "Summer practice 2022";

//binary search
$array = [45,5,78,8,5,9,90];//,45,345,3455];
$element = 5;
$sorted= bubbleSort($array);
$found = binarySearch($sorted, $element);


//prime number
$number = 56;
$p = isPrime($number);

//number of leapYears until 2022
$count = leapYears();
require "ex.view.php";
