<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <title>Binary Search</title>
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
    <h3>Binary Search!</h3>
    <p>Binary Search is a searching technique used to search an element in a sorted array. </p>
    <p>For a given array of numbers, we need to search for the presence of element x in the array.</p>
    <?= "The given array is:" ?>
    <?php
    foreach ($array as $a) {
        echo $a . " ";
    }

    echo "The element we are looking for is: " . $element;
    nl2br("  \n  "); //I want new line , not working
    ?>
    <br>
    <?= "The element was: "; ?>
    <?php
    if ($found == NULL) {
        echo "not found";
    } else echo "found at the position " . $found;
    ?>
    <br>
    <br>
    <a href="index.php">Back to Index</a>
</div>


<footer>
    <p>.......</p>
    <p> Copyright <span class="icon">&#169; </span> Lavinia -Lynx Solutions 2022</p>
</footer>

</body>
</html>