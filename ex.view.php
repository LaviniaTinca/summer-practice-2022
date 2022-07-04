<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <title>Exercises</title>
</head>
<body>
<header>
    <h1>
        <?php
        echo $greeting;
        ?>
    </h1>
    <h4><?= $greeting2 ?></h4>
</header>

<div>
    <h3>Binary Search  &&  Bubble Sort</h3>
    <p>Binary Search is a searching technique used to search an element in a sorted array. </p>
    <p>For a given array of numbers, we need to search for the presence of element x in the array.</p>
    <?= "The given array is:" ?>
    <?php
    foreach ($array as $a) {
        echo $a . " ";
    }
    echo "<br>";
    echo "The sorted array is:";

    foreach ($sorted as $a) {
        echo $a . " ";
    }
    echo "<br>";
    echo "The element we are looking for is: " . $element." ---"." in the sorted array";
    ?>
<!--    --><?//= "The element was: "; ?>
    <?php
    if ($found == NULL) {
        echo "not found";
    } else echo "found at the position " . $found;
    ?>
</div>

<div>
    <hr class="class-1"/>
    <h3>Prime number!</h3>
    <p>A prime is a natural number greater then 1 that has no positive divisors other than 1 and itself. </p>
    <?= "The given number " . $number . " is " ?>
    <?php
    if ($p) {
        echo "prime";
    } else echo "not prime ";
    ?>
</div>

<div>
    <hr class="class-1"/>
    <h3>Bubble sort -ascending!</h3>
    <?= "The given array is:" ?>
    <?php
    foreach ($array1 as $a) {
        echo $a . " ";
    }
    echo "<br>";
    echo "The sorted array is:";

    foreach ($sorted1 as $a) {
        echo $a . " ";
    }
    ?>
</div>

<div>
    <hr class="class-1"/>
    <h3>Bubble sort -descending!</h3>
    <?= "The given array is:" ?>
    <?php
    foreach ($array2 as $a) {
        echo $a . " ";
    }
    echo "<br>";
    echo "The sorted array is:";

    foreach ($sorted2 as $a) {
        echo $a . " ";
    }
    ?>
</div>

<div>
    <hr class="class-1"/>
    <h3>Leap Years!</h3>
    <p></p>
    <?= "Until 2022 there are: " . $count . " leap years" ?>
</div>
<div>
    <?=nl2br(" \n  \r\n ");?>
    <br>
    <a href="index.php">Back to Index</a>
</div>


<footer>
    <p>.......</p>
    <p> Copyright <span class="icon">&#169; </span> Lavinia -Lynx Solutions 2022</p>
</footer>

</body>
</html>