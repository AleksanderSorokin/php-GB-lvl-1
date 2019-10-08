
<?php
   const TITLE = "Homework 2";
   
   echo "Task 1. Работа с двумя переменными по заданному принципу.<br>";
    $a = -5;
    $b = 2;
    if ($a>=0 && $b>=0) {
        echo ($a - $b).PHP_EOL;
    } 
    elseif ($a<0 && $b<0) {
        echo ($a * $b).PHP_EOL;
    }
    else {
        echo ($a + $b).PHP_EOL;
    }


    echo "<br>Task 2. Вывод чисел от A до 15.<br>";
    $a = 7;
    switch ($a) {
        case 0:
            echo "0<br>";
        case 1:
            echo "1<br>";
        case 2:
            echo "2<br>";
        case 3:
            echo "3<br>";
        case 4:
            echo "4<br>";
        case 5:
            echo "5<br>";
        case 6:
            echo "6<br>";
        case 7:
            echo "7<br>";
        case 8:
            echo "8<br>";
        case 9:
            echo "9<br>";
        case 10:
            echo "10<br>";
        case 11:
            echo "11<br>";
        case 12:
            echo "12<br>";
        case 13:
            echo "13<br>";
        case 14:
            echo "14<br>";
        case 15:
            echo "15<br>";
            break;
    }

echo "<br>Task 3. Основные математические действия в виде функций.<br>";

sum(2, 5);
function sum($a, $b) {
    echo $a + $b."<br>";
}

diff(6, 1);
function diff($a, $b) {
    echo $a - $b."<br>";
}

mult(4, 8);
function mult($a, $b) {
    echo $a * $b."<br>";
}

divi(9, 3);
function divi($a, $b) {
    echo ($b !=0) ? $a/$b."<br>" : null;
}

echo "<br>Task 4. Функция с тремя параметрами.<br>";

mathOperation(5, 6, 3);
function mathOperation($arg1, $arg2, $operation) {
       
    switch ($operation) {
        case 1: 
            $operation = sum($arg1, $arg2);
            break;
        case 2:
            $operation = diff($arg1, $arg2);
            break;
        case 3:
            $operation = mult($arg1, $arg2);
            break;
        case 4:
            $operation = divi($arg1, $arg2);
            break;
        default:
            echo 'Недопустимое значение.';
            break;
    }  
}

echo "<br>Task 6. Возведение числа в степень при помощи рекурсии.<br>";

power (2, 6);
function power($val, $pow) {
        if ($pow == 0) {
        return 1;
    }
    --$pow;
    return power($val, $pow) * $val;
}
echo power();

echo "<br>";

echo "<br>Task 7. Функция от текущего времени с правильным склонением.<br>";

$hour = date('H');
    if ($hour == 1 || $hour == 21)  {
        $hourEnd = " ";
    } 
    elseif (($hour >= 2 || $hour <= 4) || ($hour >= 22 || $hour <= 24)) {
        $hourEnd = "а";
    }
    $hourEnd = "ов";

$minutes = date('i');
if ($minutes > 4 && $minutes < 20) {
    switch($minutes) {
        case 1: 
        $minutesEnd = "а";
        break;
        case 2 || 3 || 4:
        $minutesEnd = "ы";
        break;
        default: 
        $minutesEnd = " ";
        break;
    }
} 
    switch ($minutes % 10) {
        case 1: 
        $minutesEnd = "а";
        break;
        case 2 || 3 || 4:
        $minutesEnd = "ы";
        break;
        default: 
        $minutesEnd =" ";
        break;
    }
echo "Текущее время:".$hour." Час".$hourEnd." ".$minutes." минут".$minutesEnd;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=TITLE?></title>
</head>
<body>
    
</body>
</html>


