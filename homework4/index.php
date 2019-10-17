<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework 4</title>
    <link rel="stylesheet" href="pablic/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Leckerli+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aleo&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        define('IMG_DIR', 'pablic/img/');

        include 'templates/header.html';

        function myScan(string $dir) {
            $list = scandir($dir);
            if(!$list) {return false;}
            unset($list[0], $list[1]);
            return $list;
        }
          
    ?>
    <div class="container">
        <?php foreach(myScan(IMG_DIR.'smallimg') as $file): ?>
            <a href="<?=IMG_DIR.'bigimg/'.$file?>" target="_blank"><img src="<?=IMG_DIR.'smallimg/'.$file?>" alt="блюдо"></a>
        <?php endforeach?>
    </div>

</body>
</html>