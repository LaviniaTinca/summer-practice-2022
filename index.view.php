<!--//generate the begining code with : <html
if we have not only php we need to close the php tag: <?php  ?>
 -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>
            <?php
            echo $greeting;
            ?>
        </h1>
        <h4><?=$greeting2?></h4>
    </header>

    <h2><?=$week1?> </h2>
	<ul>
		<?php foreach ($tasks as $task) : ?>
        <li>
            <?php if ($task->getCompleted()) :?>

                <a href="binarySearch.php"><?=$task->getDescription();?></a>
                <span class="icon">&#9989; </span>
                <?php else :?>
                <a href=<?=$t[array_search($task, $tasks)];?>><?=$task->getDescription(); ?></a>
            <?php endif; ?>
        </li>
		<?php endforeach; ?>
	</ul>
    <div>
<!--        <div class="line"></div>-->
        <hr class="class-2"/>
        <a href="raport.docx">Activity Report</a>
    </div>

	<footer>
        <p>.......</p>
        <p> Copyright <span class="icon">&#169; </span> Lavinia -Lynx Solutions 2022</p>
    </footer>
</body>
</html>