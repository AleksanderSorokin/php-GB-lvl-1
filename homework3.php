<?php
    //Task1. Все числа в заданном интервале делящиеся без остатка на указанный делитель
    const START_INTERVAL = 0;
    const END_INTERVAL = 100;
    const DIVIDER = 3;

    $i = START_INTERVAL;
    while($i <= END_INTERVAL) {
        if($i % DIVIDER == 0) {
            echo $i.PHP_EOL;  
        }
        $i++;
    }

    echo "<br>";
    //Task2. Четное / нечетное.

    const START_INTERVAL_NEW = 0;
    const END_INTERVAL_NEW = 10;
        
    $i = START_INTERVAL_NEW;
    do {
        if($i == 0) {
            echo $i."- Ноль.<br>";
            $i++;
        }
        switch ($i % 2) {
            case 1:
                echo $i." - Нечетное число.<br>";
                break;
            case 0:           
                echo $i."- Четное число.<br>";
                break;
        }
        $i++;        
    }
    while($i <= END_INTERVAL_NEW);
    

    // Task 3. Массив с названиями городов.

    $russianTowns = [
        'Московская область' => ['Москва', 'Можайск', 'Зеленоград', 'Волоколамск', 'Дубна', 'Балашиха', 'Истра'],
        'Ленинградская область' => ['Санкт-Петербург', 'Кронштадт', 'Всеволжск', 'Выборг', 'Кингисепп', 'Гатчина', 'Отрадное'],
        'Кемеровская область' => ['Кемрово', 'Киселевск', 'Мариинск', 'Тайга', 'Новокузнецк', 'Мыски', 'Юрга'],
        'Иркутская область' => ['Иркутск', 'Братск', 'Ангарск', 'Зима', 'Киренск', 'Бодайбо', 'Тулун'],
        'Нижегородская область' => ['Нижний Новгород', 'Арзамас', 'Бор', 'Дзержинск', 'Городец', 'Навашино', 'Чкаловск'],
        'Астраханская область' => ['Астрахань', 'Ахтубинск', 'Камызяк', 'Знаменск', 'Нариманов', 'Харабали']
    ];
    foreach($russianTowns as $key => $region) {
        echo "<br>{$key}:<br>";
        foreach($region as $town) {
            echo "{$town},".PHP_EOL;
        }
    }
    echo "<br>";
   
    // Task 4. Функция транслитерации. 
    echo "<br>";
    $tr = ['а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d', 'е'=>'e', 'ж'=>'zh', 'з'=>'z', 'и'=>'i', 'к'=>'k', 'л'=>'l', 'м'=>'m', 'н'=>'n', 'о'=>'o', 'п'=>'p', 'р'=>'r', 'с'=>'s', 'т'=>'t', 'у'=>'u', 'ф'=>'f', 'х'=>'h', 'ц'=>'c', 'ч'=>'ch', 'ш'=>'sh', 'щ'=>'sch', 'ы'=>'y', 'э'=>'ea', 'ю'=>'yu', 'я'=>'ya', 'ь'=>''];
    foreach($russianTowns as $key => $region) {
        $translit = strtr($key, $tr);
        echo $translit.PHP_EOL;
    }
    echo "<br>";
    // Task 5. Замена пробелов.
    $gap = [' '=>'_'];
    foreach($russianTowns as $key => $region) {
        $result = strtr($key, $gap);
        echo "<br>{$result}";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Homework3</title>
</head>
<body>
<br>    
        <h4>Task 6. Генерируемое меню.</h4>
        <?php foreach($russianTowns as $key => $region): ?>
        <div class="dropdown open">
            <button class="btn btn-primary m-1 btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?=$key?>
                <span class="sr-only">Toggle Dropdown</span>
            </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <?php foreach($region as $key=>$town): ?>
            <a class="dropdown-item" href="https://ru.wikipedia.org/wiki/<?=$town?>"><?=$town?></a>
            <?php endforeach ?>
        </div>
        </div>
        <?php endforeach?>

        <h4>Task 7. Цикл с "пустым телом".</h4> 
    <?php

    echo "<br>";
    
    for($i=0; $i<=9; print $i++.PHP_EOL) {}

    echo "<br>";
    ?>
    
    <h4>Task 8. Вывод городов на букву К.</h4> 

    <?php
    foreach($russianTowns as $key => $region) {
        echo "<br>{$key}:<br>";
        foreach($region as $town) {
            if(mb_substr($town, 0, 1) =='К') {
            echo "{$town},".PHP_EOL;
            }
        }
    }
    echo "<br>";
    ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>