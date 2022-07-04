<?php
// dump & die function

function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}


/** Binary search - search an element in a sorted array
 * @param array $array - the given array
 * @param $element - the number whose presence we check
 * @return int - the index ehere the number was found or null if doesn't exist
 */
function binarySearch($array, $element)
{
    // check for empty array
    if (count($array) === 0) return false;
    //set the margins
    $left = 0;
    $right = count($array) - 1;

    while ($left <= $right) {

        // compute middle index using floor function which rounds down the given number
        $middle = floor(($left + $right) / 2);

        // element found at mid
        if ($array[$middle] < $element) {
            $left = $middle + 1;
        } elseif ($array[$middle] > $element) {
            $right = $middle - 1;
        } else {
            return $middle;
        }

        if ($array[$middle] === $element) return $middle;
    }
// If the element does not exist:
    return null;
}

/**Check if a given number is prime or not
 * @param $element - the given number
 */
function isPrime($element)
{
    if ($element <= 1) return false;
    for ($i = 2; $i <= $element - 1; $i++) {
        if ($element % $i == 0) return false;
    }
    return true;
}

/**
 * determines  all the leap years until 2022
 */
function leapYears()
{
    $count = 0;
    for ($i = 0; $i <= 2022; $i++) {
        if ((($i % 4 == 0) && ($i % 100 != 100)) or ($i % 400 == 0)) {
            $count++;
        }
    }
    return $count;
}

/**Sort an array through bubble sort method
 * @param $array -the initial array
 * @return mixed -the sorted array
 */
function bubbleSortAscending($array)
{
    for ($i = 0; $i < sizeof($array); $i++) {
        for ($j = 0; $j < sizeof($array) - $i - 1; $j++) {
            if ($array[$j]> $array[$j+1]){
                $aux=$array[$j];
                $array[$j]= $array[$j+1];
                $array[$j+1] = $aux;
            }
        }
    }
    return $array;
}

function bubbleSortDescending($array)
{
    for ($i = 0; $i < sizeof($array); $i++) {
        for ($j = 0; $j < sizeof($array) - $i - 1; $j++) {
            if ($array[$j]< $array[$j+1]){
                $aux=$array[$j];
                $array[$j]= $array[$j+1];
                $array[$j+1] = $aux;
            }
        }
    }
    return $array;
}