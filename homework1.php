<?php
    const TITLE = 'PHP lvl1 Homework 1';
    $numLes = 1;
    $today = getdate();
    $month = $today['month'];
    $year = $today['year'];
    $a = 1;
    $b = 2;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=TITLE ?></title>
    <style>
        h1, h2, p, div {
            margin-left: 40px;
        }
        p {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h2 style="font-size: 200%;">PHP GB level 1</h2>
    <h1 style="font-size: 150%;">Homework <?=$numLes?></h1>
    <p>Текущий месяц: <strong><?=$month?></strong></p>
    <p>Текущий год: <strong><?=$year?></strong></p>

    <div>
        <h3>Task 2</h3>
        <p>Исходные данные:<br>
        A = <?=$a?>, B = <?=$b?><br>
        <?php
            $b = $b + $a;
            $a = $b - $a;
            $b = $b - $a;
        ?>
        Данные после вычислений, произведенных php:<br>
        A = <?=$a?>, B = <?=$b?>
        </p>
    </div>
    
</body>
</html>