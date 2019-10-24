<?php

    echo '<link rel="stylesheet" href="pablic/css/style.css">'; 
   
    
    include './engine/autoload.php';
    autoload ('config');
    include TEMPLATES_DIR.'header.html';
    include ENGINE_DIR.'dB.php';
   
    //include TEMPLATES_DIR.'uploadImg.html'; //Загрузка img в DB с атрибутами (size, url)
    //include ENGINE_DIR.'uploadImgToDB.php'; //HTML форма для загрузки img

    include TEMPLATES_DIR.'galery.php'; //Вывод картинок в галерею

    
    
   
    

      
    
?>